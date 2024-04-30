
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Submission with SweetAlert</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
include_once('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $id = $_POST["id_number"];

    $stmt_insert = $db->prepare("INSERT INTO registered_users (name, id_number) VALUES (?,?)");
    $stmt_insert->bind_param("ss", $name, $id);

    if ($stmt_insert->execute() === TRUE) {
        echo "<script>";
        echo "Swal.fire('Success', 'Registered successfully!', 'success').then(() => { window.location.href = 'index.php'; });";
        echo "</script>";
    } else {
        echo "<script>";
        echo "Swal.fire('Error', 'Error inserting record: " . $stmt_insert->error . "', 'error');";
        echo "</script>";
    }

    $stmt_insert->close();

    
    exit; 
}

$db->close();
?>

    
</body>
</html>
