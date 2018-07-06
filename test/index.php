<?php include('server.php');

if (empty($_SESSION['name'])) {
  # code...
  header('location: testlogin.php');
}

 ?>




<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User registration</title>
    <link rel="stylesheet" type="text/css" href="indexstyle.css">
  </head>
  <body>
    <div class="header">
      <h2>Home Page</h2>

    </div>
    <div class="content">
      <?php if(isset($_SESSION['success'])): ?>
          <div class="error success">
            <h3>
              <?php
                  echo $_SESSION['success'];
                  unset($_SESSION['success']);
              ?>
            </h3>
          </div>

          </div>
      <?php endif ?>

      <?php if (isset($_SESSION["name"])): ?>
            <p>Welcome <strong> <?php echo $_SESSION['name']; ?></strong></p>
            <p>
              <a href="index.php?logout='1'" style="color: red;">Logout</a>
            </p>
      <?php endif ?>


    </div>
  </body>
</html>
