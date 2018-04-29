<?php
    require_once('../includes/header.php');
    $status = $_GET['signup'];

    if($status == "er") {
?>
<div class="alert alert-danger">
  <strong>Error!</strong> Admin already exist.
</div>
<?php
  }
  elseif($status == "error") {
?>
<div class="alert alert-danger">
  <strong>Error!</strong> Error in creating admin.
</div>
<?php
  }
  elseif($status == "success") {
?>
<div class="alert alert-success">
  <strong>Success!</strong> New admin created successfully.
</div>
<?php
  }
?>

<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel = "stylesheet" type = "text/css" href = "style.css">


<form action = "./includes/create_adminI.php" method = "POST" style = "max-width:500px;margin:auto">
  <h2>New Admin</h2>

  <div class = "input-container">
    <i class = "fa fa-user icon"></i>
    <?php
      if(isset($_GET['username'])) {
        echo '
          <input class = "input-field" type = "text" maxlength = "30" placeholder = "Username" name = "username" required value = "'.$_GET['username'].'">
        ';
      }
      else {
        echo '
          <input class = "input-field" type = "text" maxlength = "30" placeholder = "Username" name = "username" required>
        ';
      }
    ?>
  </div>

  <div class = "input-container">
    <i class = "fa fa-key icon"></i>
    <input class = "input-field" type = "password" maxlength = "16" placeholder = "Password" name = "password" required>
  </div>

  <div class = "input-container">
    <i class = "fa fa-key icon"></i>
    <input class = "input-field" type = "Password" maxlength = "16" placeholder = "Key" name = "key" required>
  </div>

  <button type = "submit" name = "submit" class = "btn">Create</button>
</form>
