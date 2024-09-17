<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $contactId = $_POST['Id'];  // Unique contact Id for updating
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $cchome = $_POST['cchome'];
    $contact_home = $_POST['contact_home'];
    $ccwork = $_POST['ccwork'];
    $contact_work = $_POST['contact_work'];
    $addl1 = $_POST['addl1'];
    $addl2 = $_POST['addl2'];
    $state = $_POST['state'];
    $country = $_POST['country'];

    // Update the contact in the database
    $query = "UPDATE contact SET fname = ?, mname = ?, lname = ?, email = ?, cchome = ?, contact_home = ?, ccwork = ?, contact_work = ?, addl1 = ?, addl2 = ?, state = ?, country = ? WHERE Id = ?";
    $stmt = $pdo->prepare($query);
    $success = $stmt->execute([$fname, $mname, $lname, $email, $cchome, $contact_home, $ccwork, $contact_work, $addl1, $addl2, $state, $country, $contactId]);

    // Return a JSON response
    if ($success) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to update contact']);
    }
}
?>
