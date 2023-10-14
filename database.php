
<?php

// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}


require "config.php";

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

    


    if (isset($_FILES["file"])) {
        
        // File properties
        $file_name = $_FILES["file"]["name"];
        $file_tmp = $_FILES["file"]["tmp_name"];
        $file_size = $_FILES["file"]["size"];
        $file_error = $_FILES["file"]["error"];

        // Check if the file is not empty
        if ($file_error === 0) {

            // Specify the upload directory
            $upload_dir = "uploads/";

            // Generate a unique name for the file
            $unique_name = uniqid() . "_" . $file_name;

            // Set the file path
            $file_path = $upload_dir . $unique_name;

            // Move the file to the specified directory
            move_uploaded_file($file_tmp, $file_path);

$conn = new mysqli($servername, $username, $password, $db);


if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

            // // Check if the columns already exist
            // $check_columns_sql = "SHOW COLUMNS FROM studentdata LIKE 'file_name'";
            // $result = $conn->query($check_columns_sql);

            // if ($result->num_rows == 0) {
            //     // Columns do not exist, so proceed with ALTER TABLE query
            //     $alter_table_sql = "ALTER TABLE studentdata
            //                        ADD COLUMN file_name VARCHAR(255),
            //                        ADD COLUMN file_path VARCHAR(255)";

            //     if ($conn->query($alter_table_sql) === FALSE) {
            //         echo "Error altering table: " . $conn->error;
            //     }
            // }

             //$sql = "INSERT INTO `studentdata` ( `entrance`, `name`, `dob`, `father`, `locala`, `pin, `phoneno`, `email`, `mobile`, `copyAddress`, `permanenta`, `pinp`, `phonenop`, `workingprof`, `residential`, `city`, `medium`, `category`, `residentialfac`, `optional_subject`, `ma_msc_mcom_board`, `ma_msc_mcom_year`, `ma_msc_mcom_subjects`, `ma_msc_mcom_percentage`, `ba_bsc_board`,`ba_bsc_year`, `ba_bsc_subject`, `ba_bsc_percentage`, `interboard`, `interyear`, `intersubject`, `interpercentage`, `higherborad`, `higheryear`, `highersubject`, `higherpercentage`, `otherboard`, `othersyear`, `othersubject`, `otherpercentage`, `comonename`, `comoneyear`, `comoneroll`, `comoneresult`, `comtwoname`, `comtwoyear`, `comtworoll`, `comtworesult`, `comthrname`, `comthryear`, `comthrroll`, `comthrresult`, `comfourname`, `comfouryear`, `comfourroll`, `comfourresult`, `comfifname`, `comfifyear`, `comfifroll`, `comfifresult` , `file_name`, `file_path` ) VALUES ( '$entrance', '$name', '$dob', '$father', '$locala', $pin, '$phoneno', '$email', '$mobile', '$copyAddress', '$permanenta', $pinp, '$phonenop', '$workingprof', '$residential', '$city', '$medium', '$category', '$residentialfac', '$optional_subject', '$ma_msc_mcom_board', '$ma_msc_mcom_year', '$ma_msc_mcom_subjects', '$ma_msc_mcom_percentage', '$ba_bsc_board', '$ba_bsc_year', '$ba_bsc_subject', '$ba_bsc_percentage', '$interboard', $interyear,'$intersubject', $interpercentage, '$higherborad', '$higheryear', '$highersubject','$higherpercentage', '$otherboard', '$othersyear', '$othersubject', '$otherpercentage','$comonename', '$comoneyear', '$comoneroll', '$comoneresult', '$comtwoname', $comtwoyear,'$comtworoll', $comtworesult, '$comthrname', '$comthryear', '$comthrroll', '$comthrresult', '$comfourname', '$comfouryear', '$comfourroll', '$comfourresult', '$comfifname', '$comfifyear', '$comfifroll', '$comfifresult' , '$file_name', '$file_path')" ;
             $insert_sql = "INSERT INTO studentdata (entrance, name, dob, father, locala, pin,
             phoneno, email, mobile, copyAddress, permanenta,
             pinp, phonenop, workingprof, residential, city,
             medium, category, residentialfac, optional_subject,
             ma_msc_mcom_board, ma_msc_mcom_year, ma_msc_mcom_subjects,
             ma_msc_mcom_percentage, ba_bsc_board, ba_bsc_year,
             ba_bsc_subject, ba_bsc_percentage, interboard, interyear,
             intersubject, interpercentage, higherborad, higheryear,
             highersubject, higherpercentage, otherboard, othersyear,
             othersubject, otherpercentage, comonename, comoneyear,
             comoneroll, comoneresult, comtwoname, comtwoyear,
             comtworoll, comtworesult, comthrname, comthryear,
             comthrroll, comthrresult, comfourname, comfouryear,
             comfourroll, comfourresult, comfifname, comfifyear,
             comfifroll, comfifresult, file_name, file_path) VALUES ('$entrance', '$name', '$dob', '$father', '$locala', '$pin',
    '$phoneno', '$email', '$mobile', '$copyAddress', '$permanenta',
    '$pinp', '$phonenop', '$workingprof', '$residential', '$city',
    '$medium', '$category', '$residentialfac', '$optional_subject',
    '$ma_msc_mcom_board', '$ma_msc_mcom_year', '$ma_msc_mcom_subjects',
    '$ma_msc_mcom_percentage', '$ba_bsc_board', '$ba_bsc_year',
    '$ba_bsc_subject', '$ba_bsc_percentage', '$interboard', $interyear,
    '$intersubject', $interpercentage, '$higherborad', '$higheryear',
    '$highersubject', '$higherpercentage', '$otherboard', '$othersyear',
    '$othersubject', '$otherpercentage', '$comonename', '$comoneyear',
    '$comoneroll', '$comoneresult', '$comtwoname', $comtwoyear,
    '$comtworoll', '$comtworesult', '$comthrname', '$comthryear',
    '$comthrroll', '$comthrresult', '$comfourname', '$comfouryear',
    '$comfourroll', '$comfourresult', '$comfifname', '$comfifyear',
    '$comfifroll', '$comfifresult', '$file_name', '$file_path')";

            if ($conn->query($insert_sql) === TRUE) {
                header("Location: success.php");
                // echo "successfully Registration Completed";
            } else {
                echo "Error: " . $insert_sql . "<br>" . $conn->error;
            }

            // Close the database connection
            



            

        } else {
            echo "Error uploading file!";
        }


    } else {
        echo "Please select a file to upload!";
    }

 //$sql = "INSERT INTO `studentdata` ( `entrance`, `name`, `dob`, `father`, `locala`, `pin, `phoneno`, `email`, `mobile`, `copyAddress`, `permanenta`, `pinp`, `phonenop`, `workingprof`, `residential`, `city`, `medium`, `category`, `residentialfac`, `optional_subject`, `ma_msc_mcom_board`, `ma_msc_mcom_year`, `ma_msc_mcom_subjects`, `ma_msc_mcom_percentage`, `ba_bsc_board`,`ba_bsc_year`, `ba_bsc_subject`, `ba_bsc_percentage`, `interboard`, `interyear`, `intersubject`, `interpercentage`, `higherborad`, `higheryear`, `highersubject`, `higherpercentage`, `otherboard`, `othersyear`, `othersubject`, `otherpercentage`, `comonename`, `comoneyear`, `comoneroll`, `comoneresult`, `comtwoname`, `comtwoyear`, `comtworoll`, `comtworesult`, `comthrname`, `comthryear`, `comthrroll`, `comthrresult`, `comfourname`, `comfouryear`, `comfourroll`, `comfourresult`, `comfifname`, `comfifyear`, `comfifroll`, `comfifresult` , `file_name`, `file_path` ) VALUES ( '$entrance', '$name', '$dob', '$father', '$locala', $pin, '$phoneno', '$email', '$mobile', '$copyAddress', '$permanenta', $pinp, '$phonenop', '$workingprof', '$residential', '$city', '$medium', '$category', '$residentialfac', '$optional_subject', '$ma_msc_mcom_board', '$ma_msc_mcom_year', '$ma_msc_mcom_subjects', '$ma_msc_mcom_percentage', '$ba_bsc_board', '$ba_bsc_year', '$ba_bsc_subject', '$ba_bsc_percentage', '$interboard', $interyear,'$intersubject', $interpercentage, '$higherborad', '$higheryear', '$highersubject','$higherpercentage', '$otherboard', '$othersyear', '$othersubject', '$otherpercentage','$comonename', '$comoneyear', '$comoneroll', '$comoneresult', '$comtwoname', $comtwoyear,'$comtworoll', $comtworesult, '$comthrname', '$comthryear', '$comthrroll', '$comthrresult', '$comfourname', '$comfouryear', '$comfourroll', '$comfourresult', '$comfifname', '$comfifyear', '$comfifroll', '$comfifresult' , '$file_name', '$file_path')" ;


// if ($conn->query($sql) === TRUE) {
// 	echo "successfully Registration Completed";
// } else {
// 	echo "Error: ".$sql."<br>".$conn->error;













// }

$conn->close();

