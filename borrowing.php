<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Borrowing </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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
        <?php
        if (isset($_GET['user_id_input'])) {
            $userId = $_GET['user_id_input'];
        } else {
            echo "<h2>User ID not found</h2>";
        }
        ?>

        <div class="row">
            <div class="col-12">
                <div class="card p-5">
                    <form action="insert_borrowing.php" method="POST" id="myForm">
                        <input type="hidden" value="<?php echo $userId ?>" name="user_id_input">
                        <div class="step" id="step-1">
                            <div class="first">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-5">
                                                    <label for="equipment-name" class="col-form-label"><b>Leader's
                                                            Name:</b></label>
                                                    <div class="d-flex">
                                                        <input type="text" class="form-control idNumberInput"
                                                            name="name" placeholder="Enter leader's ID" id="leader"
                                                            autocomplete="off">
                                                        <button id="fetchNameButton" class="fetchNameButton"
                                                            style="opacity:0;"></button>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="equipment-name" class="col-form-label"><b>Members
                                                                Name:</b></label>
                                                        <div class="d-flex">
                                                            <input type="text" class="form-control idNumberInput"
                                                                id="m1" name="name1" placeholder="Enter member's ID"
                                                                autocomplete="off">
                                                            <button id="fetchNameButton1" class="fetchNameButton"
                                                                style="opacity:0;"></button>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="d-flex">
                                                            <input type="text" class="form-control idNumberInput"
                                                                id="m2" name="name2" placeholder="Enter member's ID"
                                                                autocomplete="off">
                                                            <button id="fetchNameButton2" class="fetchNameButton"
                                                                style="opacity:0;"></button>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="d-flex">
                                                            <input type="text" class="form-control idNumberInput"
                                                                id="m3" name="name3" placeholder="Enter member's ID"
                                                                autocomplete="off">
                                                            <button id="fetchNameButton3" class="fetchNameButton"
                                                                style="opacity:0;"></button>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="d-flex">
                                                            <input type="text" class="form-control idNumberInput"
                                                                id="m4" name="name4" placeholder="Enter member's ID"
                                                                autocomplete="off">
                                                            <button id="fetchNameButton4" class="fetchNameButton"
                                                                style="opacity:0;"></button>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="d-flex">
                                                            <input type="text" class="form-control idNumberInput"
                                                                id="m5" name="name5" placeholder="Enter member's ID"
                                                                autocomplete="off">
                                                            <button id="fetchNameButton5" class="fetchNameButton"
                                                                style="opacity:0;"></button>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="d-flex">
                                                            <input type="text" class="form-control idNumberInput"
                                                                id="m6" name="name6" placeholder="Enter member's ID"
                                                                autocomplete="off">
                                                            <button id="fetchNameButton6" class="fetchNameButton"
                                                                style="opacity:0;"></button>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="d-flex">
                                                            <input type="text" class="form-control idNumberInput"
                                                                id="m7" name="name7" placeholder="Enter member's ID"
                                                                autocomplete="off">
                                                            <button id="fetchNameButton7" class="fetchNameButton"
                                                                style="opacity:0;"></button>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="d-flex">
                                                            <input type="text" class="form-control idNumberInput"
                                                                id="m8" name="name8" placeholder="Enter member's ID"
                                                                autocomplete="off">
                                                            <button id="fetchNameButton8" class="fetchNameButton"
                                                                style="opacity:0;"></button>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="d-flex">
                                                            <input type="text" class="form-control idNumberInput"
                                                                id="m9" name="name9" placeholder="Enter member's ID"
                                                                autocomplete="off">
                                                            <button id="fetchNameButton9" class="fetchNameButton"
                                                                style="opacity:0;"></button>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="d-flex">
                                                            <input type="text" class="form-control idNumberInput"
                                                                id="m10" name="name10" placeholder="Enter member's ID"
                                                                autocomplete="off">
                                                            <button id="fetchNameButton10" class="fetchNameButton"
                                                                style="opacity:0;"></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label for="equipment-name" class="col-form-label"><b>
                                                        Attendance:</b></label>
                                                <select class="form-control" id="attendanceSelect">
                                                    <option value="present">Present</option>
                                                    <option value="absent">Absent</option>
                                                </select>
                                                <label for="equipment-name" class="col-form-label"
                                                    style="opacity:0;"><b>
                                                        Attendance:</b></label>
                                                <select class="form-control mb-3" id="attendanceSelect">
                                                    <option value="present">Present</option>
                                                    <option value="absent">Absent</option>
                                                </select>
                                                <select class="form-control mb-3" id="attendanceSelect">
                                                    <option value="present">Present</option>
                                                    <option value="absent">Absent</option>
                                                </select>
                                                <select class="form-control mb-3" id="attendanceSelect">
                                                    <option value="present">Present</option>
                                                    <option value="absent">Absent</option>
                                                </select>
                                                <select class="form-control mb-3" id="attendanceSelect">
                                                    <option value="present">Present</option>
                                                    <option value="absent">Absent</option>
                                                </select>
                                                <select class="form-control mb-3" id="attendanceSelect">
                                                    <option value="present">Present</option>
                                                    <option value="absent">Absent</option>
                                                </select>
                                                <select class="form-control mb-3" id="attendanceSelect">
                                                    <option value="present">Present</option>
                                                    <option value="absent">Absent</option>
                                                </select>
                                                <select class="form-control mb-3" id="attendanceSelect">
                                                    <option value="present">Present</option>
                                                    <option value="absent">Absent</option>
                                                </select>
                                                <select class="form-control mb-3" id="attendanceSelect">
                                                    <option value="present">Present</option>
                                                    <option value="absent">Absent</option>
                                                </select>
                                                <select class="form-control mb-3" id="attendanceSelect">
                                                    <option value="present">Present</option>
                                                    <option value="absent">Absent</option>
                                                </select>
                                                <select class="form-control mb-3" id="attendanceSelect">
                                                    <option value="present">Present</option>
                                                    <option value="absent">Absent</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-4">
                                                    <label for="group-number" class="col-form-label">Group
                                                        Number:</label>
                                                    <input type="text" class="form-control" id="group-number"
                                                        name="group-number" placeholder="Enter your group number"
                                                        autocomplete="off">
                                                </div>
                                                <div class="col-4">
                                                    <label for="departments" class="col-form-label">Grade Level:</label>
                                                    <select class="form-select" id="departments" name="departments">
                                                        <option value="">Select department</option>
                                                        <option value="Elementary">Elementary Department</option>
                                                        <option value="Junior High School">Junior High School Department
                                                        </option>
                                                        <option value="Senior High">Senior High School Department
                                                        </option>
                                                        <option value="College">College Department</option>
                                                    </select>
                                                </div>
                                                <div class="col-4">
                                                    <label for="class-section" class="col-form-label">Class
                                                        Section</label>
                                                    <input type="text" class="form-control" id="class-section"
                                                        name="class-section" placeholder="Enter your section"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="group-number" class="col-form-label">Mobile
                                                        number:</label>
                                                    <input type="number" class="form-control" id="group-number"
                                                        name="mobile-number" placeholder="Enter your mobile number"
                                                        autocomplete="off">
                                                </div>
                                                <div class="col-6">
                                                    <label for="class-section" class="col-form-label">Email
                                                        address:</label>
                                                    <input type="email" class="form-control" id="class-section"
                                                        name="email" placeholder="Enter your email address"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 col-6">
                                            <label for="date-borrowed" class="form-label">Date Borrowed:</label>
                                            <input type="date" class="form-control" id="date-borrowed"
                                                name="date-borrowed" readonly>
                                        </div>

                                        <div class="mb-3">
                                            <label for="date-return" class="form-label">Date Supposed to be
                                                Returned:</label>
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
                                <div class="row col-12">
                                    <table>
                                        <thead>
                                            <th>Apparatus name</th>
                                            <th>Quantity</th>
                                        </thead>
                                        <tr>
                                            <td>
                                                <div class="row justify-content-center">
                                                    <div class="col-12 d-flex">
                                                        <input type="text" name="apparatus1" class="m-1 form-control"
                                                            id="input1" placeholder="" autofocus
                                                            onkeydown="moveToNext(event, 'input2')" autocomplete="off">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-5 d-flex">
                                                        <button class="btn btn-warning" type="button"
                                                            onclick="decrementItem('input1')"><b>-</b></button>
                                                        <input style="margin-left: 5px; margin-right: 5px; " type="text"
                                                            class="form-control" id="input1Value" value="0"
                                                            name="apparatus1quantity" readonly>
                                                        <button class="btn btn-primary" type="button"
                                                            onclick="incrementItem('input1')"><b>+</b></button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row justify-content-center">
                                                    <div class="col-12 d-flex">
                                                        <input type="text" name="apparatus2" class="m-1 form-control"
                                                            id="input2" placeholder=""
                                                            onkeydown="moveToNext(event, 'input3')" autocomplete="off">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-5 d-flex">
                                                        <button class="btn btn-warning" type="button"
                                                            onclick="decrementItem('input2')"><b>-</b></button>
                                                        <input style="margin-left: 5px; margin-right: 5px; " type="text"
                                                            class="form-control" id="input2Value" value="0"
                                                            name="apparatus2quantity" readonly>
                                                        <button class="btn btn-primary" type="button"
                                                            onclick="incrementItem('input2')"><b>+</b></button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row justify-content-center">
                                                    <div class="col-12 d-flex">
                                                        <input type="text" name="apparatus3" class="m-1 form-control"
                                                            id="input3" onkeydown="moveToNext(event, 'input4')"
                                                            placeholder="" autocomplete="off">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-5 d-flex">
                                                        <button class="btn btn-warning" type="button"
                                                            onclick="decrementItem('input3')"><b>-</b></button>
                                                        <input style="margin-left: 5px; margin-right: 5px; " type="text"
                                                            class="form-control" id="input3Value" value="0"
                                                            name="apparatus3quantity" readonly>
                                                        <button class="btn btn-primary" type="button"
                                                            onclick="incrementItem('input3')"><b>+</b></button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row justify-content-center">
                                                    <div class="col-12 d-flex">
                                                        <input type="text" name="apparatus4" class="m-1 form-control"
                                                            id="input4" onkeydown="moveToNext(event, 'input5')"
                                                            placeholder="" autocomplete="off">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-5 d-flex">
                                                        <button class="btn btn-warning" type="button"
                                                            onclick="decrementItem('input4')"><b>-</b></button>
                                                        <input style="margin-left: 5px; margin-right: 5px; " type="text"
                                                            class="form-control" id="input4Value" value="0"
                                                            name="apparatus4quantity" readonly>
                                                        <button class="btn btn-primary" type="button"
                                                            onclick="incrementItem('input4')"><b>+</b></button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row justify-content-center">
                                                    <div class="col-12 d-flex">
                                                        <input type="text" name="apparatus5" class="m-1 form-control"
                                                            id="input5" onkeydown="moveToNext(event, 'input6')"
                                                            placeholder="" autocomplete="off">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-5 d-flex">
                                                        <button class="btn btn-warning" type="button"
                                                            onclick="decrementItem('input5')"><b>-</b></button>
                                                        <input style="margin-left: 5px; margin-right: 5px; " type="text"
                                                            class="form-control" id="input5Value" value="0"
                                                            name="apparatus5quantity" readonly>
                                                        <button class="btn btn-primary" type="button"
                                                            onclick="incrementItem('input5')"><b>+</b></button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row justify-content-center">
                                                    <div class="col-12 d-flex">
                                                        <input type="text" name="apparatus6" class="m-1 form-control"
                                                            id="input6" onkeydown="moveToNext(event, 'input7')"
                                                            placeholder="" autocomplete="off">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-5 d-flex">
                                                        <button class="btn btn-warning" type="button"
                                                            onclick="decrementItem('input6')"><b>-</b></button>
                                                        <input style="margin-left: 5px; margin-right: 5px; " type="text"
                                                            class="form-control" id="input6Value" value="0"
                                                            name="apparatus6quantity" readonly>
                                                        <button class="btn btn-primary" type="button"
                                                            onclick="incrementItem('input6')"><b>+</b></button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row justify-content-center">
                                                    <div class="col-12 d-flex">
                                                        <input type="text" name="apparatus7" class="m-1 form-control"
                                                            id="input7" onkeydown="moveToNext(event, 'input8')"
                                                            placeholder="" autocomplete="off">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-5 d-flex">
                                                        <button class="btn btn-warning" type="button"
                                                            onclick="decrementItem('input7')"><b>-</b></button>
                                                        <input style="margin-left: 5px; margin-right: 5px; " type="text"
                                                            class="form-control" id="input7Value" value="0"
                                                            name="apparatus7quantity" readonly>
                                                        <button class="btn btn-primary" type="button"
                                                            onclick="incrementItem('input7')"><b>+</b></button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row justify-content-center">
                                                    <div class="col-12 d-flex">
                                                        <input type="text" name="apparatus8" class="m-1 form-control"
                                                            id="input8" onkeydown="moveToNext(event, 'input9')"
                                                            placeholder="" autocomplete="off">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-5 d-flex">
                                                        <button class="btn btn-warning" type="button"
                                                            onclick="decrementItem('input8')"><b>-</b></button>
                                                        <input style="margin-left: 5px; margin-right: 5px; " type="text"
                                                            class="form-control" id="input8Value" value="0"
                                                            name="apparatus8quantity" readonly>
                                                        <button class="btn btn-primary" type="button"
                                                            onclick="incrementItem('input8')"><b>+</b></button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row justify-content-center">
                                                    <div class="col-12 d-flex">
                                                        <input type="text" name="apparatus9" class="m-1 form-control"
                                                            id="input9" onkeydown="moveToNext(event, 'input10')"
                                                            placeholder="" autocomplete="off">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-5 d-flex">
                                                        <button class="btn btn-warning" type="button"
                                                            onclick="decrementItem('input9')"><b>-</b></button>
                                                        <input style="margin-left: 5px; margin-right: 5px; " type="text"
                                                            class="form-control" id="input9Value" value="0"
                                                            name="apparatus9quantity" readonly>
                                                        <button class="btn btn-primary" type="button"
                                                            onclick="incrementItem('input9')"><b>+</b></button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row justify-content-center">
                                                    <div class="col-12 d-flex">
                                                        <input type="text" name="apparatus10" class="m-1 form-control"
                                                            id="input10" placeholder="" autocomplete="off">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-5 d-flex">
                                                        <button class="btn btn-warning" type="button"
                                                            onclick="decrementItem('input10')"><b>-</b></button>
                                                        <input style="margin-left: 5px; margin-right: 5px; " type="text"
                                                            class="form-control" id="input10Value" value="0"
                                                            name="apparatus10quantity" readonly>
                                                        <button class="btn btn-primary" type="button"
                                                            onclick="incrementItem('input10')"><b>+</b></button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 mt-5 text-center justify-content-center d-flex">
                                    <button type="button" class=" btn btn-secondary" id="prev-step-1">Previous</button>
                                    <button type="button" class="btn btn-primary" id="next-step-3">Next</button>
                                </div>
                            </div>
                        </div>
                        <div class="step" id="step-3" style="display: none;">
                            <div class="third">
                                <div class="row ">
                                    <div class="col-12 mb-5 mt-5 text-center">
                                        <h4 class="mb-5">Kindly scan the instructor's chain on the scanner.</h4>
                                        <input type="text" class="form-control idNumberInput" id="m11" name="name11"
                                            placeholder="Scan Instructor's ID" autocomplete="off">
                                        <button id="fetchNameButton11" class="fetchNameButton"
                                            style="opacity:0;"></button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mt-5 text-center justify-content-center d-flex">
                                        <button type="button" class=" btn btn-secondary" id="prev-step-2"
                                            style="margin-right:10px;">Previous</button>
                                        <button type="submit" class="btn btn-success"
                                            id="confirm-button">Confirm</button>
                                    </div>
                                </div>
                            </div>
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
                const step3 = document.getElementById('step-3');
                const nextStep2Button = document.getElementById('next-step-2');
                const nextStep3Button = document.getElementById('next-step-3');
                const prevStep1Button = document.getElementById('prev-step-1');
                const prevStep2Button = document.getElementById('prev-step-2');
                const confirmButton = document.getElementById('confirm-button');

                confirmButton.style.display = 'none';
                prevStep1Button.style.display = 'none';

                nextStep2Button.addEventListener('click', function () {
                    step1.style.display = 'none';
                    step2.style.display = 'block';
                    step3.style.display = 'none';

                    confirmButton.style.display = 'block';
                    prevStep1Button.style.display = 'block';
                    prevStep2Button.style.display = 'block';
                });

                nextStep3Button.addEventListener('click', function () {
                    step1.style.display = 'none';
                    step2.style.display = 'none';
                    step3.style.display = 'block';

                    confirmButton.style.display = 'block';
                    prevStep1Button.style.display = 'block';
                    prevStep2Button.style.display = 'block';
                });

                prevStep1Button.addEventListener('click', function () {
                    step2.style.display = 'none';
                    step1.style.display = 'block';

                    confirmButton.style.display = 'none';
                    prevStep1Button.style.display = 'none';
                    prevStep2Button.style.display = 'none';
                });

                prevStep2Button.addEventListener('click', function () {
                    step2.style.display = 'block';
                    step1.style.display = 'none';

                    confirmButton.style.display = 'none';
                    prevStep1Button.style.display = 'block';
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


            document.querySelectorAll('input').forEach(input => {
                input.addEventListener('keydown', function (event) {
                    if (event.key === 'Enter') {
                        event.preventDefault();
                    }
                });
            });

            document.addEventListener("DOMContentLoaded", function () {
                document.getElementById('input1').focus();
            });

            function moveToNext(event, nextInputId) {
                if (event.keyCode === 13) {
                    event.preventDefault();
                    document.getElementById(nextInputId).focus();
                }
            }


            function decrementItem(inputId) {
                var input = document.getElementById(inputId + 'Value');
                var value = parseInt(input.value, 10);
                value = isNaN(value) ? 0 : value;
                value--;
                input.value = value < 0 ? 0 : value;
            }

            function incrementItem(inputId) {
                var input = document.getElementById(inputId + 'Value');
                var value = parseInt(input.value, 10);
                value = isNaN(value) ? 0 : value;
                value++;
                input.value = value;
            }

            function moveToNext(event, nextInputId) {
                if (event.key === "Enter") {
                    document.getElementById(nextInputId).focus();
                }
            }


            $(document).ready(function () {
                // Function to handle AJAX request and update input field
                function fetchAndPopulateInput(idNumber, inputSelector) {
                    $.ajax({
                        type: 'POST',
                        url: 'fetch_user.php',
                        data: { idNumber: idNumber },
                        success: function (response) {
                            // Update the value of the input field
                            $(inputSelector).val(response);
                        },
                        error: function () {
                            alert('Error: Unable to fetch user information.');
                        }
                    });
                }

                // Click event handler for all fetch buttons
                $(document).on('click', '.fetchNameButton', function (event) {
                    event.preventDefault(); // Prevent default button click behavior

                    var idNumber = $(this).siblings('.idNumberInput').val(); // Get ID number from the corresponding input
                    var inputSelector = $(this).siblings('.idNumberInput'); // Get the corresponding input field

                    fetchAndPopulateInput(idNumber, inputSelector); // Fetch and populate the input field with the fetched name
                });
            });

            document.getElementById("leader").addEventListener("input", function () {
                if (this.value.trim() !== "") {
                    document.getElementById("fetchNameButton").click();
                }
            });
            document.getElementById("m1").addEventListener("input", function () {
                if (this.value.trim() !== "") {
                    document.getElementById("fetchNameButton1").click();
                }
            });
            document.getElementById("m2").addEventListener("input", function () {
                if (this.value.trim() !== "") {
                    document.getElementById("fetchNameButton2").click();
                }
            });
            document.getElementById("m3").addEventListener("input", function () {
                if (this.value.trim() !== "") {
                    document.getElementById("fetchNameButton3").click();
                }
            });
            document.getElementById("m4").addEventListener("input", function () {
                if (this.value.trim() !== "") {
                    document.getElementById("fetchNameButton4").click();
                }
            });
            document.getElementById("m5").addEventListener("input", function () {
                if (this.value.trim() !== "") {
                    document.getElementById("fetchNameButton5").click();
                }
            });
            document.getElementById("m6").addEventListener("input", function () {
                if (this.value.trim() !== "") {
                    document.getElementById("fetchNameButton6").click();
                }
            });
            document.getElementById("m7").addEventListener("input", function () {
                if (this.value.trim() !== "") {
                    document.getElementById("fetchNameButton7").click();
                }
            });
            document.getElementById("m8").addEventListener("input", function () {
                if (this.value.trim() !== "") {
                    document.getElementById("fetchNameButton8").click();
                }
            });
            document.getElementById("m9").addEventListener("input", function () {
                if (this.value.trim() !== "") {
                    document.getElementById("fetchNameButton9").click();
                }
            });
            document.getElementById("m10").addEventListener("input", function () {
                if (this.value.trim() !== "") {
                    document.getElementById("fetchNameButton10").click();
                }
            });
            document.getElementById("m11").addEventListener("input", function () {
                if (this.value.trim() !== "") {
                    document.getElementById("fetchNameButton11").click();
                }
            });



        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>

</html>