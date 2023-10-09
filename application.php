<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: login.php");
  exit;
}


require 'config.php';



?>


<!doctype html>
<html lang="en">

<head>
  <title>PAI-IAS</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- <link rel="stylesheet" type="text/css" href="stylesheet.css">  -->
  <style>
    label {
      font-weight: 900;
    }

    
    label span{
      color:#ff5722 ;
      font-size: 12px;
      font-weight: lighter;
    }

    td span{
      color:#ff5722 ;
      font-size: 12px;
      font-weight: lighter;
    }
  </style>

</head>

<body>
  <?php include 'logheader.php' ?>
  <br>
  <h1 class="text-center text-white">Application form for IAS Coaching</h1>
  <p class="text-center text-danger">*Read the instructions Carefully before filling up this form.*</p>
  <!-- <br><br> -->
  <p class="text-center font-italic fw-black fs-5 text-white"><u>Application form for UPSC Residential Coaching & Foundation Course.</u></p>



  <div class="container">
    <div class="row jumbotron">
      <div class="col-sm-12 form-group">
        <!-- form method begins  -->
        <form action="application.php" method="post">
          <p class="text-danger">*All the fields are Required*</p>

          <label for="workingprof">Working Professional</label>
          <select id="workingprof" required name="workingprof" class="form-control" >
          <option>Select Yes/No</option>  
          <option value="yes">Yes</option>
          <option value="no">No</option>
          </select>
<br>

<label for="residential">Have you joined Any Residential Academy earlier ?
</label>
          <select id="residential" required placeholder="Have you joined Any Residential Academy earlier" name="residential" class="form-control" >
            <option> Select Yes/No</option>
          <option value="yes">Yes</option>
          <option value="no">No</option>
          </select>
      <br>
      <label for="residential">Centre for Entrance exam: 
</label>
          <select id="entrance" required placeholder="Select the Centre for Entrance Exam" name="entrance" class="form-control" >
            <option> Select City</option>
          <option value="pune">Pune</option>
          <option value="mumbai">Mumbai</option>
          </select>
      <br>
          <label for="name">Name <span>*</span></label>
          <input class="form-control" type="text" placeholder="Student Name" name="name" id="name" value="<?php echo htmlspecialchars($_SESSION["username"]); ?>" onkeypress="textonly(event)" required><br>

          <label for="dob" class="label">Date of Birth:  <span>*</span></label>
          <input class="form-control" type="date" placeholder="Date of Birth:" name="dob" id="dob" required><br>

          <label for="father">Father's/Husband's Name:  <span>*</span></label>
          <input class="form-control" type="text" onkeypress="textonly(event)" placeholder="Father's/Husband's Name" name="father" id="father" required><br>

          <label for="locala">Local Address: <span>*</span></label>
          <textarea class="form-control" rows="1" cols="50" placeholder="Enter your address here..." id="locala" name="locala" required></textarea><br>

          <label for="pin1">Pincode <span>*</span></label>
          <input type="tel" class="form-control" name="pin" id="pin1" placeholder="Pincode" onkeypress="numpin(event)" required><br>

          <label for="Phone No:">Phone No: <span>*</span></label>
          <input type="number" class="form-control" onkeypress="numonly(event)" placeholder="Phone No: " name="phoneno"  required><br>

          <label for="email">Email Id: <span>*</span></label>
          <input type="email" class="form-control" placeholder="enter your email" name="email" id="email" required><br>

          <label for="mobile">Mobile no: <span>*</span></label>
          <input type="number" class="form-control" name="mobile" id="mobile" placeholder="mobile"  onkeypress="numonly(event)" required><br>

          <!-- checkbox for copying code from local a to permanent a  -->

          <label for="copyAddress">Same as Above:</label>
          <input type="checkbox" id="copyAddress" name="copyAddress" ><br>

          <label for="permanent">Permanent Address: <span>*</span></label>
          <textarea class="form-control" id="permanenta" rows="1" cols="50" placeholder="Click check-box to use local address " id="permanenta" name="permanenta" required></textarea><br>

          <label for="pin2">Pincode:  <span>*</span></label>
          <input type="number" class="form-control" name="pinp" id="pin2" placeholder="Pincode"  onkeypress="numpin(event)" required><br>

          <label for="Phone No:">Phone No: </label>
          <input type="number" class="form-control" onkeypress="numonly(event)" placeholder="Phone No: " name="phonenop"><br>

          <!-- the meduim selecion starts here -->
          <label for="medium">Medium: <span>*</span> </label>
          <input type="radio" id="english" name="medium" value="english">
          <label for="english">English</label>
          <input type="radio" id="hindi" name="medium" value="hindi">
          <label for="hindi">Hindi</label>
          <input type="radio" id="urdu" name="medium" value="urdu">
          <label for="urdu">Urdu</label><br> <br>
          <!-- the meduim selecion ends here -->

          <!-- the Category selecion starts here -->
          <label for="medium">Category:  <span>*</span> </label>
          <input type="radio" id="minority" name="category" value="minority">
          <label for="minority">Minority</label>
          <input type="radio" id="sc" name="category" value="sc">
          <label for="sc">SC</label>
          <input type="radio" id="st" name="category" value="st">
          <label for="st">ST</label>
          <input type="radio" id="women" name="category" value="women">
          <label for="women">Women</label><br><br>
          <!-- the Category selecion endes here -->


          <label for="residentialfac">Do you want to Avail Residential facilities?</label>
          <select id="residentialfac" required name="residentialfac" class="form-control" >
          <option>Select Yes/No</option>  
          <option value="yes">Yes</option>
          <option value="no">No</option>
          </select>
