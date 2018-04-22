<?php
    require_once('../includes/header.php');
    $status = $_GET['signup'];

?>

<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel = "stylesheet" type = "text/css" href = "style.css">


<form action = "/includes/signup_clientI.php" method = "POST" style = "max-width:500px;margin:auto">
  <h2>Join Fitness Freak and stay fit</h2>
  <div class = "input-container">
    <i class = "fa fa-user-circle icon"></i>
    <input class = "input-field" type = "text" placeholder = "First name" name = "fname" required>
  </div>

  <div class = "input-container">
    <i class = "fa fa-user-circle icon"></i>
    <input class = "input-field" type = "text" placeholder = "Last name" name = "lname" required>
  </div>

  <div class = "input-container">
    <i class = "fa fa-envelope icon"></i>
    <input class = "input-field" type = "email" placeholder = "Email id" name = "email" required>
  </div>

  <div class = "input-container">
    <i class = "fa fa-key icon"></i>
    <input class = "input-field" type = "password" placeholder = "Password" name = "password" required>
  </div>

  <div class = "input-container">
    <i class = "fa fa-user icon"></i>
    <input class = "input-field" type = "text" placeholder = "Username" name = "username" required>
  </div>

  <div class = "input-container">
    <i class = "fa fa-file-text icon"></i>
  <select class = "input-field" id  =  "purpose" name = "purpose" required>
    <option value = "" disabled selected>Purpose of joining</option>
    <option value  =  "Weight gain">Weight Gain</option>
    <option value  =  "Weight loss">Weight loss</option>
    <option value  =  "Toning">Toning</option>
    <option value  =  "Stay fit">Stay fit</option>
  </select>
  </div>

  <div class = "input-container">
    <i class = "fa fa-inr icon"></i>
    <select class = "input-field" id = "fee"  name = "fee" required>
      <option value = "" disabled selected>Choose plan</option>
      <option value  =  "2000">Monthly Plan - Rs. 2000</option>
      <option value  =  "1800">Quaterly Plan - Rs. 5400 for 3 months</option>
      <option value  =  "1700">Special Package - Rs. 9600 for 6 months</option>
      <option value  =  "1500">Annual Package - Rs. 18000</option>
    </select>
  </div>

  <div class = "input-container">
    <i class = "fa fa-balance-scale icon"></i>
    <input class = "input-field" type = "number" placeholder = "Enter weight" min = "30" max = "999" name = "weight"required>
  </div>

  <div class = "input-container">
    <i class = "fa fa-child icon"></i>
    <input class = "input-field" type = "number" placeholder = "Enter Height in meters (upto 3 decimal places)" min = "0" max = "5" step = "0.001" name = "height" required>
  </div>

  <div class = "input-container">
    <i class = "fa fa-user-md icon"></i>
    <input class = "input-field" type = "text" placeholder = "Any notable medical history" name = "history" name = "history" required>
  </div>

  <button type = "submit" name = "submit" class = "btn">Join</button>
</form>
