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
        }

        #prev-step-1 {
            margin-right: 1%;
        }
        a{
        color: black;
        text-decoration: none;
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
        <?php
        if (isset ($_GET['user_id_input'])) {
            $userId = $_GET['user_id_input'];
        } else {
            echo "<h2>User ID not found</h2>";
        }
        ?>
        <div class="row">
            <div class="col-12">
                <div class="card p-5">
                    <form action="insert_borrowing.php" method="POST" id="myForm">
                        <input type="hidden" value="<?php echo $userId ?>" name="user_id_input" > 
                        <div class="step" id="step-1">
                            <div class="first">
                                <div class="mb-3">
                                    <label for="equipment-name" class="col-form-label">Name:</label>
                                    <input type="text" class="form-control" id="equipment-name" name="name" placeholder="Enter your name">
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="group-number" class="col-form-label">Group Number:</label>
                                            <input type="text" class="form-control" id="group-number"
                                                name="group-number" placeholder="Enter your group number">
                                        </div>
                                        <div class="col-4">
                                            <label for="departments" class="col-form-label">Grade Level:</label>
                                            <select class="form-select" id="departments" name="departments">
                                                <option value="">Select department</option>
                                                <option value="Elementary">Elementary Department</option>
                                                <option value="Junior High School">Junior High School Department</option>
                                                <option value="Senior High">Senior High School Department</option>
                                                <option value="College">College Department</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <label for="class-section" class="col-form-label">Class Section</label>
                                            <input type="text" class="form-control" id="class-section"
                                                name="class-section" placeholder="Enter your section">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="date-borrowed" class="form-label">Date Borrowed:</label>
                                    <input type="date" class="form-control" id="date-borrowed" name="date-borrowed" readonly>
                                </div>

                                <div class="mb-3">
                                    <label for="date-return" class="form-label">Date Supposed to be Returned:</label>
                                    <div class="row">
                                        <div class="col-4 mb-3">
                                            <select class="form-control" name="month" id="month">
                                                <option value="" disabled selected>Select Month</option>
                                                <option value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </div>
                                        <div class="col-4 mb-3">
                                            <select class="form-control" name="day" id="day">
                                                <option value="" disabled selected>Select Day</option>
                                                <?php for ($i = 1; $i <= 31; $i++) { ?>
                                                    <option value="<?php echo $i; ?>">
                                                        <?php echo $i; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-4 mb-3">
                                            <select class="form-control" name="year" id="year">
                                                <option value="" disabled selected>Select Year</option>
                                                <?php
                                                $currentYear = date("Y");
                                                for ($i = $currentYear; $i <= $currentYear + 10; $i++) { ?>
                                                    <option value="<?php echo $i; ?>">
                                                        <?php echo $i; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-6 mb-3">
                                            <label for="time" class="form-label">Time:</label>
                                            <input name="time" class="form-control" type="time" id="time"
                                                placeholder="Time">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mt-5 text-center">
                                    <button type="button" class="btn btn-primary" id="next-step-2">Next</button>
                                </div>
                            </div>
                        </div>
                        <div class="step" id="step-2" style="display: none;">
                            <div class="second">
                                <div class="row ">
                                    <div class="col-12 mb-5 mt-5 text-center">
                                        <h4>Kindly scan the barcode of the borrowed apparatus against the scanner.</h4>
                                        <h5>If you have more than one apparatus, scan them one by one</h6>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-4 ">
                                        <input type="text" name="apparatus1" class="mb-3 form-control" id="input1"
                                            placeholder="Apparatus 1" autofocus>
                                        <input type="text" name="apparatus2" class="mb-3 form-control" id="input1"
                                            placeholder="Apparatus 2">
                                        <input type="text" name="apparatus3" class="mb-3 form-control" id="input1"
                                            placeholder="Apparatus 3">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-5 text-center justify-content-center d-flex">
                                <button type="button" class=" btn btn-secondary" id="prev-step-1">Previous</button>
                                <button type="submit" class="btn btn-success" id="confirm-button">Confirm</button>
                            </div>
                        </div>
                </div>

                </form>
            </div>

            <script>
                var today = new Date();

                var dd = String(today.getDate()).padStart(2, '0');
                var mm = String(today.getMonth() + 1).padStart(2, '0');
                var yyyy = today.getFullYear();

                today = yyyy + '-' + mm + '-' + dd;

                document.getElementById('date-borrowed').value = today;


                document.addEventListener("DOMContentLoaded", function () {
                    const step1 = document.getElementById('step-1');
                    const step2 = document.getElementById('step-2');
                    const nextStep2Button = document.getElementById('next-step-2');
                    const prevStep1Button = document.getElementById('prev-step-1');
                    const confirmButton = document.getElementById('confirm-button');

                    confirmButton.style.display = 'none';
                    prevStep1Button.style.display = 'none';

                    nextStep2Button.addEventListener('click', function () {
                        step1.style.display = 'none';
                        step2.style.display = 'block';

                        confirmButton.style.display = 'block';
                        prevStep1Button.style.display = 'block';
                    });

                    prevStep1Button.addEventListener('click', function () {
                        step2.style.display = 'none';
                        step1.style.display = 'block';

                        confirmButton.style.display = 'none';
                        prevStep1Button.style.display = 'none';
                        prevStep2Button.style.display = 'none';
                    });
                });


                document.getElementById("myForm").addEventListener("submit", function (event) {
                    event.preventDefault(); 

                    var formData = new FormData(this);

                    fetch("insert_borrowing.php", {
                        method: "POST",
                        body: formData
                    })
                        .then(response => {
                            if (response.ok) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success',
                                    text: 'Your Borrowing transaction has been approved!'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href = "index.php"; 
                                    }
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Something went wrong!'
                                });
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                });

            </script>
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                crossorigin="anonymous"></script>
</body>

</html>