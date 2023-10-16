<?php
session_start();
 
if (!isset($_SESSION['admin'])) {
    // If not logged in, redirect to the login page
    header("Location: index.php");
    exit();
}

// Check if the user is logged in, otherwise redirect to login page
// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("location: login.php");
//     exit;
// }

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

        ::selection {
            background-color: black;
            color: white;
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
        $search_sql = "SELECT * FROM studentdata WHERE name = '$searchName'";
        $result = $conn->query($search_sql);

        // Display the results
        // if ($result->num_rows > 0) {
        //     echo "<h2>Student Data:</h2>";
        //     echo "<table border='1'>";
        //     echo "<tr><th>Name</th><th>Email</th><th>Other Columns...</th></tr>";






        //     while ($row = $result->fetch_assoc()) {
        //         echo "<tr>";
        //         echo "<td>" . $row["name"] . "</td>";
        //         echo "<td>" . $row["email"] . "</td>";
        //         // Display other columns as needed
        //         echo "</tr>";
        //     }


        //     echo "</table>";
        // } else {
        //     echo "<p>No data found for the entered student name.</p>";
        // }



        if ($result->num_rows > 0) {
            echo "<h2>Student Data:</h2>";
            echo "<table border='1'>";
            echo "<tr>
                <th> Id </th>
                <th>Entrance</th>
                <th>Name</th>
                <th>Date of Birth</th>
                <th>Father's Name</th>
                <th>Local Address</th>
                <th>Pin Code</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Copy Address</th>
                <th>Permanent Address</th>
                <th>Permanent Pin Code</th>
                <th>Permanent Phone Number</th>
                <th>Working Profession</th>
                <th>Residential</th>
                <th>City</th>
                <th>Medium</th>
                <th>Category</th>
                <th>Residential Facility</th>
                <th>Optional Subject</th>
                <th>MA/MSc/MCom Board</th>
                <th>MA/MSc/MCom Year</th>
                <th>MA/MSc/MCom Subjects</th>
                <th>MA/MSc/MCom Percentage</th>
                <th>BA/BSc Board</th>
                <th>BA/BSc Year</th>
                <th>BA/BSc Subject</th>
                <th>BA/BSc Percentage</th>
                <th>Intermediate Board</th>
                <th>Intermediate Year</th>
                <th>Intermediate Subject</th>
                <th>Intermediate Percentage</th>
                <th>Higher Board</th>
                <th>Higher Year</th>
                <th>Higher Subject</th>
                <th>Higher Percentage</th>
                <th>Other Board</th>
                <th>Other Year</th>
                <th>Other Subject</th>
                <th>Other Percentage</th>
                <th>Common Name</th>
                <th>Common Year</th>
                <th>Common Roll</th>
                <th>Common Result</th>
                <th>Other Two Name</th>
                <th>Other Two Year</th>
                <th>Other Two Roll</th>
                <th>Other Two Result</th>
                <th>Other Three Name</th>
                <th>Other Three Year</th>
                <th>Other Three Roll</th>
                <th>Other Three Result</th>
                <th>Other Four Name</th>
                <th>Other Four Year</th>
                <th>Other Four Roll</th>
                <th>Other Four Result</th>
                <th>Other Five Name</th>
                <th>Other Five Year</th>
                <th>Other Five Roll</th>
                <th>Other Five Result</th>
                <th>Marksheet File Name</th>
                <th>Marksheet File Path</th>
                <th>fee File Name</th>
                <th>fee File Path</th>
            </tr>";
        
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row["entrance"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["dob"] . "</td>";
                echo "<td>" . $row["father"] . "</td>";
                echo "<td>" . $row["locala"] . "</td>";
                echo "<td>" . $row["pin"] . "</td>";
                echo "<td>" . $row["phoneno"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["mobile"] . "</td>";
                echo "<td>" . $row["copyAddress"] . "</td>";
                echo "<td>" . $row["permanenta"] . "</td>";
                echo "<td>" . $row["pinp"] . "</td>";
                echo "<td>" . $row["phonenop"] . "</td>";
                echo "<td>" . $row["workingprof"] . "</td>";
                echo "<td>" . $row["residential"] . "</td>";
                echo "<td>" . $row["city"] . "</td>";
                echo "<td>" . $row["medium"] . "</td>";
                echo "<td>" . $row["category"] . "</td>";
                echo "<td>" . $row["residentialfac"] . "</td>";
                echo "<td>" . $row["optional_subject"] . "</td>";
                echo "<td>" . $row["ma_msc_mcom_board"] . "</td>";
                echo "<td>" . $row["ma_msc_mcom_year"] . "</td>";
                echo "<td>" . $row["ma_msc_mcom_subjects"] . "</td>";
                echo "<td>" . $row["ma_msc_mcom_percentage"] . "</td>";
                echo "<td>" . $row["ba_bsc_board"] . "</td>";
                echo "<td>" . $row["ba_bsc_year"] . "</td>";
                echo "<td>" . $row["ba_bsc_subject"] . "</td>";
                echo "<td>" . $row["ba_bsc_percentage"] . "</td>";
                echo "<td>" . $row["interboard"] . "</td>";
                echo "<td>" . $row["interyear"] . "</td>";
                echo "<td>" . $row["intersubject"] . "</td>";
                echo "<td>" . $row["interpercentage"] . "</td>";
                echo "<td>" . $row["higherborad"] . "</td>";
                echo "<td>" . $row["higheryear"] . "</td>";
                echo "<td>" . $row["highersubject"] . "</td>";
                echo "<td>" . $row["higherpercentage"] . "</td>";
                echo "<td>" . $row["otherboard"] . "</td>";
                echo "<td>" . $row["othersyear"] . "</td>";
                echo "<td>" . $row["othersubject"] . "</td>";
                echo "<td>" . $row["otherpercentage"] . "</td>";
                echo "<td>" . $row["comonename"] . "</td>";
                echo "<td>" . $row["comoneyear"] . "</td>";
                echo "<td>" . $row["comoneroll"] . "</td>";
                echo "<td>" . $row["comoneresult"] . "</td>";
                echo "<td>" . $row["comtwoname"] . "</td>";
                echo "<td>" . $row["comtwoyear"] . "</td>";
                echo "<td>" . $row["comtworoll"] . "</td>";
                echo "<td>" . $row["comtworesult"] . "</td>";
                echo "<td>" . $row["comthrname"] . "</td>";
                echo "<td>" . $row["comthryear"] . "</td>";
                echo "<td>" . $row["comthrroll"] . "</td>";
                echo "<td>" . $row["comthrresult"] . "</td>";
                echo "<td>" . $row["comfourname"] . "</td>";
                echo "<td>" . $row["comfouryear"] . "</td>";
                echo "<td>" . $row["comfourroll"] . "</td>";
                echo "<td>" . $row["comfourresult"] . "</td>";
                echo "<td>" . $row["comfifname"] . "</td>";
                echo "<td>" . $row["comfifyear"] . "</td>";
                echo "<td>" . $row["comfifroll"] . "</td>";
                echo "<td>" . $row["comfifresult"] . "</td>";
                echo "<td>" . $row["file_name"] . "</td>";
                echo "<td>" . $row["file_path"] . "</td>";
                echo "<td>" . $row["fileqr_name"] . "</td>";
                echo "<td>" . $row["fileqr_path"] . "</td>";
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
