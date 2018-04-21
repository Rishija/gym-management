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
