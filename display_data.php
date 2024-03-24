<?php
// Check for success message
if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo "<div class='alert alert-success' role='alert'>YOUR BORROWING TRANSACTION HAS BEEN APPROVED!</div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

<div class="container mt-5">
    <h2 class="mb-5">Equipment Borrowed</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Equipment Name</th>
                <th>Group Number</th>
                <th>Department</th>
                <th>Class Section</th>
                <th>Date Borrowed</th>
                <th>Date of Return</th>
                <th>Phone Number</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Database connection
            $db = new mysqli('localhost', 'root', '', 'laboratory');
            if ($db->connect_error) {
                die("Connection failed: " . $db->connect_error);
            }

            // Fetch data from database
            $sql = "SELECT * FROM equipment_borrowed";
            $result = $db->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['equipment_name'] . "</td>";
                    echo "<td>" . $row['group_number'] . "</td>";
                    echo "<td>" . $row['department'] . "</td>";
                    echo "<td>" . $row['class_section'] . "</td>";
                    echo "<td>" . $row['date_borrowed'] . "</td>";
                    echo "<td>" . $row['date_return'] . "</td>";
                    echo "<td>" . $row['phone_number'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='9'>No data found</td></tr>";
            }

            $db->close();
            ?>
        </tbody>
    </table>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
