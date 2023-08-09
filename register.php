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
  <?php include 'header.php'; ?>


  <h2 class="text-center text-primary mt-3 mb-4"><b>Registration</b> </h2>
  <form action="register.php">
    <div class="container">
      <label for="name">Name:</label>
      <br>
      <input type="text" id="name" name="name">
      <br>
      <label for="email">Email:</label> 
      <br>
      <input type="text" id="email" name="email">
      <br> 
      <label for="phone">Phone:</label>
      <br>
      <input type="text" id="Phone" name="phone" minlength="9" maxlength="10"><br>
      <label for="Password">password:</label><br>
      <input type="password" id="password" name="password">
      <br><br>

<!-- buttons -->
     <button type="submit" value="Submit">Register</button>
     <button type="reset" value="reset">Reset</button>

  <br>
  <a href="login.php">Login here!</a></p>
  </div>
<!-- buttons ending -->
</form>









 <?php include 'footer.php'; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>