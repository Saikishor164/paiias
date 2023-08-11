<!doctype html>
<html lang="en">
  <head>
    <title>PAI-IAS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <?php include 'header.php' ?>
    <div class="row jumbotron">
    <div class="col-sm-12 form-group">
      <h1 class="text-center">Application form for IAS Coaching</h1>
      <p class="text-center text-danger">*Read the instructions Carefully before filling up this form.*</p>
      <br><br>
      <hr>
      <p class="text-center font-italic fw-black fs-5"><u>Application form for Civil Services (Main Cum Personlity test) Coaching Programme_2023</u></p>
      



      <!-- form method begins  -->
      <form action="application.php" method="post">
      
      
      
      <label for="name">Name</label>

      
      <input class="form-control" type="text" placeholder="Student Name" name="name" id="name"><br>
      
      <label for="dob">Date of Birth: </label>
      
      <input class="form-control" type="datetime" placeholder="Date of Birth:" name="dob" id="dob"><br>
      
      <label for="father">Father's/Husband's Name: </label>
      
      <input class="form-control" type="text" placeholder="Father's/Husband's Name" name="father" id="father"><br>
        
      <label for="locala">Local Address:</label>
      
      <textarea class="form-control" rows="1" cols="50" placeholder="Enter your address here..." id="locala" name="locala"></textarea><br>
      
      <label for="pin-Number">Pin - Number</label>
      
      <input type="tel" class="form-control" minlength="6" maxlength="6" name="pin" id="pin" placeholder="Pin-Number"><br>
      
      <label for="Phone No:">Phone No:</label>
      
      <input type="tel" class="form-control" maxlength = "10" minlength ="9" pattern="[1-9]" placeholder="Phone No: "><br>
      
      <label for="email">Email Id:</label>
      
      <input type="email" class="form-control" placeholder="enter your email"  name="email" id="email"><br>
      
      <label for="mobile">Mobile no:</label>
      
      <input type="tel" class="form-control" name="mobile" id="mobile" placeholder="mobile"><br>
      
      <!-- checkbox for copying code from local a to permanent a  -->
      
      <label for="copyAddress">Same as Above:</label>
      
      <input type="checkbox" id="copyAddress" name="copyAddress"><br>
      
      <label for="permanent">Permanent Address:</label>
      
      <textarea class="form-control" id="permanenta" rows="1" cols="50" placeholder="Click check-box to use local address " 
      id="permanenta" name="permanenta"></textarea><br>
      
      <label for="pin-Number">Pin - Number</label>
      
      <input type="tel" class="form-control" minlength="6" maxlength="6" name="pin" id="pin" placeholder="Pin-Number"><br>
      
      <label for="Phone No:">Phone No:</label>
      
      <input type="tel" class="form-control" maxlength = "10" minlength ="9" pattern="[1-9]" placeholder="Phone No: "><br>


      
      <label for="medium">Medium:</label><br>
      
      <input type="radio" id="english" name="medium" value="English">
      
      <label for="english">English</label>
      
      <input type="radio" id="hindi" name="medium" value="Hindi">
      
      <label for="hindi">Hindi</label>
      
      <input type="radio" id="urdu" name="medium" value="Urdu">
      
      <label for="urdu">Urdu</label><br>


      
      <label for="medium">Category:</label><br>
      
      <input type="radio" id="minority" name="category" value="minority">
      
      <label for="minority">Minority</label>
      
      <input type="radio" id="sc" name="category" value="sc">
      
      <label for="sc">SC</label>
      
      <input type="radio" id="st" name="category" value="st">
      
      <label for="st">ST</label>
      
      <input type="radio" id="women" name="category" value="women">
      
      <label for="women">Women</label><br>


      
      <label for="optionalsub">Optional Subject:</label>
      
      <input type="text" name="optionalsub" id="optionalsub"><br>


      
      <label for="examinations">Details of Examinations Passed:</label> <br>


      
      <table border="1" class="table table-striped">
    <t
    r class="bg-dark text-white font-weight-bold">
    
    <td>Examinations Passed:</td>
    
    <td>Board/University</td>
    
    <td>Year of Passing</td>
    
    <td>Subjects</td>
    
    <td>Percentage</td>
    
  </tr>
  
  <tr>
  
  <td class="bg-secondary text-white font-weight-bold">M.A/M.Sc/M.Com.</td>
  
  <td><input type="text" class="form-control"></td>
  
  <td><input type="number" class="form-control" ></td>
  
  <td><input type="text" class="form-control" ></td>
  
  <td><input type="number" class="form-control" ></td>
  
