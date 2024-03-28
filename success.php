<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Returned</title>
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
            margin-top: 5%;
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
        <div class="row">
            <div class="col-12 text-center">
            <?php
        if (isset ($_GET['user_name'])) {
            $userName = $_GET['user_name'];
       
            echo "<h2 class='mb-5'>Hello $userName!</h2>";
            } else {
                echo "<h2>User name not found</h2>";
            }
            ?>
                <h4 class="text-success mb-3">YOUR RETURN OF APPARATUS WAS SUCCESSFULLY RECORDED.</h4>
                <br>
                <h4>THANK YOU AND HAVE A GREAT DAY!</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12 justify-content-center text-center mt-5">
               <a href="index.php">
               <button class="btn btn-primary">Confirm</button>
               </a>
            </div>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>

</html>