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
        h5{
            color: blue;
            margin-top: 1%;
        }
    </style>
</head>

<body>
    <div class="container pt-5 mb-5">
        <div class="row header">
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
        <div class="row ">
            <div class="col-12 mb-5 mt-5 text-center">
                <h4>Kindly scan the barcode of the borrowed apparatus against the scanner.</h4>
                <h5>If you have more than one apparatus, scan them one by one</h6>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4 ">
                <form action="insert_borrowings.php" method="post">
                <input type="text" class="mb-3 form-control" id="input1" placeholder="Apparatus 1" autofocus>
                <input type="text" class="mb-3 form-control" id="input1" placeholder="Apparatus 2">
                <input type="text" class="mb-3 form-control" id="input1" placeholder="Apparatus 3">
                </form>
            </div>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>

</html>