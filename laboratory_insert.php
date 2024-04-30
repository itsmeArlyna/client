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
        $number = $_POST["number"];
        $time = $_POST["time"];
        $day = $_POST["day"];
    
        // Check if the record already exists
        $stmt_check = $db->prepare("SELECT * FROM lab_schedule WHERE room_number = ? AND time_slot = ? AND day_of_week = ?");
        $stmt_check->bind_param("sss", $number, $time, $day);
        $stmt_check->execute();
        $result = $stmt_check->get_result();
    
        if ($result->num_rows > 0) {
            // Duplicate entry found
            echo "<script>";
            echo "Swal.fire('Error', 'This room is already scheduled at the specified time on the selected day.', 'error').then(() => { window.location.href = 'scheduling.php'; });";
            echo "</script>";
        } else {
            $stmt_insert = $db->prepare("INSERT INTO lab_schedule (teacher_name, room_number, time_slot, day_of_week) VALUES (?, ?, ?, ?)");
            $stmt_insert->bind_param("ssss", $name, $number, $time, $day);
    
            if ($stmt_insert->execute() === TRUE) {
                echo "<script>";
                echo "Swal.fire('Success', 'Laboratory room scheduled successfully!', 'success').then(() => { window.location.href = 'scheduling.php'; });";
                echo "</script>";
            } else {
                echo "<script>";
                echo "Swal.fire('Error', 'Error inserting record: " . $stmt_insert->error . "', 'error');";
                echo "</script>";
            }
    
            // Close insert statement
            $stmt_insert->close();
        }
    
        $stmt_check->close();
        $db->close();
    }
    ?>
    
</body>
</html>
