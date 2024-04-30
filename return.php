<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['return']) && $_POST['return'] == 'true') {
    $userId = $_POST['user_id_input'];

    include_once("connection.php");

    // Check database connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    foreach ($_POST['good_quantity'] as $equipmentId => $goodQuantity) {
        $goodQuantity = intval($goodQuantity);
        $damagedQuantity = isset($_POST['damaged_quantity'][$equipmentId]) ? intval($_POST['damaged_quantity'][$equipmentId]) : 0;

        $updateBorrowingsSql = "UPDATE borrowings SET good_quantity = ?, damaged_quantity = ?, borrowing_status = 'returned' WHERE equipment_name = ? AND user_id = ?";
        $stmt = $db->prepare($updateBorrowingsSql);

        if (!$stmt) {
            die("Prepare failed: " . $db->error);
        }

        $stmt->bind_param("iiss", $goodQuantity, $damagedQuantity, $equipmentId, $userId);
        $stmt->execute();

        if ($stmt->error) {
            die("Execute failed: " . $stmt->error);
        }

        $stmt->close();

        if ($damagedQuantity > 0) {
            $updateMaterialsSql = "UPDATE laboratory_materials SET equipment_damaged = equipment_damaged + ? WHERE equipment_name = ?";
            $stmtMaterials = $db->prepare($updateMaterialsSql);

            if (!$stmtMaterials) {
                die("Prepare failed: " . $db->error);
            }

            $stmtMaterials->bind_param("is", $damagedQuantity, $equipmentId);
            $stmtMaterials->execute();

            if ($stmtMaterials->error) {
                die("Execute failed: " . $stmtMaterials->error);
            }

            $stmtMaterials->close();
        }
    }

    $db->close();

    // Redirect to original page with success message
    header("Location: success.php?user_id_input=" . urlencode($userId) . "&return_success=1");
    exit();
} else {
    // Redirect to error page if accessed incorrectly
    header("Location: error_page.php");
    exit();
}
?>
