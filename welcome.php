<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }

        .vertical-center {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 50vh;
        }
   
    </style>
</head>
<body>

<?php include 'logheader.php'; ?>


    <!-- <h1 class="my-5">Hi, <b></b>. Welcome to our site.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>

    </p>
    <a href="application.php" class="btn btn-danger ml-3">Application Form</a> -->


<!-- 
    <div class="container vertical-center">
        <h1 class="my-5 text-white">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
        <div class="mb-3">
            <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
            <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
            <a href="application.php" class="btn btn-primary ml-3">Application Form</a>
        </div>
    </div> -->
    

    <div class="container vertical-center">
    <h1 class="my-5 text-white">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <div class="mb-3">
        <a href="reset-password.php" class="btn btn-warning mb-2 mb-md-0">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-md-3 mb-2 mb-md-0">Sign Out of Your Account</a>
        <a href="application.php" class="btn btn-primary ml-md-3">Application Form</a>
    </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>