</tr>

<tr>

<td class="bg-secondary text-white font-weight-bold" >B.A/ B.Sc./ B.Com./Engg.</td>

<td><input type="text" class="form-control" ></td>

<td><input type="number" class="form-control" ></td>

<td><input type="text" class="form-control" ></td>

<td><input type="number"class="form-control" ></td>

</tr>

<tr>

<td class="bg-secondary text-white font-weight-bold" >Intermediate / Senoir Secondary (XII)</td>

<td><input type="text" class="form-control" ></td>

<td><input type="number" class="form-control" ></td>

<td><input type="text" class="form-control" ></td>

<td><input type="number" class="form-control" ></td>

</tr>

<tr>

<td class="bg-secondary text-white font-weight-bold" >Matric / Higher Secondary(X)</td>

<td><input type="text" class="form-control" ></td>

<td><input type="number" class="form-control" ></td>

<td><input type="text" class="form-control"></td>

<td><input type="number" class="form-control" ></td>

</tr>

<tr>

<td class="bg-secondary text-white font-weight-bold">Others:</td>

<td><input type="text" class="form-control" ></td>

<td><input type="number" class="form-control" ></td>
        <td><input type="text" class="form-control" ></td>

        <td><input type="number" class="form-control" ></td>

      </tr>

    </table>

    <br/>






<lab
el for="competitve">Competitive Examnations appeared at:</label>

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

      <td class="bg-secondary text-white font-weight-bold">1</td>

      <td><input type="text"class="form-control" ></td>

      <td><input type="number" class="form-control" ></td>

      <td><input type="text" class="form-control" ></td>

      <td><input type="number" class="form-control" ></td>

    </tr>

    <tr>

    <td class="bg-secondary text-white font-weight-bold" >2</td>

    <td><input type="text" class="form-control" ></td>

    <td><input type="number" class="form-control" ></td>

    <td><input type="text" class="form-control"></td>

    <td><input type="number" class="form-control" ></td>
    </tr>

    <tr>
        <td class="bg-secondary text-white font-weight-bold" >3</td>
        <td><input type="text" class="form-control" ></td>
        <td><input type="number" class="form-control" ></td>
        <td><input type="text" class="form-control" ></td>
        <td><input type="number" class="form-control" ></td>
    </tr>
    <tr>
        <td class="bg-secondary text-white font-weight-bold" >4</td>
        <td><input type="text" class="form-control" ></td>
        <td><input type="number" class="form-control" ></td>
        <td><input type="text" class="form-control" ></td>
        <td><input type="number" class="form-control" ></td>
    </tr>
    <tr>
        <td class="bg-secondary text-white font-weight-bold">5</td>
        <td><input type="text" class="form-control" ></td>
        <td><input type="number" class="form-control" ></td>
        <td><input type="text" class="form-control" ></td>
        <td><input type="number" class="form-control" ></td>
    </tr>
</table>
<p class="text-left">Please attach the marksheet of your last examination </p>

<form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="file">Select a document to upload:</label>
        <input type="file" name="file" id="file">
        
        <input type="submit" value="Upload">
      </form>
<br><br>
<hr>
      <H1 class="text-center" >DECLARATION</H1>
<hr>
      <div class="container mt-5">
        <div class="bg-white p-4 border">
            <p class="text-center">I hereby, solemnly declare that the information given in the form is true to the best of my knowledge and belief. I undertake to accept and abide by the rules of Jamia Millia Islamia and all the decisions of the admission committee and other appropriate University bodies in regard to my admission. I further declare that I am not involved in any criminal case and / or no such case is pending against me in any court of law.</p>
            <!-- check box for user to agree -->

            <div class="form-check mt-3">
              <input class="form-check-input" type="checkbox" id="acceptCheckbox">
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
  <button class="btn btn-primary me-md-2" type="button">Submit and Generate PDF</button>
                     &nbsp;&nbsp;&nbsp;
  <button class="btn btn-primary me-md-2" type="reset">Reset</button>
</div>

    </div>
   </div>











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