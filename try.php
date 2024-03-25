<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laboratory Equipment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
        }

        #logo {
            width: 80%;
        }

        .card {
            box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
        }

        .second {
            display: none;
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
                <h3>UNIVERSITY OF CEBU LAPU-LAPU AND MANDAUE <br> LABS</h3>
            </div>
            <div class="col-2">
                <img src="img/logo.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card p-5">
                    <div class="first">
                    <form action="insert.php" method="POST">
                        <div class="mb-3">
                            <label for="equipment-name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" id="equipment-name" name="equipment-name">
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-4">
                                    <label for="group-number" class="col-form-label">Group Number:</label>
                                    <input type="text" class="form-control" id="group-number" name="group-number">
                                </div>
                                <div class="col-4">
                                    <label for="departments" class="col-form-label">Grade Level:</label>
                                    <select class="form-select" id="departments" name="departments">
                                        <option value="">Select a department</option>
                                        <option value="elementary">Elementary Department</option>
                                        <option value="junior_high">Junior High School Department</option>
                                        <option value="senior_high">Senior High School Department</option>
                                        <option value="college">College Department</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label for="group-number" class="col-form-label">Class Section</label>
                                    <input type="text" class="form-control" id="group-number" name="group-number">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="date-borrowed" class="form-label">Date Borrowed:</label>
                            <input type="date" class="form-control" id="date-borrowed" name="date-borrowed">
                        </div>

                        <div class="mb-3">
                            <label for="date-return" class="form-label">Date Supposed to be Returned:</label>
                            <div class="row">
                                <div class="col-3">
                                    <select class="form-control" id="month">
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
                                <div class="col-3">
                                    <select class="form-control" id="day">
                                        <option value="" disabled selected>Select Day</option>
                                        <?php for ($i = 1; $i <= 31; $i++) { ?>
                                            <option value="<?php echo $i; ?>">
                                                <?php echo $i; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <select class="form-control" id="year">
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
                                <div class="col-3">
                                    <input class="form-control" type="time" id="time" placeholder="Time">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-success" id="confirm-button">PROCEED</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                    <div class="second">
                        <form id="second-step-form" action="insert_borrowings.php" method="post">
                            <div class="row justify-content-center">
                                <div class="col-4 ">
                                    <input type="text" class="mb-3 form-control" id="input1" placeholder="Apparatus 1"
                                        autofocus>
                                    <input type="text" class="mb-3 form-control" id="input2" placeholder="Apparatus 2">
                                    <input type="text" class="mb-3 form-control" id="input3" placeholder="Apparatus 3">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <button type="button" class="btn btn-primary" id="prev-button">Previous</button>
                        <button type="button" class="btn btn-primary" id="next-button">Next</button>
                        <button type="submit" form="second-step-form" class="btn btn-success"
                            id="confirm-button" style="display: none;">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const firstStepForm = document.getElementById('first-step-form');
            const secondStepForm = document.getElementById('second-step-form');
            const prevButton = document.getElementById('prev-button');
            const nextButton = document.getElementById('next-button');
            const confirmButton = document.getElementById('confirm-button');

            prevButton.style.display = 'none'; // Hide the previous button initially

            // Next button functionality
            nextButton.addEventListener('click', function () {
                firstStepForm.style.display = 'none';
                secondStepForm.style.display = 'block';
                prevButton.style.display = 'block';
                nextButton.style.display = 'none';
                confirmButton.style.display = 'block';
            });

            // Previous button functionality
            prevButton.addEventListener('click', function () {
                firstStepForm.style.display = 'block';
                secondStepForm.style.display = 'none';
                prevButton.style.display = 'none';
                nextButton.style.display = 'block';
                confirmButton.style.display = 'none';
            });
        });
    </script>

    <script>
        // Set default date
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();
        today = yyyy + '-' + mm + '-' + dd;
        document.getElementById('date-borrowed').value = today;
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
