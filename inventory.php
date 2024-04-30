<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laboratory Equipment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style>
        a {
            text-decoration: none;
            color: blue;
        }

        .col-2 img {
            width: 80%;
        }

        .header {
            align-items: center;
            justify-content: center;
            margin-top: 5%;
        }

        #logo {
            width: 100%;
        }

        .card {
            box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
            margin-top: 10%;
            border-radius: 10px;
            text-align: center;
            padding: 3%;
            cursor: pointer;
            transition: 0.1s;
        }
        .card:hover{
            transform: scale(.9);
        }

        #prev-step-1 {
            margin-right: 1%;
        }

        a {
            color: black;
            text-decoration: none;
        }

        table {
            margin-left: 5rem;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-2">
                <a href="index.php">
                    <img src="img/home.png" alt="">
                </a>
            </div>
        </div>
    </div>
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
        <div class="row">
            <?php
            include_once ('connection.php');
            $sql = "SELECT * FROM laboratory_materials";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="col-4">
                        <div class="card" onclick="showDetails('<?= $row['equipment_name'] ?>')">
                            <p><?= $row['equipment_name'] ?></p>
                        </div>
                    </div>
                    <?php
                }
                mysqli_free_result($result);
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table id="equipmentTable" class="table table-bordered">
                <thead>
                    <th>Equipment Name</th>
                    <th>Quantity</th>
                    <th>Capacity</th>
                    <th>In stock</th>
                    <th>Damaged Items</th>
                </thead>
                <tbody id="tableBody">
                    <!-- Table body content will be dynamically updated -->
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function showDetails(equipmentName) {
            // Fetch the equipment details for the selected equipmentName via AJAX
            const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    const equipmentDetails = JSON.parse(this.responseText);
                    updateTable(equipmentDetails);
                }
            };
            xhttp.open("GET", `fetch_equipment_details.php?name=${equipmentName}`, true);
            xhttp.send();
        }

        function updateTable(equipmentDetails) {
            const tableBody = document.getElementById('tableBody');
            tableBody.innerHTML = ''; // Clear existing table content

            // Create a new row for the equipment details
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td>${equipmentDetails.equipment_name}</td>
                <td>${equipmentDetails.equipment_quantity}</td>
                <td>${equipmentDetails.equipment_capacity}</td>
                <td>${equipmentDetails.equipment_stock}</td>
                <td>${equipmentDetails.equipment_damaged}</td>
            `;
            tableBody.appendChild(newRow);
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
