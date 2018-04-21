<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h2>Admin Login Form</h2>

<form action="./includes/admin_loginI.php">
  <div class="imgcontainer">
    <img src="../images/logo.png" alt="Logo" class="dp">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="name" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="adminKey"><b>AdminKey</b></label>
    <input type="password" placeholder="Enter key" name="adminKey" required>
        
    <button type="submit" name = "submit">Login</button>
  </div>

</form>

</body>
</html>
