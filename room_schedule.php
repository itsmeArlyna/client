<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Room Schedule</title>
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
        include_once('connection.php');

        $sql = "SELECT * FROM lab_schedule";

        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            ?>
            <table class="table table-hover">
                    <tr>
                        <th>Teacher's Name</th>
                        <th>Room Number</th>
                        <th>Time</th>
                        <th>Day</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?= $row['teacher_name'] ?></td>
                        <td><?= $row['room_number'] ?></td>
                        <td><?= $row['time_slot'] ?></td>
                        <td><?= $row['day_of_week'] ?></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
            <?php
            mysqli_free_result($result);
        } else {
            echo "<p>No records found</p>";
        }
        ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>
</html>
