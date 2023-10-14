<?php

// Replace these with your actual admin credentials
$adminUsername = "admin";
$adminPassword = "admin123";

// Get the submitted credentials
$submittedUsername = $_POST['username'];
$submittedPassword = $_POST['password'];

// Check if the submitted credentials match the admin credentials
if ($submittedUsername === $adminUsername && $submittedPassword === $adminPassword) {
    // Successful login, redirect to the protected file
    header("Location: studentsdata.php");
    exit();
} else {


    // Failed login, redirect back to the login form
    header("Location: index.php");
    exit();
}
?>
