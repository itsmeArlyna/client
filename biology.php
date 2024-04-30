<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laboratory Equipment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        a { text-decoration: none; color: blue; }
        .col-2 img { width: 70%; }
        .header { align-items: center; justify-content: center; margin-top: 5%; }
        #logo { width: 80%; }
        .card { box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset; }
    </style>
</head>
<body>
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
        
        <form action="laboratory_insert.php" method="post">
        <div class="row">
            <div class="col-3">
                <label for="">Teacher's Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
            </div>
            <div class="col-3">
                <label for="">Room Number</label>
                <select name="number" id="" class="form-control" required>
                    <option value="" disabled selected>Choose Room Number</option>
                    <option value="biolab1">Bio Lab 1</option>
                    <option value="biolab2">Bio Lab 2</option>
                </select>
            </div>
            <div class="col-3">
            <label for="">Time</label>
                <select name="time" id="" class="form-control" required>
                    <option value="" disabled selected>Choose Time</option>
                    <option value="7:00-8:20">7:00 - 8:20</option>
                    <option value="8:20-9:40">8:20 - 9:40</option>
                    <option value="10:00-11:20">10:00 - 11:20</option>
                    <option value="11:20-12:40">11:20 - 12:40</option>
                </select>
            </div>
            <div class="col-3">
                <label for="">Day</label>
                <select name="day" id="" class="form-control" required>
                    <option value="" disabled selected>Choose Day</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                </select>
            </div>
        </div>
        <div class="row justify-content-center text-center mt-5">
           <div class="col-4"></div>
           <div class="col-4">
           <button class="btn btn-primary" type="submit">Confirm</button>
           </div>
           <div class="col-4"></div>
        </div>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>
</html>
