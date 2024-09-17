<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "funnelkit_assignment";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['Id'])) {
    $contactId = $conn->real_escape_string($_GET['Id']);

    $sql = "SELECT * FROM contact WHERE Id = $contactId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data in JSON format
        $contact = $result->fetch_assoc();
        echo json_encode($contact);
    } else {
        echo json_encode(['error' => 'No contact found']);
    }
} else {
    echo json_encode(['error' => 'No Id provided']);
}

$conn->close();
?>
