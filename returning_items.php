<?php
include_once("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['user_id']) && isset($_POST['conditions'])) {
        $userId = $_POST['user_id'];
        $conditions = $_POST['conditions'];

        $getUserQuery = "SELECT equipment_name FROM borrowings WHERE user_id = ?";
        $getUserStmt = $db->prepare($getUserQuery);
        
        if (!$getUserStmt) {
            die("Error in preparing statement: " . $db->error);
        }

        $getUserStmt->bind_param("i", $userId);

        if (!$getUserStmt->execute()) {
            die("Error in executing statement: " . $getUserStmt->error);
        }

        $getUserStmt->bind_result($userName);

        $getUserStmt->fetch();

        $getUserStmt->close();

        $stmt = $db->prepare("INSERT INTO returned_items (user_id, equipment_name, condition_status) VALUES (?, ?, ?)");

        if (!$stmt) {
            die("Error in preparing statement: " . $db->error);
        }

        $stmt->bind_param("iss", $userId, $equipmentId, $conditionStatus);

        foreach ($conditions as $condition) {
            $equipmentId = "";
            $conditionStatus = $condition;

            if (!$stmt->execute()) {
                die("Error in executing statement: " . $stmt->error);
            }
        }

        $stmt->close();

        header("Location: success.php?user_name=".urlencode($userName));

        exit();
    } else {
        echo "Please fill all the required fields.";
    }
}
?>
