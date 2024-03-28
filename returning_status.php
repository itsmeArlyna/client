<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laboratory Equipment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        a { text-decoration: none; color: blue; }
        .col-2 img { width: 70%; }
        .header { align-items: center; justify-content: center; margin-top: 5%; }
        #logo { width: 80%; }
        .card { box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset; }
    </style>
</head>
<body>
    <div class="container pt-5 mb-5">
        <div class="row header mb-5">
            <div class="col-2 text-center">
                <img id="logo" src="img/logo1.jpg" alt="">
            </div>
            <div class="col-8 text-center">
                <h4>UNIVERSITY OF CEBU LAPU-LAPU AND MANDAUE <br> LABS</h4>
            </div>
            <div class="col-2">
                <img src="img/logo.png" alt="">
            </div>
        </div>

        <?php
        if (isset ($_GET['user_id_input'])) {
            $userId = $_GET['user_id_input'];
            include_once("connection.php");
            $sql = "SELECT * FROM borrowings WHERE user_id = ? AND borrowing_status = 'unreturned'";
            $stmt = $db->prepare($sql);
            $stmt->bind_param("s", $userId);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                ?>
                <div class="container pt-5 mb-5">
                    <div class="row mt-5">
                        <div class="col-12">
                            <form method="post" action="return.php" id="return">
                                <input type="hidden" name="return" value="true">
                                <input type="hidden" name="user_id_input" value="<?php echo htmlspecialchars($userId); ?>">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>LAB EQUIPMENT</th>
                                            <th>CONDITION AND STATUS OF APPARATUS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row = $result->fetch_assoc()) {
                                            if (!empty($row['equipment_name'])) {
                                                echo '<tr>';
                                                echo '<td>' . htmlspecialchars($row['equipment_name']) . '</td>';
                                                echo '<td>
                                                        <select name="condition_status[' . htmlspecialchars($row['equipment_name']) . ']" class="form-select">
                                                            <option value="" disabled selected>Select Condition</option>
                                                            <option value="Good">Good</option>
                                                            <option value="Damaged">Damaged</option>
                                                        </select>
                                                      </td>';
                                                echo '</tr>';
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <div class="row mb-5">
                                    <div class="col-md-6">
                                        <label for="datetimeInput" class="form-label">Current Date and Time:</label>
                                        <input style="opacity:0;" type="text" class="form-control" id="datetimeInput" name="return_datetime" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary">CONFIRM</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php
            } else {
                echo "<p>No equipment borrowed by this user.</p>";
            }
            $stmt->close();
            $db->close();
        } else {
            echo "<h2>User ID not found</h2>";
        }
        ?>
    </div>
    <script>
        document.getElementById('return_datetime').value = new Date().toISOString().slice(0, 19).replace('T', ' ');
        var datetimeInput = document.getElementById("datetimeInput");
        var formattedDateTime = new Date().toLocaleString();
        datetimeInput.value = formattedDateTime;
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>
</html>
