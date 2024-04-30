<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INDEX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        a {
            text-decoration: none;
            color: blue;
        }

        @keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .blinking {
            animation: blink 2s infinite;
        }

        img {
            width: 40%;
        }

        #logo {
            width: 33%;
        }

        h2 {
            color: rgba(0, 0, 0, 0.784);
        }

        .borrow {
            margin-top: 40%;
        }

        .return {
            margin-top: 50%;
        }
    </style>
</head>

<body>
    <a href="index.php">
        <H4>< < <</h4>
    </a>
    <div class="container pt-5">
        <div class="row mb-5">
            <div class="col-6 text-center">
                <img id="logo" src="img/logo.png" alt="">
            </div>
            <div class="col-6 text-center">
                <img src="img/logo1.jpg" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-5 text-center">
                <h1>UNIVERSITY OF CEBU LAPU-LAPU AND MANDAUE LABS</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="col-12 text-center mt-3">
                        <h2>REGISTRATION</h2>
                    </div>
                    <div class="card-body">
                       <form action="register.php" method="post">
                       <label for="">Card ID Number</label>
                        <input type="number" name="id_number" class="form-control mb-3" placeholder="Scan your ID on the reader"
                            autofocus>

                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control mb-3" placeholder="Enter your full name">

                        <div class="text-center">
                        <button class="btn btn-primary" type="submit">Register!</button>
                        </div>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>