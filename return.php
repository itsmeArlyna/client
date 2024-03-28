<?php

include_once("connection.php");

function processReturn($userId, $equipmentId, $conditionStatus, $db) {
    $currentDate = date('Y-m-d H:i:s'); // Get the current date and time

    $query = "UPDATE borrowings SET borrowing_status = 'returned', date_return = ?, condition_status = ? WHERE user_id = ? AND equipment_name = ? AND borrowing_status = 'unreturned'";

    $stmt = $db->prepare($query);

    $stmt->bind_param("ssss", $currentDate, $conditionStatus, $userId, $equipmentId);

    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $response = array("message" => "Equipment returned successfully.");
    } else {
        $response = array("error" => "Error: Equipment not found or already returned.");
    }

    $stmt->close();

    return $response;
}


if (isset($_POST['return']) && $_POST['return'] === "true") {
    
    $userId = $_POST['user_id_input'];
    
    if (isset($_POST['condition_status']) && is_array($_POST['condition_status'])) {
        foreach ($_POST['condition_status'] as $equipmentId => $condition) {
            // Assume $equipmentId is directly usable to identify the equipment in the database
            $query = "UPDATE borrowings SET condition_status = ?, borrowing_status = 'returned', date_return = NOW() WHERE user_id = ? AND equipment_name = ? AND borrowing_status = 'unreturned'";
            $stmt = $db->prepare($query);

            $getUserQuery = "SELECT name FROM borrowings WHERE user_id = ?";
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

            if (!$stmt) {
                // Query preparation failed.
                echo "Prepare failed: (" . $db->errno . ") " . $db->error;
                continue; // Skip this iteration.
            }

            $stmt->bind_param("sss", $condition, $userId, $equipmentId);
            if (!$stmt->execute()) {
                // Execution failed.
                echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
            } else {
                header("Location: success.php?user_name=".urlencode($userName));
            }
        }
    } else {
        echo "No condition status received.";
    }
} else {
    echo "Invalid request.";
}

?>
