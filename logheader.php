<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="./index.php">
        <img src="./favicon.png" alt="Logo" width="100" height="100" class="d-inline-block align-text-top" >
    </a>
    
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto ">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>
            </li>
        </ul>
    </div>
</nav>
<p id="loginreg"> <a class="logintop" href="login.php">login</a> | <a class="logintop" href="register.php">register</a> </p>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <!-- Logo and Website Name -->
            <a class="navbar-brand" href="#">
                <img src="./favicon.png" class="img-fluid" width="30" height="30" alt="Logo">
                PAI-IAS Coaching Centre
            </a>
            
            <!-- Responsive Navbar Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href=""><?php echo htmlspecialchars($_SESSION["username"]); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php" >Sign Out </a>
                        <!-- <a class="nav-link" href="register.php">Logout</a> -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Include Bootstrap JS and jQuery if needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
