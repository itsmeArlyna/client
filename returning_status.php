<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Laboratory Equipment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        a {
            text-decoration: none;
            color: blue;
        }

        .col-2 img {
            width: 70%;
        }

        .header {
            align-items: center;
            justify-content: center;
            margin-top: 5%;
        }

        #logo {
            width: 80%;
        }

        .card {
            box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
        }
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
        if (isset($_GET['user_id_input'])) {
            $userId = $_GET['user_id_input'];
            include_once ("connection.php");
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
                            <form method="post" action="return.php" id="returnForm">
                                <input type="hidden" name="return" value="true">
                                <input type="hidden" name="user_id_input" value="<?php echo htmlspecialchars($userId); ?>">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Equipment Name</th>
                                            <th>Quantity (Good Condition)</th>
                                            <th>Quantity (Damaged)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row = $result->fetch_assoc()) {
                                            if (!empty($row['equipment_name']) && isset($row['quantity']) && $row['quantity'] > 0) {
                                                echo '<tr>';
                                                echo '<td>' . htmlspecialchars($row['equipment_name']) . '</td>';
                                                echo '<td>';
                                                echo '<div class="input-group">';
                                                echo '<button type="button" class="btn btn-outline-secondary" onclick="decrementItem(this)">-</button>';
                                                echo '<input type="text" class="form-control" name="good_quantity[' . $row['equipment_name'] . ']" value="0" readonly>';
                                                echo '<button type="button" class="btn btn-outline-secondary" onclick="incrementItem(this)">+</button>';
                                                echo '</div>';
                                                echo '</td>';
                                                echo '<td>';
                                                echo '<div class="input-group">';
                                                echo '<button type="button" class="btn btn-outline-secondary" onclick="decrementItem(this)">-</button>';
                                                echo '<input type="text" class="form-control" name="damaged_quantity[' . $row['equipment_name'] . ']" value="0" readonly>';
                                                echo '<button type="button" class="btn btn-outline-secondary" onclick="incrementItem(this)">+</button>';
                                                echo '</div>';
                                                echo '</td>';
                                                echo '</tr>';
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Confirm Return</button>
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
        function incrementItem(button) {
            var input = button.parentNode.querySelector('input[type="text"]');
            var value = parseInt(input.value, 10) || 0;
            input.value = value + 1;
        }

        function decrementItem(button) {
            var input = button.parentNode.querySelector('input[type="text"]');
            var value = parseInt(input.value, 10) || 0;
            input.value = value > 0 ? value - 1 : 0;
        }

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>