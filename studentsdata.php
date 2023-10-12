<?php
session_start();
 
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Data</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>

<style>
    body{
        color:aliceblue !important;
    }
</style>

</head>
<body>
<?php include 'logheader.php' ?>
<center>
<div class="bg-light center">
    <h1 class="text-dark text-center" >Search Student Data</h1> <br>
    <form action="studentsdata.php" method="post">
        <label for="studentName" class="text-dark text-center" >Student Name:</label>
        <input type="text" class="text-dark text-center" name="studentName" id="studentName" required>
        <button type="submit" class="text-center" >Search</button>
    </form>
</div> </center>
    <?php

    require 'config.php';
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the entered student name
        $searchName = $_POST["studentName"];

        // Perform a search in the database

        $conn = new mysqli($servername, $username, $password, $db);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Perform a SELECT query based on the entered student name
        $search_sql = "SELECT * FROM studentdata WHERE id = '$searchName'";
        $result = $conn->query($search_sql);

        // Display the results
        if ($result->num_rows > 0) {
            echo "<h2>Student Data:</h2>";
            echo "<table border='1'>";
            echo "<tr><th>Name</th><th>Email</th><th>Other Columns...</th></tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                // Display other columns as needed
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<p>No data found for the entered student name.</p>";
        }

        $conn->close();
    }
    ?>
</body>
</html>
