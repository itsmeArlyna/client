<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laboratory</title>
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
            border-radius: 0;
            text-align: center;
            padding: 20%;
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
        <div class="row d-flex">
            <div class="col-4">
                <a href="biology.php">
                    <div class="card">
                        Biology Laboratory
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="physics.php">
                    <div class="card">
                        Physics Laboratory
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="chemistry.php">
                    <div class="card">
                        Chemistry Laboratory
                    </div>
                </a>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>