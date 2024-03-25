<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      button{
        opacity: 0;
      }
      .title{
        margin-top: 50%;
      }
    </style>
</head>
<body>
    <div class="container pt-5 mt-5">
      
        <div class="row title">
            <div class="col-12 text-center">
                <h1 class="mt-5 pt-5">Scan ID on the sensor</h1>
            </div>
        </div>
        <div class="row mt-5 pt-5 justify-content-center">
            <div class="col-4 text-center d-block justify-content-center">
                <form action="insert_borrowing.php" method="GET" id="user_id_form">
                    <input class="form-control" type="text" name="user_id_input" id="user_id_input" autofocus>
                    <button type="submit" class="btn btn-primary">Next</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("user_id_form").addEventListener("submit", function(event) {
            event.preventDefault();
            
            var userId = document.getElementById("user_id_input").value;
            
            window.location.href = "borrowing.php?user_id_input=" + userId;
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
