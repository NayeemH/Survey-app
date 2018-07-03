<?php
$msg = "";

if (isset($_POST['submit'])){
 $con = new PDO('mysql:host=localhost;port=3306;dbname=Survey','root','');
session_start();

  $name = $con->real_escape_string($_POST['name']);
  $email = $con->real_escape_string($_POST['email']);
  $password = $con->real_escape_string($_POST['password']);
  $cpassword = $con->real_escape_string($_POST['cpassword']);

  if ($password != $cpassword)
    $msg = "Please check your passwords!!";
  else{
        $hash = password_hash($password, algo: PASSWORD_BCRYPT);
        
        $con->query(query: "INSERT INTO Register (name,email,password) values ('$name','$email','$hash')");
        $msg1 = "You have been successfully registered!";
  }

}
?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="registerstyle.css">
    <link rel="stylesheet" href="reset.css">
  </head>
  <body>
    <div class="modal-dialog text-center">
      <div class="col-sm-8 main-section">
        <div class="modal-content">
          <div class="col-12 user-img">
            <img src="face.png" alt="face image">
              <?php if ($msg !="") {
                # code...
                echo $msg. "<br><br>";
              }
              ?>
          </div>
            <form class="col-12" action="registration.php" method="post">
              <div class="form-group">
                <input type="text" class="form-control" minlength="3" placeholder="User Name..." name="name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" minlength="5" placeholder="Email..." name="email">
              </div>
              <div class="form-group">
                <input type="date" class="form-control" minlength="5" placeholder="Date of Birth" name="dateofbirth">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" minlength="6" placeholder="Password..." name="password">
              </div>

              <div class="form-group">
                <input type="password" class="form-control" minlength="6" placeholder="Confirm Password..." name="cpassword">
              </div>
              <button type="submit" class="btn" name="submit" value="register">
                <i class="fas fa-sign-in-alt"></i>Sign Up
              </button>
            </form>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
