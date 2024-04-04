<?php
include_once("connection.php");

function fetchBorrowingInformation($equipmentId, $db) {
    $query = "SELECT * FROM borrowings WHERE equipment_name = ?";
    
    $stmt = $db->prepare($query);
    
    $stmt->bind_param("s", $equipmentId);
    
    $stmt->execute();
    
    $result = $stmt->get_result();
    
    $borrowingInfo = array();
    
    while ($row = $result->fetch_assoc()) {
        $borrowingInfo[] = $row; 
    }
    
    $stmt->close();
    
    return $borrowingInfo;
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["equipment_name"])) {
    $equipmentId = $_GET["equipment_name"];

    $borrowingInfo = fetchBorrowingInformation($equipmentId, $db);

    echo json_encode($borrowingInfo);
} 
elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST["user_id_input"];
    $equipmentIds = array($_POST['apparatus1'], $_POST['apparatus2'], $_POST['apparatus3']); 
    $userName = $_POST["name"];
    $groupNumber = $_POST['group-number'];
    $mobileNumber = $_POST['mobile-number'];
    $email = $_POST['email'];
    $department = $_POST['departments'];
    $classSection = $_POST['class-section'];
    $dateBorrowed = $_POST['date-borrowed'];
    $dateReturnMonth = $_POST['month'];
    $dateReturnDay = $_POST['day'];
    $dateReturnYear = $_POST['year'];
    $time = $_POST['time'];

    $dateReturn = $dateReturnYear . '-' . $dateReturnMonth . '-' . $dateReturnDay . ' ' . $time;

    try {
        $stmt = $db->prepare("INSERT INTO borrowings (user_id, equipment_name, name, group_number, mobile_number, email, department, class_section, date_borrowed, date_return, borrowing_status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'unreturned')");
        
        $stmt->bind_param("ssssssssss", $userId, $equipmentId, $userName, $groupNumber, $mobileNumber, $email, $department, $classSection, $dateBorrowed, $dateReturn);
        
        foreach ($equipmentIds as $equipmentId) {
            if (!empty($equipmentId)) {
                $stmt->execute();
            }
        }
        
        // Send '1' to COM3 if insertion is successful
        $comPort = fopen("COM3", "w");
        fwrite($comPort, "1");
        fclose($comPort);
        
        http_response_code(200);
    
        $stmt->close();
    
    } catch (Exception $e) {
        // Send '0' to COM3 if there's an error
        $comPort = fopen("COM3", "w");
        fwrite($comPort, "0");
        fclose($comPort);
        
        http_response_code(500);
        echo json_encode(array("error" => "Error: " . $e->getMessage()));
    }
} else {
    http_response_code(400);
    echo json_encode(array("error" => "Error: Invalid request."));
}
?>
