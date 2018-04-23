<?php
  require('./loginHeader.php');
  require('../includes/header.php');
  $status = $_GET['login'];
  if($status == "wd") {
    ?>
    <div class="alert alert-danger">
      <strong>Error!</strong> Invalid admin details
    </div>
  <?php
  }
?>


<form action = "./includes/admin_loginI.php" method = "POST">
  <div align = "center">
    <img src = "../images/logo.png">
  </div>

  <div class = "container">
    <label for = "uname"><b>Username</b></label>
    <input type = "text" placeholder = "Enter Username" name = "name" required>

    <label for = "psw"><b>password</b></label>
    <input type = "password" placeholder = "Enter key" name = "password" required>

    <label for = "adminKey"><b>AdminKey</b></label>
    <input type = "password" placeholder = "Enter key" name = "adminKey" required>

    <button type = "submit" name = "submit">Login</button>
  </div>

</form>