<br>
          <label for="optionalsub">Optional Subject:</label>
          <input type="text" class="form-control" onkeypress="textonly(event)" name="optional_subject" id="optionalsub"><br>

          <!-- Details of Examinations passed endes -->

          <label for="examinations">Details of Examinations Passed:</label> 
          <br>
          <table border="1" class="table table-striped">
            <tr class="bg-dark text-white font-weight-bold">
              <td>Examinations Passed:</td>
              <td>Board/ <br> University</td>
              <td>Year of Passing</td>
              <td>Subjects</td>
              <td>Percentage</td>
            </tr>

            <tr>
              <td class="bg-secondary text-white font-weight-bold">M.A/M.Sc/M.Com.  <span>*</span> </td>
              <td><input type="text" class="form-control" name="ma_msc_mcom_board" onkeypress="textonly(event)" ></td>
              <td><input type="number" class="form-control" name="ma_msc_mcom_year" onkeypress="numyear(event)" ></td>
              <td><input type="text" class="form-control" name="ma_msc_mcom_subjects" onkeypress="textonly(event)" ></td>
              <td><input type="number" class="form-control" name="ma_msc_mcom_percentage" pattern="\d+" ></td>
            <!-- </tr> -->



            
            <tr>
              <td class="bg-secondary text-white font-weight-bold">B.A/ B.Sc./ B.Com./Engg. :  <span>*</span> </td>
              <td><input type="text" class="form-control" onkeypress="textonly(event)" ></td>

              
              <td><input type="number" class="form-control" onkeypress="numyear(event)" ></td>
              <td><input type="text" class="form-control" onkeypress="textonly(event)" ></td>
              <td><input type="number" class="form-control" pattern="\d+" ></td>
            </tr>

            <tr>
              <td class="bg-secondary text-white font-weight-bold">Intermediate / Senoir Secondary (XII):  <span>*</span> </td>
              <td><input type="text" class="form-control" onkeypress="textonly(event)" required></td>
              <td><input type="number" class="form-control" onkeypress="numyear(event)" required></td>
              <td><input type="text" class="form-control" onkeypress="textonly(event)" required></td>
              <td><input type="number" class="form-control" pattern="\d+" required></td>
            </tr>

            <tr>
              <td class="bg-secondary text-white font-weight-bold">Matric / Higher Secondary(X):  <span>*</span> </td>
              <td><input type="text" class="form-control" onkeypress="textonly(event)" required></td>
              <td><input type="number" class="form-control" onkeypress="numyear(event)" required></td>
              <td><input type="text" class="form-control" onkeypress="textonly(event)" required></td>
              <td><input type="number" class="form-control" pattern="\d+" required></td>
            </tr>
            <tr>
              <td class="bg-secondary text-white font-weight-bold">Others: </td>
              <td><input type="text" class="form-control" onkeypress="textonly(event)" ></td>
              <td><input type="number" class="form-control" onkeypress="numyear(event)" ></td>
              <td><input type="text" class="form-control" onkeypress="textonly(event)" ></td>
              <td><input type="number" class="form-control" pattern="\d+" ></td>
            </tr>
          </table>
          <br />
          <!-- Details of Examinations passed endes -->


          <!-- competitive Examinations apperead at starts -->

          <label for="competitve">Competitive Examnations appeared at:</label>
          <br>
          <table border="1" class="table table-striped">

            <tr class="bg-dark text-white font-weight-bold">
              <td>Sr. No. </td>
              <td class="w-50">Name of Examnations</td>
              <td>Year</td>
              <td>Roll No.</td>
              <td>Result</td>
            </tr>

            <tr>
              <td class="bg-secondary text-white font-weight-bold">1 <span>*</span></td>
              <td><input type="text" class="form-control" onkeypress="textonly(event)" required></td>
              <td><input type="number" class="form-control" onkeypress="numyear(event)" required></td>
              <td><input type="text" class="form-control" pattern="\d+" required></td>
              <td><input type="number" class="form-control" pattern="\d+" required></td>
            </tr>

            <tr>
              <td class="bg-secondary text-white font-weight-bold">2 <span>*</span></td>
              <td><input type="text" class="form-control" onkeypress="textonly(event)" required></td>
              <td><input type="number" class="form-control" onkeypress="numyear(event)" required></td>
              <td><input type="text" class="form-control" pattern="\d+" required></td>
              <td><input type="number" class="form-control" pattern="\d+" required></td>
            </tr>

            <tr>
              <td class="bg-secondary text-white font-weight-bold">3 <span>*</span></td>
              <td><input type="text" class="form-control" onkeypress="textonly(event)" required></td>
              <td><input type="number" class="form-control" onkeypress="numyear(event)" required></td>
              <td><input type="text" class="form-control" pattern="\d+" required></td>
              <td><input type="number" class="form-control" pattern="\d+" required></td>
            </tr>
            <tr>
              <td class="bg-secondary text-white font-weight-bold">4 <span>*</span></td>
              <td><input type="text" class="form-control" onkeypress="textonly(event)" required></td>
              <td><input type="number" class="form-control" onkeypress="numyear(event)" required></td>
              <td><input type="text" class="form-control" pattern="\d+" required></td>
              <td><input type="number" class="form-control" pattern="\d+" required></td>
            </tr>
            <tr>
              <td class="bg-secondary text-white font-weight-bold">5 <span>*</span></td>
              <td><input type="text" class="form-control" onkeypress="textonly(event)" required></td>
              <td><input type="number" class="form-control" onkeypress="numyear(event)" required></td>
              <td><input type="text" class="form-control" pattern="\d+" required></td>
              <td><input type="number" class="form-control" pattern="\d+" required></td>
            </tr>
          </table>
          <br />
          <!-- competitive Examinations apperead at endes -->
          <p class="text-left">Please attach the marksheet of your last examination </p>

          <form action="upload.php" method="post" enctype="multipart/form-data">
            <label for="file">Select a document to upload:</label>
            <input type="file" name="file" id="file" required>

            
          </form>
          <br><br>
          <hr>
          <H3 class="text-center">DECLARATION</H3>
          <hr>
          <div class="container mt-5">
            <div class="bg-white p-4 border">
              <p class="text-center">I hereby, solemnly declare that the information given in the form is true to the best of my knowledge and belief. I undertake to accept and abide by the rules of PAI-IAS Coaching Centre and all the decisions of the admission committee and other appropriate University bodies in regard to my admission. I further declare that I am not involved in any criminal case and / or no such case is pending against me in any court of law.</p>
              <!-- check box for user to agree -->

              <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" id="acceptCheckbox" required>
                <label class="form-check-label" for="acceptCheckbox">
                  I accept the above conditions
                </label>
              </div>
            </div>
          </div>
          <hr>
          <!-- button for submitting the form -->
          <br><br><br>
          
          <div class="d-grid gap-2 d-md-flex justify-content-md-end"> 
            <input type="submit"  class="btn btn-success me-md-2" value="submit">
            <button class="btn btn-success me-md-2" type="submit">Submit</button>
            &nbsp;&nbsp;&nbsp;
            <button class="btn btn-primary me-md-2" type="reset">Reset</button>
          </div>
        </form>
      </div>
    </div>
  </div>







