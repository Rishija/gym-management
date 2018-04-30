<?php

  session_start();
  if($_SESSION['type'] != "client") {
    header("Location: ../index.php");
    exit();
  }

  require('../includes/header.php');
  require('../includes/db.php');

  $status = $_GET['edit'];

  if($status == "success") {
?>

    <div class="alert alert-success">
      <strong>Success!</strong> Information updated successfully
    </div>
<?php

    }
  elseif($status == "error") {
?>

<div class="alert alert-danger">
  <strong>Error!</strong> Could not update details
</div>

<?php
  }

  $getDetails = "SELECT fname, lname, m.username, email, phone, joined,
  password, weight, height, fee, purpose, history, trainer, chart
  from client c, members m
  WHERE m.username=? AND c.username = m.username";

  $stmt1 = mysqli_stmt_init($conn);
  mysqli_stmt_prepare($stmt1, $getDetails);
  mysqli_stmt_bind_param($stmt1, "s", $_SESSION['uid']);
  mysqli_stmt_execute($stmt1);

  mysqli_stmt_bind_result($stmt1, $fname, $lname, $username, $email, $phone, $joined,
  $password, $weight, $height, $fee, $purpose, $history, $trainer, $chart);

  mysqli_stmt_fetch($stmt1);
  mysqli_stmt_close($stmt1);
?>

<link rel = "stylesheet" href = "/gym_management/assets/css/font-awesome.min.css"></link>
<link rel="stylesheet" type="text/css" href="/gym_management/assets/css/client.css"></link>


<form action = "./includes/edit_detailsI.php" method = "POST" style = "max-width:500px;margin:auto">
  <h2>Update personal information</h2>

  <div class = "input-container">
    <i class = "fa fa-user-circle icon"></i>
    <?php
        echo '
          <input class = "input-field" type = "text" name = "fname" value = "'.$fname.'" readonly>
        ';
    ?>
  </div>

  <div class = "input-container">
    <i class = "fa fa-user-circle icon"></i>
    <?php
        echo '
          <input class = "input-field" type = "text" name = "lname" value = "'.$lname.'" readonly>
        ';
    ?>
  </div>

  <div class = "input-container">
    <i class = "fa fa-envelope icon"></i>
    <?php
        echo '
          <input class = "input-field" type = "email" name = "email" value = "'.$email.'" readonly>
        ';
    ?>
  </div>

  <div class = "input-container">
    <i class = "fa fa-user icon"></i>
    <?php
        echo '
          <input class = "input-field" type = "text" name = "username" value = "'.$username.'" readonly>
        ';
    ?>
  </div>

  <div class = "input-container">
    <i class = "fa fa-mobile icon"></i>
    <?php
        echo '
          <input class = "input-field" type = "text" maxlength = "15" placeholder = "Enter mobile number" name = "phone" required value = "'.$phone.'" readonly>
        ';
    ?>
  </div>

  <div class = "input-container">
    <i class = "fa fa-file-text icon"></i>
    <select class = "input-field" id  =  "purpose" name = "purpose" required>
      <option value = "" disabled selected>Purpose of joining</option>
      <option value = "Weight gain">Weight Gain</option>
      <option value = "Weight loss">Weight loss</option>
      <option value = "Toning">Toning</option>
      <option value = "Stay fit">Stay fit</option>
    </select>
  </div>

  <div class = "input-container">
    <i class = "fa fa-inr icon"></i>
    <select class = "input-field" id = "fee"  name = "fee" required>
      <option value = "" disabled selected>Choose plan</option>
      <option value = "2000">Monthly Plan - Rs. 2000</option>
      <option value = "1800">Quaterly Plan - Rs. 5400 for 3 months</option>
      <option value = "1700">Special Package - Rs. 9600 for 6 months</option>
      <option value = "1500">Annual Package - Rs. 18000</option>
    </select>
  </div>

  <div class = "input-container">
    <i class = "fa fa-balance-scale icon"></i>
    <?php
        echo '
          <input class = "input-field" type = "number" placeholder = "Enter weight" min = "30" max = "999" name = "weight"required value = "'.(int)$weight.'">
        ';
    ?>
  </div>

  <div class = "input-container">
    <i class = "fa fa-child icon"></i>
    <?php
        echo '
          <input class = "input-field" type = "number" placeholder = "Enter Height in meters (upto 3 decimal places)" min = "0" max = "5" step = "0.001" name = "height" required value = "'.(float)$height.'">
        ';
    ?>
  </div>

  <div class = "input-container">
    <i class = "fa fa-user-md icon"></i>
    <?php
        echo '
          <input class = "input-field" type = "text" maxlength = "100" placeholder = "Any notable medical history" name = "history" name = "history" required value = "'.$history.'">
        ';
    ?>
  </div>

  <div class = "input-container">
    <i class = "fa fa-file-text icon"></i>
    <?php echo '
    <input class = "input-field" type = "text" name = "joined" value = "'.$joined.'" readonly>';
    ?>
  </div>

  <div class = "input-container">
    <i class = "fa fa-male icon"></i>
    <?php echo '
    <input class = "input-field" type = "text" placeholder = "No trainer assigned yet" name = "trainer" value = "'.$trainer.'" readonly>';
    ?>
  </div>

  <div class = "input-container">
    <i class = "fa fa-male icon"></i>
    <?php echo '
    <input class = "input-field" type = "text" placeholder = "No trainer assigned yet" name = "trainer" value = "'.$trainer.'" readonly>';
    ?>
  </div>

 <div class = "boxx-container">
  <h3><br><br><br>Diet chart</h3><hr>
  <div class = "boxx">
    <?php
      echo '<p>'.$chart.'</p>';
    ?>
  </div>
</div>
<br>

<button type = "submit" name = "update" class = "btn">Update Information</button>
</form>
<br>

<form action = "./change_password.php" method = "POST" style = "max-width:500px;margin:auto">
  <button type = "submit" name = "changePassword" class = "btn">Change password</button>
</form>

<?php

  /*
  To be used in trainer

  $insert = "UPDATE client SET chart=? WHERE username=?";

  $stmt2 = mysqli_stmt_init($conn);
  mysqli_stmt_prepare($stmt2, $insert);
  $null = NULL;
  mysqli_stmt_bind_param($stmt2, "bs", $null, $_SESSION['uid']);

  $isSent = mysqli_stmt_send_long_data ($stmt2 , 0 , file_get_contents("./a.txt") );
  // if($isSent) {
  //     echo "Done";
  // }
  // else {
  //     echo "Not<br>";
  // }

  if(mysqli_stmt_execute($stmt2)){
    echo"inserted";
  }
  else{
    "notinserted";
  }
  mysqli_stmt_close($stmt1);
  */

?>
