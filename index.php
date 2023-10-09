<!doctype html>
<html lang="en">
  <head>
    <title>PAI-IAS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta http-equiv="refresh" content="5;url=/404.html"> -->

<link rel="stylesheet" href="stylesheet.css" type="text/css" >

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">



<style>

#backToTopBtn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 15px 20px;
            font-size:large;
            cursor: pointer;
            z-index: 999; /* Ensure the button is above other elements */
        }


.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.eligibility {
  padding: 50px;
  text-align: center;
  background-color: white;
  color: black;
}

p{
    font-size:20px;
}

.imgb {
    background: url(./images/azam-campus.jpg);
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
<img class="imgb" src="./images/campus-ground.jpg" alt="campus staff">

<div class="overlay" id="overlay"> 
    <!-- onclick="window.location.href='/paiias/login.php';" -->
    <div class="popup">
        <span class="close-btn" onclick="closePopup()">&times;</span>
        <img src="./images/popup-banner.jpg" alt="Popup Image">
    </div>
</div>

<div class="about-section">
  <h1>About Us </h1> <br>
  <p>At P. A. Inamdar IAS Coaching Institute, we take pride in our commitment to shaping future leaders and empowering them to excel in the highly competitive world of civil services. We offer a unique and comprehensive approach to UPSC coaching, with a strong focus on two key programs: the Foundation Batch and the Main Residential Batch. Our mission is simple: to help aspiring civil servants reach their full potential and fulfill their dreams of serving the nation</p>
  
</div>


<div class="eligibility">
  <h1>Eligibility</h1> <br>
  <p>Our program is open to both graduates and undergraduates who meet our eligibility criteria, which can be found in the entrance test notification</p>
  
</div>

<br>
<h1 class="text-center text-light">Why Choose P. A. Inamdar IAS Coaching institute</h1> <br> 
<div class="row">
    <div class="col p-3 text-white border "> <p class="text-center"><b> <img src="./images/right-chevron.png"> Experienced Faculty:</b> <br> Our team of experienced and renowned faculty members are dedicated to providing top-notch guidance and mentorship</p></div>
    <div class="col p-3 text-white border"><p class="text-center"><b> <img src="./images/right-chevron.png"> Comprehensive Syllabus Coverage:</b> <br> We cover all stages of the UPSC examination, including Preliminary, Main, and Interview, ensuring holistic preparation</p></div>
    <div class="col p-3 text-white border "><p class="text-center"> <b> <img src="./images/right-chevron.png"> Personalized Counseling: </b><br>We provide individualized mentoring and counseling to address each student's unique needs and challenges</p></div>
  </div>
  <div class="row">
    <div class="col p-3 text-white border "> <p class="text-center"><b><img src="./images/right-chevron.png">Rigorous Assessment:</b> <br> Regular mock tests and performance assessments help us track and enhance students' progress</p></div>
    <div class="col p-3 text-white border"><p class="text-center"><b> <img src="./images/right-chevron.png">Access to Resources:</b> <br> Our students have access to an extensive library, study materials, and online resources to support their learning journey</p></div>
    <div class="col p-3 text-white border "><p class="text-center"> <b> <img src="./images/right-chevron.png"> Residential Facilities: </b> <br> We offer comfortable and well-equipped accommodation, providing a focused and distraction-free learning environment.</p></div>
  </div>

<?php include 'footer.php'; ?>

<button id="backToTopBtn" onclick="openURL()" class="animated-btn">Brochure<img class="pdf" src="./images/download-pdf.png"> </button>


<script src="script.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


