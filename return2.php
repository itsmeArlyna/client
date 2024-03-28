<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Return Borrowed Equipment</title>
</head>
<body>

<h2>Return Borrowed Equipment</h2>

<form action="return.php" method="post">
    <!-- Hidden input to identify this as a return request -->
    <input type="hidden" name="return" value="true">
    
    <!-- User ID Input -->
    <div>
        <label for="user_id_input">User ID:</label>
        <input type="text" id="user_id_input" name="user_id_input" required>
    </div>

    <!-- Equipment Name Input -->
    <div>
        <label for="equipment_name">Equipment Name:</label>
        <input type="text" id="equipment_name" name="equipment_name" required>
    </div>

    <div>
        <label for="condition_status">Condition Status:</label>
        <select id="condition_status" name="condition_status" required>
            <option value="good">Good</option>
            <option value="damaged">Damaged</option>
        </select>
    </div>

    <input type="hidden" id="return_datetime" name="return_datetime">


    <button type="submit">Return Equipment</button>
</form>

<script>
    // Populate the hidden date field with the current date and time in YYYY-MM-DD HH:MM:SS format
    document.getElementById('return_datetime').value = new Date().toISOString().slice(0, 19).replace('T', ' ');
</script>

</body>
</html>

