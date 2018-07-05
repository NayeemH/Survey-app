
<?php
include('server.php');

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="stylephp.css">
    <link rel="stylesheet" href="resetphp.css">
  </head>
  <body>
    <div class="modal-dialog text-center">
      <div class="col-sm-8 main-section">
        <div class="modal-content">
          <div class="col-12 user-img">
            <img src="face.png" alt="face image">

          </div>
            <form class="col-12" action="test.php" method="post">

              <?php include('errors.php'); ?>


              <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo $name; ?>">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $email; ?>">
              </div>
              <div class="form-group">
                <input type="number" class="form-control" placeholder="Phone Number" name="phone_number" value="<?php echo $phone_number; ?>">
              </div>
              <div class="form-group">
                <input type="number" class="form-control" placeholder="NID number" name="NID" value="<?php echo $NID; ?>">
              </div>
              <div class="form-group">
                <input type="date" class="form-control" placeholder="Date of Birth" name="DOB" value="<?php echo $DOB; ?>">
              </div>

              <div class="form-group">
                <input type="password" class="form-control" minlength="6" placeholder="Password" name="password_1" >
              </div>

              <div class="form-group">
                <input type="password" class="form-control" minlength="6" placeholder="Confirm Password" name="password_2">
              </div>
              <button type="submit" class="btn" name="Submit">
                <i class="fas fa-sign-in-alt"></i>Submit
              </button>
              <p> Already a member? <a href="testlogin.php">Log In</a></p>
            </form>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
