<?php

  session_start();
  if($_SESSION['type'] != "trainer") {
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

  $getDetails = "SELECT fname, lname, m.username, email, phone, joined, password, experience
  from trainer t, members m
  WHERE m.username=? AND t.username = m.username";

  $stmt1 = mysqli_stmt_init($conn);
  mysqli_stmt_prepare($stmt1, $getDetails);
  mysqli_stmt_bind_param($stmt1, "s", $_SESSION['uid']);
  mysqli_stmt_execute($stmt1);

  mysqli_stmt_bind_result($stmt1, $fname, $lname, $username, $email, $phone, $joined,
  $password, $experience);

  mysqli_stmt_fetch($stmt1);
  mysqli_stmt_close($stmt1);
?>

<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></link>
<link rel="stylesheet" type="text/css" href="./styleNew.css"></link>


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
    <select class = "input-field" id  =  "type" name = "type" required>
      <option value = "" disabled selected>Trainer type</option>
      <option value = "Personal Trainer(Hourly)">Personal Trainer(Contingent-Hourly)</option>
      <option value = "Personal Trainer">Personal Trainer</option>
      <option value = "Group Trainer">Group Trainer</option>
    </select>
  </div>

  <div class = "input-container">
    <i class = "fa fa-inr icon"></i>
    <select class = "input-field" id = "salary"  name = "salary" required>
      <option value = "" disabled selected>Choose Expected Salary</option>
      <option value = "2000">Below Rs. 2000</option>
      <option value = "3000">Rs. 2000 - Rs. 3000</option>
      <option value = "4000">Rs. 3000 - Rs. 4000</option>
      <option value = "5000">Above Rs. 4000</option>
    </select>
  </div>

  <div class = "input-container">
    <i class = "fa fa-certificate icon"></i>
    <select class = "input-field" id = "specialization"  name = "specialization" required>
      <option value = "" disabled selected>Choose Specialization</option>
      <option value = "Nutrition and Weight Management">Nutrition and Weight Management</option>
      <option value = "Clinical Disease">Clinical Disease</option>
      <option value = "Mind-Body Fitness">Mind-Body Fitness</option>
      <option value = "Special Populations">Special Populations</option>
    </select>
  </div>

  <div class = "input-container">
    <i class = "fa fa-book icon"></i>
    <select class = "input-field" id = "qualification"  name = "qualification" required>
      <option value = "" disabled selected>Choose Qualification</option>
      <option value = "12th pass">12th Pass</option>
      <option value = "Diploma">Diploma</option>
      <option value = "Master's Degree">Master's Degree</option>
      <option value = "Professioal Degree">Professioal Degree</option>
    </select>
  </div>

  <div class = "input-container">
    <i class = "fa fa-black-tie icon"></i>
    <?php
        echo '
          <input class = "input-field" type = "number" placeholder = "Enter experience" min = "0" max = "30" name = "experience"required value = "'.(int)$experience.'">
        ';
    ?>
  </div>

  <div class = "input-container">
    <i class = "fa fa-file-text icon"></i>
    <?php echo '
    <input class = "input-field" type = "text" name = "joined" value = "'.$joined.'" readonly>';
    ?>
  </div>

<br>

<button type = "submit" name = "update" class = "btn">Update Information</button>
</form>
<br>

<form action = "./change_password.php" method = "POST" style = "max-width:500px;margin:auto">
  <button type = "submit" name = "changePassword" class = "btn">Change password</button>
</form>
