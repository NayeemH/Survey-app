<?php
session_start();

$name = "";
$email = "";
$errors = array();



//database connection
  $db = mysqli_connect('localhost', 'root', '', 'registration');

//if the register button is clicked

if (isset($_POST['Submit'])) {
  # code...
  $name = mysql_real_escape_string($_POST['name']);
  $email = mysql_real_escape_string($_POST['email']);
  $password_1 = mysql_real_escape_string($_POST['password_1']);
  $password_2 = mysql_real_escape_string($_POST['password_2']);
  $DOB = mysql_real_escape_string($_POST['DOB']);
  $NID = mysql_real_escape_string($_POST['NID']);
  $phone = mysql_real_escape_string($_POST['phone']);

  //ensure form fields are filled properly
    if (empty($name)) {
      # code...
       array_push($errors, "Username is required!!");
    }
    if (empty($email)) {
      # code...
       array_push($errors, "Email is required!!");
    }
    if (empty($password_1)) {
      # code...
       array_push($errors, "Password is required!!");
    }
    if ($password_1 != $password_2) {
      # code...
       array_push($errors, "The two passwords do not match.Please check!!!");
    }
    //if there is no error,save user to database

    if (count($errors)==0) {
      # code...
      $password = md5($password_1);  //encrypted password
      // $sql = "INSERT INTO users (name,email,phone_namber,NID,DOB,password) VALUES ('$name', '$email','$phone_number','$NID','$DOB','$password')"
      // mysqli_query($db, $sql);
      mysqli_query($db,"INSERT INTO users (name,email,phone,NID,DOB,password) VALUES ('$name', '$email','$phone','$NID','$DOB','$password')");
      mysqli_close($db);
      $_SESSION['name'] = $name;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php'); //redirect to home page
    }
}

//log user in form login page
if (isset($_POST['login'])) {
  $email = mysql_real_escape_string($_POST['email']);
  $password = mysql_real_escape_string($_POST['password_1']);

  //ensure form fields are filled properly
    if (empty($email)) {
      # code...
       array_push($errors, "Email is required!!");
    }
    if (empty($password)) {
      # code...
       array_push($errors, "Password is required!!");
    }
    // if (count($errors) == 0) {
    //   $password = md5($password);
    //   $query = " SELECT * FROM users WHERE name='$name' AND password='$password'";
    //   $result = mysqli_query($db, $query);

    if (count($errors) == 0) {
        $password = md5($password);
        $result = mysqli_query($db,"SELECT * FROM users WHERE name='$name' AND password='$password'");
        mysqli_close($db);

      }
       if (mysqli_num_rows($result) == 1) {
         //log user in
         $_SESSION['name'] = $name;
         $_SESSION['success'] = "You are now logged in";
         header('location: index.php'); //redirect to home page

       }else {
              array_push($errors, "Wrong email/password combination");
             header('location: testlogin.php');
        }
  }


//Logout
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['name']);
  header('location: testlogin.php');
}


?>
