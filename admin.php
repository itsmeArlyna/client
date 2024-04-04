
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
                    <button data-bs-toggle="modal" data-bs-target="#borrowingModal" class="equipment-button" data-equipment-id="<?php echo $row['equipment_name']; ?>" type="button"   >
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
                    <div class="row folder-group">
                        <?php 
                        include_once('connection.php');

                        $offset = 8;
                        if ($result = $db -> query("SELECT * FROM laboratory_materials WHERE equipment_status = 'Available' LIMIT 7 OFFSET $offset")){

                            while ($row = mysqli_fetch_assoc($result)){
                                ?>
                                <div class="col-3 mb-3 folder text-center">
                                <button data-bs-toggle="modal" data-bs-target="#borrowingModal" class="equipment-button" data-equipment-id="<?php echo $row['equipment_name']; ?>" type="button"  >
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
<div class="modal fade" id="borrowingModal" tabindex="-1" aria-labelledby="borrowingModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width: 90%; max-height: 90%;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="borrowingModalLabel">Borrowing Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="borrowing-info-container">
          <!-- Content goes here -->
        </div>
      </div>
    </div>
  </div>
</div>

</div>
<script>
    function updateDateTime() {
        var currentDate = new Date();
        var dateString = currentDate.toDateString();
        var timeString = currentDate.toLocaleTimeString();
        var currentDateTimeString = dateString + ' ' + timeString;
        document.getElementById('currentDateTime').innerText = currentDateTimeString;
    }

    setInterval(updateDateTime, 1000);

var equipmentButtons = document.querySelectorAll('.equipment-button');
equipmentButtons.forEach(function(button) {
    button.addEventListener('click', function() {
        var equipmentId = button.getAttribute('data-equipment-id');
        console.log("Equipment ID:", equipmentId);
        fetchBorrowingInformation(equipmentId);
    });
});

function fetchBorrowingInformation(equipmentId) {
    fetch('insert_borrowing.php?equipment_name=' + equipmentId)
        .then(response => response.json())
        .then(data => {
            console.log("Borrowing information:", data);
            displayBorrowingInformation(data);
        })
        .catch(error => console.error('Error fetching borrowing information:', error));
}

function displayBorrowingInformation(data) {
    var borrowingInfoContainer = document.getElementById('borrowing-info-container');
    borrowingInfoContainer.innerHTML = ''; 

    var table = document.createElement('table');
    table.classList.add('table'); 

    var headerRow = table.insertRow();
    var headers = ['Name of Student', 'Grade Level', 'Class Section', 'Equipment Apparatus', 'Status', 'Date of Borrowing', 'Date of Return', 'Condition', 'Email', 'Mobile Number'];

    headers.forEach(function(headerText) {
        var headerCell = document.createElement('th');
        headerCell.textContent = headerText;
        headerRow.appendChild(headerCell);
    });

    data.forEach(function(borrowing) {
        var row = table.insertRow();

        var nameCell = row.insertCell();
        nameCell.textContent = borrowing.name;

        var gradeCell = row.insertCell();
        gradeCell.textContent = borrowing.department; 

        var classCell = row.insertCell();
        classCell.textContent = borrowing.class_section;

        var equipmentCell = row.insertCell();
        equipmentCell.textContent = borrowing.equipment_name;

        var statusCell = row.insertCell();
        statusCell.textContent = borrowing.borrowing_status; 

        var borrowDateCell = row.insertCell();
        borrowDateCell.textContent = borrowing.date_borrowed;

        var returnDateCell = row.insertCell();
        returnDateCell.textContent = borrowing.date_return;

        var phoneCell = row.insertCell();
        phoneCell.textContent = borrowing.condition_status; 

        var emailCell = row.insertCell();
        emailCell.textContent = borrowing.email; 

        var numCell = row.insertCell();
        numCell.textContent = borrowing.mobile_number; 
    });

    borrowingInfoContainer.appendChild(table);
}




    
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>

