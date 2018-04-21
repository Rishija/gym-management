<link rel="stylesheet" type="text/css" href="./style.css">

<?php

if(isset($_SESSION['uid'])) {
  header("Location: ../index.php");
  exit();
}

?>
