<?php
include_once('connection.php');
// Fetch user name based on ID number
if (isset($_POST['idNumber'])) {
    $idNumber = $_POST['idNumber'];

    $sql = "SELECT name FROM registered_users WHERE id_number = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("s", $idNumber);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo $row['name'];
    } else {
        echo "User not found";
    }

    $stmt->close();
}

$db->close();
?>
