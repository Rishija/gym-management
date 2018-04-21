<?php

    require_once('./loginHeader.php');
    require_once('../header.php');
    // require('includes/loginI.php');

    $status = $_GET['login'];

    // Wrong password
    if($status == "wp") {
      echo '
      <div class="alert alert-danger">
        <strong>Error!</strong> Email id or password doesn\'t match
      </div>
      ';
    }
    // Not registered
    elseif($status == "nr"){
      echo '
      <div class="alert alert-danger">
        <strong>Error!</strong> Email id not registered
      </div>
      ';
    }
    // Invalid Email
    elseif($status == "ie"){
      echo '
      <div class="alert alert-danger">
        <strong>Error!</strong> Enter a valid email
      </div>
      ';
    }

    echo "Hurray!";
?>

<form action = "./includes/admin_loginI.php">
  <div class = "imgcontainer">
    <img src = "../images/logo.png" class = "dp">
  </div>

  <div class = "container">
    <label for = "uname"><b>Username</b></label>
    <input type = "text" placeholder = "Enter Username" name = "name" required>

    <label for = "psw"><b>Password</b></label>
    <input type = "password" placeholder = "Enter Password" name = "password" required>

    <label for = "adminKey"><b>AdminKey</b></label>
    <input type = "password" placeholder = "Enter key" name = "adminKey" required>
        
    <button type = "submit" name = "submit">Login</button>
  </div>

</form>

