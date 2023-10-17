<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheet.css">
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<title>Admin Login Page</title>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>


<?php include 'logheader.php'; ?>
<center>
<div class="bg-light text-center">
    
    <form action="process_login.php" method="post">
    <h2 class="h1" >Login</h2>
<br>
        <label for="username">Username:</label>
        <input type="text" name="username" required>
<br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
<br><br>
        <button class="btn btn-success me-md-2" type="submit">Login</button>
        <br><br>
    </form>
</div> </center>
</body>
</html>
