<!doctype html>
<html lang="en">
  <head>
    <title>PAI-IAS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="stylesheet.css" type="text/css" >

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">



<style>
.imgb {
    background: url(./images/Campus-Staff_1.png);
    background-size: cover; /* Scale the background image to cover the entire element */
    background-position: center; /* Center the background image */
    height: 720px !important; /* You can adjust this height as needed */
    width: 100% !important; /* Use 100% width to make the image responsive */
}

/* Media query for screens with max-width of 768px (typical mobile screen size) */
@media (max-width: 768px) {
    .imgb {
        height: auto !important; /* Allow the image height to adjust according to its aspect ratio */
    }
}

</style>

  </head>
  <body>
  <?php include 'header.php'; ?>
<img class="imgb" src="./images/Campus-Staff_1.png" alt="campus staff">

<div class="overlay" id="overlay"> 
    <!-- onclick="window.location.href='/paiias/login.php';" -->
    <div class="popup">
        <span class="close-btn" onclick="closePopup()">&times;</span>
        <img src="./images/popup-banner.jpg" alt="Popup Image">
    </div>
</div>



<?php include 'footer.php'; ?>
<script src="script.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