<script>

function numonly(event) {
  const inputElement = event.target;
  let input = inputElement.value;
  
  // Remove non-numeric characters
  input = input.replace(/[^0-9]/g, '');

  // Limit input to a maximum of 10 characters
  if (input.length > 10) {
    input = input.slice(0, 10);
  }

  inputElement.value = input;
}

function numyear(event) {
  const inputElement = event.target;
  let input = inputElement.value;
  
  // Remove non-numeric characters
  input = input.replace(/[^0-9]/g, '');

  // Limit input to a maximum of 10 characters
  if (input.length > 4) {
    input = input.slice(0, 4);
  }

  inputElement.value = input;
}

function numpin(event) {
  const inputElement = event.target;
  let input = inputElement.value;
  
  // Remove non-numeric characters
  input = input.replace(/[^0-9]/g, '');

  // Limit input to a maximum of 10 characters
  if (input.length > 6) {
    input = input.slice(0, 6);
  }

  inputElement.value = input;
}


  // function textonly (event) {
  //           var keyCode = event.keyCode || event.which;
  //           var key = String.fromCharCode(keyCode);
            
  //           var regex = /^[a-zA-Z]*$/; // Regular expression to match alphabetic characters
            
  //           if (!regex.test(key)) {
  //               event.preventDefault();
  //           }
  //       }
  

  function textonly(event) {
    var keyCode = event.keyCode || event.which;
    var key = String.fromCharCode(keyCode);
            
    var regex = /^[a-zA-Z\s]*$/; // Regular expression to match alphabetic characters and spaces
            
    if (!regex.test(key)) {
        event.preventDefault();
    }
}


        </script>

  <!-- </form> -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const localAddressTextarea = document.getElementById('locala');
      const permanentAddressTextarea = document.getElementById('permanenta');
      const copyAddressCheckbox = document.getElementById('copyAddress');

      copyAddressCheckbox.addEventListener('change', function() {
        if (copyAddressCheckbox.checked) {
          permanentAddressTextarea.value = localAddressTextarea.value;
          permanentAddressTextarea.placeholder = "Same as local address";
        } else {
          permanentAddressTextarea.value = "";
          permanentAddressTextarea.placeholder = "Enter your permanent address here...";
        }
      });
    });
  </script>
</body>

</html>