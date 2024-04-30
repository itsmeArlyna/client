<?php
include_once ("connection.php");

function fetchBorrowingInformation($equipmentId, $db)
{
    $query = "SELECT * FROM borrowings WHERE equipment_name LIKE ?";

    $stmt = $db->prepare($query);

    $equipmentId = '%' . $equipmentId . '%';

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
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST["user_id_input"];
    $borrowingData = array();
    for ($i = 1; $i <= 10; $i++) {
        $apparatusKey = 'apparatus' . $i;
        $quantityKey = 'apparatus' . $i . 'quantity';
        if (isset($_POST[$apparatusKey]) && isset($_POST[$quantityKey])) {
            $apparatusId = $_POST[$apparatusKey];
            $quantity = $_POST[$quantityKey];
            if ($quantity > 0) {
                $borrowingData[$apparatusId] = $quantity;
            }
        }
    }
    $userName = $_POST["name"];
    $userName1 = $_POST["name1"];
    $userName2 = $_POST["name2"];
    $userName3 = $_POST["name3"];
    $userName4 = $_POST["name4"];
    $userName5 = $_POST["name5"];
    $userName6 = $_POST["name6"];
    $userName7 = $_POST["name7"];
    $userName8 = $_POST["name8"];
    $userName9 = $_POST["name9"];
    $userName10 = $_POST["name10"];
    $userName11 = $_POST["name11"];
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
        $stmt = $db->prepare("INSERT INTO borrowings (user_id, equipment_name, quantity, name, member1, member2, member3, member4, member5, member6, member7, member8, member9, member10, prof, group_number, mobile_number, email, department, class_section, date_borrowed, date_return, borrowing_status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'unreturned')");

        $stmt->bind_param("ssssssssssssssssssssss", $userId, $apparatusId, $quantity, $userName, $userName1, $userName2, $userName3, $userName4, $userName5, $userName6, $userName7, $userName8, $userName9, $userName10, $userName11, $groupNumber, $mobileNumber, $email, $department, $classSection, $dateBorrowed, $dateReturn);

        foreach ($borrowingData as $apparatusId => $quantity) {
            // Insert borrowing information into borrowings table
            $stmt->bind_param("ssssssssssssssssssssss", $userId, $apparatusId, $quantity, $userName, $userName1, $userName2, $userName3, $userName4, $userName5, $userName6, $userName7, $userName8, $userName9, $userName10, $userName11, $groupNumber, $mobileNumber, $email, $department, $classSection, $dateBorrowed, $dateReturn);
            $stmt->execute();
        
            $updateQuery = "UPDATE laboratory_materials SET equipment_stock = equipment_stock - ? WHERE equipment_name = ?";
            $updateStmt = $db->prepare($updateQuery);
            $updateStmt->bind_param("ss", $quantity, $apparatusId);
            $updateStmt->execute();
            $updateStmt->close();
        }
        
        // After all borrowings are processed, close the main statement
        $stmt->close();

        $comPort = fopen("COM3", "w");
        fwrite($comPort, "1");
        fclose($comPort);

        http_response_code(200);

        $stmt->close();

    } catch (Exception $e) {
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