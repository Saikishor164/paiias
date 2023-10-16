<?php

// Replace these with your actual admin credentials
$adminUsername = "admin";
$adminPassword = "tain007tain";

// Get the submitted credentials
$submittedUsername = $_POST['username'];
$submittedPassword = $_POST['password'];

// Debugging: Print submitted and stored passwords
echo "Submitted: " . $submittedPassword . "<br>";
echo "Stored: " . $adminPassword . "<br>";

// Check if the submitted credentials match the admin credentials
if ($submittedUsername === $adminUsername && $submittedPassword === $adminPassword) {
    // Successful login, redirect to the protected file
    session_start();
    $_SESSION['admin'] = true; // Set a session variable to indicate admin login
    header("Location: studentsdata.php");
    exit();
} else {
    // Failed login, redirect back to the login form
    header("Location: index.php");
    exit();
}
?>
