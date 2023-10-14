
<!DOCTYPE html>
<html>

<head>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" type="image/x-icon" href="./images/favicon.jpg">
    
</head>

<body>
     <img class="headerimg" src="./images/header.png" alt="header image">
    <nav class="navbar navbar-expand-lg navbar-light bg-black">
        <div class="container">
            <!-- Logo and Website Name -->
            <!--<a class="navbar-brand" href="#">-->
            <!--    <img src="./images/favicon.jpg" class="img-fluid" width="40" height="40" alt="Logo">-->
            <!--    PAI-IAS Coaching Centre-->
            <!--</a>-->

            <!-- Responsive Navbar Toggle Button -->
            <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="welcome.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        
                        <a class="nav-link text-light" href=""><?php echo htmlspecialchars($_SESSION["username"]); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="logout.php">Sign Out </a>
                        <!-- <a class="nav-link" href="register.php">Logout</a> -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    
    <marquee class="text-light h5" loop="" behavior="scroll" scrollamount="10" direction="left">Admissions are open. Registration for the entrance exam has started. Last date for Registration of Entrance exam 20/10/2023</marquee>

    <!-- Include Bootstrap JS and jQuery if needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
