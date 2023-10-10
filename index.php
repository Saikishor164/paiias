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
  
<marquee class="text-light h5" loop="" behavior="scroll" scrollamount="10" direction="left">Admissions are open. Registration for the entrance exam has started. Last date for Registration of Entrance exam 20/10/2023</marquee>
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
<a href="http://" id="backToTopBtn" onclick="openWH()" target="_blank" rel="noopener noreferrer">
<svg xmlns="http://www.w3.org/2000/svg" height="2.8em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#1bc026}</style><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg></a>


<script src="script.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


