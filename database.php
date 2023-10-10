<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

require 'config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve form data
    $workingprof = $_POST["workingprof"];
    $residential = $_POST["residential"];
    $entrance = $_POST["entrance"];
    $name = $_POST["name"];
    $dob = $_POST["dob"];
    $father = $_POST["father"];
    $locala = $_POST["locala"];
    $pin = $_POST["pin"];
    $phoneno = $_POST["phoneno"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $copyAddress = isset($_POST["copyAddress"]) ? $_POST["copyAddress"] : "no";
    $permanenta = $copyAddress == "yes" ? $locala : $_POST["permanenta"];
    $pinp = $_POST["pinp"];
    $phonenop = $_POST["phonenop"];
    $medium = $_POST["medium"];
    $category = isset($_POST["category"]) ? $_POST["category"] : '';
    $residentialfac = $_POST["residentialfac"];
    $optional_subject = $_POST["optional_subject"];
    




    
    // Add other fields accordingly

    // Insert data into the database
    $sql = "INSERT INTO application (workingprof, residential, entrance, name, dob, father, locala, pin, phoneno, email, mobile, copyAddress, permanenta, pinp, phonenop, medium, category, residentialfac, optional_subject) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
if (mysqli_stmt_execute($stmt)) {
    echo "Records inserted successfully.";
} else {
    echo "Error executing the statement: " . mysqli_stmt_error($stmt);
}

// Close the statement
mysqli_stmt_close($stmt);
} else {
echo "Error preparing the statement: " . mysqli_error($link);
}

// Close the connection
mysqli_close($link);

?>
