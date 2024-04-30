<?php
// Include database connection
include_once('connection.php');

if (isset($_GET['name'])) {
    // Sanitize the input to prevent SQL injection
    $equipmentName = mysqli_real_escape_string($db, $_GET['name']);

    // Prepare SQL query to fetch equipment details by name
    $sql = "SELECT * FROM laboratory_materials WHERE equipment_name = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("s", $equipmentName);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch equipment details
        $row = $result->fetch_assoc();

        // Prepare response data as JSON
        $response = [
            'equipment_name' => $row['equipment_name'],
            'equipment_quantity' => $row['equipment_quantity'],
            'equipment_capacity' => $row['equipment_capacity'],
            'equipment_stock' => $row['equipment_stock'],
            'equipment_damaged' => $row['equipment_damaged']
        ];

        // Output JSON response
        header('Content-Type: application/json');
        echo json_encode($response);
    } else {
        // No equipment found with the specified name
        http_response_code(404);
        echo json_encode(['error' => 'Equipment not found']);
    }

    // Close prepared statement and result set
    $stmt->close();
    $result->close();
} else {
    // Handle case where 'name' parameter is not provided
    http_response_code(400);
    echo json_encode(['error' => 'Missing parameter: name']);
}

// Close database connection
$db->close();
?>
