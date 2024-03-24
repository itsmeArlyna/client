
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

        .logo img {
            width: 10%;
        }

        .folder img {
            width: 40%;
            cursor: pointer;
            transition: 0.2s;
        }

        .folder img:hover {
            transform: scale(1.1);
        }

        button {
            border: none;
            background-color: white;
        }
        .col-2 img{
            width: 70%;
        }
        .header {
            align-items: center;
            justify-content: center;
            margin-bottom: 10%;
        }
        #logo{
            width: 80%;
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
        <div class="row">
        <div class="col-12">
            <h5><div id="currentDateTime"></div>
</h5>
        </div>
        </div>
        <div class="first-group">
            <div class="first-group" id="first">
                <div class="row folder-group mt-5">
                   <?php 
                   include_once('connection.php');

                  $offset = 0;
                  if($result = $db -> query("SELECT * FROM laboratory_materials WHERE equipment_status = 'Available' LIMIT 8 OFFSET $offset ")){
                
                    while ($row = mysqli_fetch_assoc($result)){
                        ?>
                    <div class="col-3 mb-3 folder text-center">
                    <button class="equipment-button" data-equipment-id="<?php echo $row['equipment_id']; ?>" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" >
                            <img src="img/folder.png" alt="">
                            <h6><?php echo $row['equipment_name']; ?></h6>
                        </button>
                    </div>
                    <?php
                }
                mysqli_free_result($result);
                  } else {
                    echo 'Error' . mysqli_error($db);
                  }
                ?>
                </div>
            </div>
                <div class="second-group" id="second" >
                    <div class="row folder-group mt-5">
                        <?php 
                        include_once('connection.php');

                        $offset = 8;
                        if ($result = $db -> query("SELECT * FROM laboratory_materials WHERE equipment_status = 'Available' LIMIT 7 OFFSET $offset")){

                            while ($row = mysqli_fetch_assoc($result)){
                                ?>
                                <div class="col-3 mb-3 folder text-center">
                                <button class="equipment-button" data-equipment-id="<?php echo $row['equipment_id']; ?>" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <img src="img/folder.png" alt="">
                                    <h6><?php echo $row['equipment_name']; ?></h6>
                                </button>
                                </div>
                                <?php
                            }
                            mysqli_free_result($result);
                        } else {
                            echo 'error' . mysqli_error($db);
                        }
                        ?>
                    </div>
        </div>
        
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Borrowed Equipment Table</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="max-height: 70vh; overflow-y: auto;">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">NAME OF STUDENT</th>
                <th scope="col">GRADE LEVEL</th>
                <th scope="col">CLASS SECTION</th>
                <th scope="col">EQUIPMENT APPARATUS</th>
                <th scope="col">STATUS</th>
                <th scope="col">DATE OF BORROWING</th>
                <th scope="col">DATE OF RETURN</th>
                <th scope="col">ACTIVE PHONE NUMBER</th>
                <th scope="col">EMAIL</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>John Doe</td>
                <td>10</td>
                <td>A</td>
                <td>Microscope</td>
                <td>Borrowed</td>
                <td>2024-03-24</td>
                <td>2024-04-01</td>
                <td>123-456-7890</td>
                <td>johndoe@example.com</td>
              </tr>
              <!-- Add more rows as needed -->
            </tbody>
          </table>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


</div>
    <script>
       
        document.addEventListener("DOMContentLoaded", function() {
        const equipmentButtons = document.querySelectorAll(".equipment-button");

        equipmentButtons.forEach(button => {
            button.addEventListener("click", function() {
                const equipmentId = this.getAttribute("data-equipment-id");
                const equipmentName = this.querySelector("h6").textContent;
                const modalTitle = document.getElementById("exampleModalLabel");
                const equipmentNameInput = document.getElementById("equipment-name");

                equipmentNameInput.value = equipmentName;

                // Additional actions you may want to perform when a button is clicked

                // You can also open the modal programmatically if needed
                // const modal = new bootstrap.Modal(document.getElementById('exampleModal'));
                // modal.show();
            });
        });
    });
    function updateDateTime() {
  var currentDate = new Date();
  var dateString = currentDate.toDateString();
  var timeString = currentDate.toLocaleTimeString();
  var currentDateTimeString = dateString + ' ' + timeString;
  document.getElementById('currentDateTime').innerText = currentDateTimeString;
}

// Update the date and time every second
setInterval(updateDateTime, 1000);
       

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>

