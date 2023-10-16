<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
<?php include 'logheader.php'; ?>
<center>
<div class="bg-light center">
    <h2 class="text-center" >Login</h2>
<br>
    <form action="process_login.php" method="post">
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
