<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $contactId = $_POST['Id'];

    if (!$contactId) {
        echo json_encode(['success' => false, 'message' => 'Contact ID is missing']);
        exit;
    }

    // Delete the contact from the database
    $query = "DELETE FROM contact WHERE Id = ?";
    $stmt = $pdo->prepare($query);
    $success = $stmt->execute([$contactId]);

    if ($success) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to delete contact']);
    }
}
