<?php

    require_once('../header.php');
    require_once('./loginHeader.php');
    // require('includes/loginI.php');
    echo '<div class = loginform>';

    $status = $_GET['login'];

    // Wrong password
    if($status == "wp") {
?>

      <!-- <div class="alert alert-danger"> -->
        <strong>Error!</strong> Email id or password doesn\'t match
      </div>
<?php
    }
    // Not registered
    elseif($status == "nr") {
?>
      <div class="alert alert-danger">
        <strong>Error!</strong> Email id not registered
      </div>
<?php
    }
    // Invalid Email
    elseif($status == "ie") {
?>
      <div class="alert alert-danger">
        <strong>Error!</strong> Enter a valid email
      </div>
<?php
    }
?>

<form action = "./includes/loginI.php" method = "POST">
  <div class = "imgcontainer">
    <img src = "../images/logo.jpg" class = "dp">
  </div>

  <div class = "container">
    <label for = "uname"><b>Username</b></label>
    <input type = "text" placeholder="Enter Username" name="name" required>

    <label for = "psw"><b>Password</b></label>
    <input type = "password" placeholder="Enter Password" name="password" required>

    <button type = "submit" name = "submit">Login</button>
  </div>
</form>


