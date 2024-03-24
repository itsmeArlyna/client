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
            margin-top: 10%;
            margin-bottom: 50%;
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
                <h1>UNIVERSITY OF CEBU LAPU-LAPU AND MANDAUE LABS</h1>
            </div>
            <div class="col-2">
                <img src="img/logo.png" alt="">
            </div>
        </div>
        <div class="row mt-5">
    <div class="col-12">
        <table class="table">
            <thead>
                <tr>
                    <th>LAB EQUIPMENT</th>
                    <th>CONDITION AND STATUS OF APPARATUS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Microscope</td>
                    <td>
                        <select class="form-select">
                            <option value="" disabled selected>Select Condition</option>
                            <option value="good">Good</option>
                            <option value="damaged">Damaged</option>
                        </select>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</div>
<div class="row mb-5 ">
      <div class="col-md-6">
        <label for="datetimeInput" class="form-label">Current Date and Time:</label>
        <input type="text" class="form-control" id="datetimeInput" readonly>
      </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <button class="btn btn-primary">CONFIRM</button>
        </div>
    </div>
    </div>
    <script>
    // Get the input field
    var datetimeInput = document.getElementById("datetimeInput");

    // Get the current date and time
    var currentDateTime = new Date();

    // Format the date and time to a string
    var formattedDateTime = currentDateTime.toLocaleString();

    // Set the value of the input field to the formatted date and time
    datetimeInput.value = formattedDateTime;
  </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>

</html>