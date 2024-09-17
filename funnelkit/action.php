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
    
    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $contact_image = $_FILES['contact_image']['name'];
        $target_dir = "./uploads/";
        $target_file = $target_dir . basename($contact_image);
        move_uploaded_file($_FILES["contact_image"]["tmp_name"], $target_file);
    
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
    
        // Insert the data into the database
        $sql = "INSERT INTO contact (contact_image, fname, mname, lname, email, cchome, contact_home, ccwork, contact_work, addl1, addl2, state, country)
                VALUES ('$contact_image', '$fname', '$mname', '$lname', '$email', '$cchome', '$contact_home', '$ccwork', '$contact_work', '$addl1', '$addl2', '$state', '$country')";
    
        if ($conn->query($sql) === TRUE) {
            echo "New contact added successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    $conn->close();
    ?>