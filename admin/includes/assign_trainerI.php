<?php

  if(!isset($_POST['submit'])) {
    header("Location: ../create_admin.php");
    exit();
  }

  $trainer = $_POST['trainer_username'];
  $client = $_POST['client_username'];

  require('../../includes/db.php');

  $trainerUsername = "SELECT username from trainer WHERE username=?";
  $stmt = mysqli_stmt_init($conn);
  mysqli_stmt_prepare($stmt, $trainerUsername);
  mysqli_stmt_bind_param($stmt, "s", $trainer);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  $row = mysqli_fetch_array($result, MYSQLI_NUM);

  $num = count($row);

  mysqli_stmt_close($stmt);

  // If username doesn't exist.
  if(!$num) {
    header("Location: ../assign_trainer.php?assign=wd&trainer_username=$trainer&client_username=$client");
    exit();
  }
  
  $clientUsername = "SELECT username from client WHERE username=?";
  $stmt = mysqli_stmt_init($conn);
  mysqli_stmt_prepare($stmt, $clientUsername);
  mysqli_stmt_bind_param($stmt, "s", $client);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  $row = mysqli_fetch_array($result, MYSQLI_NUM);

  $num = count($row);

  mysqli_stmt_close($stmt);

  // If username doesn't exist.
  if(!$num) {
    header("Location: ../assign_trainer.php?assign=wd&trainer_username=$trainer&client_username=$client");
    exit();
  }


  $update = "UPDATE client SET trainer = ? WHERE username=?;";

  $statement = mysqli_stmt_init($conn);
  mysqli_stmt_prepare($statement, $update);
  mysqli_stmt_bind_param($statement, "ss", $trainer, $client);
  $executed = mysqli_stmt_execute($statement);
  mysqli_stmt_close($statement);

  if(!$executed) {
    header("Location: ../assign_trainer.php?assign=error");
    exit();
  }
  else {
   header("Location: ../assign_trainer.php?assign=success");
  }
?>
