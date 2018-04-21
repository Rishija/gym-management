<?php

    require_once('../includes/header.php');
    require_once('./loginHeader.php');
    // require('includes/admin_loginI.php');
    $status = $_GET['login'];
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

