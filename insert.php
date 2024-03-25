<?php
$db = new mysqli('localhost', 'root', '', "laboratory");

if ($db->connect_error){
    die("Connection failed: " . $db->connect_error);
}

$equipmentName = $_POST['equipment-name'];
$groupNumber = $_POST['group-number'];
$department = $_POST['departments'];
$classSection = $_POST['class-section'];
$dateBorrowed = $_POST['date-borrowed'];
$dateReturn = $_POST['date-return'];
$phoneNumber = $_POST['phone-number'];
$email = $_POST['email'];

$equipmentName = mysqli_real_escape_string($db, $equipmentName);
$groupNumber = mysqli_real_escape_string($db, $groupNumber);
$department = mysqli_real_escape_string($db, $department);
$classSection = mysqli_real_escape_string($db, $classSection);
$dateBorrowed = mysqli_real_escape_string($db, $dateBorrowed);
$dateReturn = mysqli_real_escape_string($db, $dateReturn);
$phoneNumber = mysqli_real_escape_string($db, $phoneNumber);
$email = mysqli_real_escape_string($db, $email);

$sql = "INSERT INTO equipment_borrowed (equipment_name, group_number, department, class_section, date_borrowed, date_return, phone_number, email)
VALUES ('$equipmentName', '$groupNumber', '$department', '$classSection', '$dateBorrowed', '$dateReturn', '$phoneNumber', '$email')";

if ($db->query($sql) === TRUE) {
    header("Location: display_data.php?success=1");
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();
?>
