<?php

// // Initialize the session
// session_start();

// // Check if the user is logged in, if not then redirect him to login page
// if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
//     header("location: login.php");
//     exit;
// }

// require 'config.php';

// Check if the form is submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve form data
   
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
    $workingprof = $_POST["workingprof"];
    $residential = $_POST["residential"];
    $city = $_POST["city"];
    $medium = $_POST["medium"];
    $category = isset($_POST["category"]) ? $_POST["category"] : '';
    $residentialfac = $_POST["residentialfac"];
    $optional_subject = $_POST["optional_subject"];
    
    $ma_msc_mcom_board = $_POST["ma_msc_mcom_board"];
    $ma_msc_mcom_year = $_POST["ma_msc_mcom_year"];
    $ma_msc_mcom_subjects = $_POST["ma_msc_mcom_subjects"];
    $ma_msc_mcom_percentage = $_POST["ma_msc_mcom_percentage"];
    
    
    $ba_bsc_board = $_POST["ba_bsc_board"];
    $ba_bsc_year = $_POST["ba_bsc_year"];
    $ba_bsc_subject = $_POST["ba_bsc_subject"];
    $ba_bsc_percentage = $_POST["ba_bsc_percentage"];
    
    
    $interboard = $_POST["interboard"];
    $interyear = $_POST["interyear"];
    $intersubject = $_POST["intersubject"];
    $interpercentage = $_POST["interpercentage"];
    
    $higherborad = $_POST["higherborad"];
    $higheryear = $_POST["higheryear"];
    $highersubject = $_POST["highersubject"];
    $higherpercentage = $_POST["higherpercentage"];
    
    
    $otherboard = $_POST["otherboard"];
    $othersyear = $_POST["othersyear"];
    $othersubject = $_POST["othersubject"];
    $otherpercentage = $_POST["otherpercentage"];
    
    
    
    $comonename = $_POST["comonename"];
    $comoneyear = $_POST["comoneyear"];
    $comoneroll = $_POST["comoneroll"];
    $comoneresult = $_POST["comoneresult"];
    
    $comtwoname = $_POST["comtwoname"];
    $comtwoyear = $_POST["comtwoyear"];
    $comtworoll = $_POST["comtworoll"];
    $comtworesult = $_POST["comtworesult"];
    
    $comthrname = $_POST["comthrname"];
    $comthryear = $_POST["comthryear"];
    $comthrroll = $_POST["comthrroll"];
    $comthrresult = $_POST["comthrresult"];
    
    
    $comfourname = $_POST["comfourname"];
    $comfouryear = $_POST["comfouryear"];
    $comfourroll = $_POST["comfourroll"];
    $comfourresult = $_POST["comfourresult"];
    
    $comfifname = $_POST["comfifname"];
    $comfifyear = $_POST["comfifyear"];
    $comfifroll = $_POST["comfifroll"];
    $comfifresult = $_POST["comfifresult"];
    
    $file = $_POST["file"];


// ... (your existing code)

// Display the values
echo "Entrance: $entrance <br>";
echo "Name: $name <br>";
echo "Date of Birth: $dob <br>";
echo "Father's Name: $father <br>";
echo "Local Address: $locala <br>";
echo "Pincode: $pin <br>";
echo "Phone Number: $phoneno <br>";
echo "Email: $email <br>";
echo "Mobile: $mobile <br>";
echo "Copy Address: $copyAddress <br>";
echo "Permanent Address: $permanenta <br>";
echo "Pincode (Permanent): $pinp <br>";
echo "Phone Number (Permanent): $phonenop <br>";
echo "Working Professional: $workingprof <br>";
echo "Residential: $residential <br>";
echo "City: $city <br>";
echo "Medium: $medium <br>";
echo "Category: $category <br>";
echo "Residential Facilities: $residentialfac <br>";
echo "Optional Subject: $optional_subject <br>";

// Display values for education details
echo "M.A/M.Sc/M.Com Board: $ma_msc_mcom_board <br>";
echo "M.A/M.Sc/M.Com Year: $ma_msc_mcom_year <br>";
echo "M.A/M.Sc/M.Com Subjects: $ma_msc_mcom_subjects <br>";
echo "M.A/M.Sc/M.Com Percentage: $ma_msc_mcom_percentage <br>";

echo "B.A/B.Sc./B.Com./Engg. Board: $ba_bsc_board <br>";
echo "B.A/B.Sc./B.Com./Engg. Year: $ba_bsc_year <br>";
echo "B.A/B.Sc./B.Com./Engg. Subject: $ba_bsc_subject <br>";
echo "B.A/B.Sc./B.Com./Engg. Percentage: $ba_bsc_percentage <br>";

echo "Intermediate/Senior Secondary Board: $interboard <br>";
echo "Intermediate/Senior Secondary Year: $interyear <br>";
echo "Intermediate/Senior Secondary Subject: $intersubject <br>";
echo "Intermediate/Senior Secondary Percentage: $interpercentage <br>";

echo "Matric/Higher Secondary Board: $higherborad <br>";
echo "Matric/Higher Secondary Year: $higheryear <br>";
echo "Matric/Higher Secondary Subject: $highersubject <br>";
echo "Matric/Higher Secondary Percentage: $higherpercentage <br>";

echo "Other Board: $otherboard <br>";
echo "Other Year: $othersyear <br>";
echo "Other Subject: $othersubject <br>";
echo "Other Percentage: $otherpercentage <br>";

// Display values for competitive examinations
echo "Competitive Exam 1 Name: $comonename <br>";
echo "Competitive Exam 1 Year: $comoneyear <br>";
echo "Competitive Exam 1 Roll No: $comoneroll <br>";
echo "Competitive Exam 1 Result: $comoneresult <br>";

echo "Competitive Exam 2 Name: $comtwoname <br>";
echo "Competitive Exam 2 Year: $comtwoyear <br>";
echo "Competitive Exam 2 Roll No: $comtworoll <br>";
echo "Competitive Exam 2 Result: $comtworesult <br>";

echo "Competitive Exam 3 Name: $comthrname <br>";
echo "Competitive Exam 3 Year: $comthryear <br>";
echo "Competitive Exam 3 Roll No: $comthrroll <br>";
echo "Competitive Exam 3 Result: $comthrresult <br>";

echo "Competitive Exam 4 Name: $comfourname <br>";
echo "Competitive Exam 4 Year: $comfouryear <br>";
echo "Competitive Exam 4 Roll No: $comfourroll <br>";
echo "Competitive Exam 4 Result: $comfourresult <br>";

echo "Competitive Exam 5 Name: $comfifname <br>";
echo "Competitive Exam 5 Year: $comfifyear <br>";
echo "Competitive Exam 5 Roll No: $comfifroll <br>";
echo "Competitive Exam 5 Result: $comfifresult <br>";

// Display the file name
echo "File: $file <br>";