<html>
    <head>
        <title>Fitness Freak</title>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1">
        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
    <body>

        <nav class = "navbar navbar-inverse">
            <div class = "container-fluid">
                <div class = "navbar-header">
                    <a class = "navbar-brand" id = "Company" href = "/gym_management/index.php">Fitness Freak</a>
                </div>
                <ul class = "nav navbar-nav">
                    <li id = "About"><a href = "#">About</a></li>
                    <li id = "Facilities"><a href = "#">Facilities</a></li>
                    <li id = "Trainers"><a href = "#">Our trainers</a></li>
                    <li id = "Achievements"><a href = "#">Achievements</a></li>
                    <li id = "Gallery"><a href = "#">Gallery</a></li>
                    <li id = "Contact"><a href = "#">Contact</a></li>
                </ul>
                <ul class = "nav navbar-nav navbar-right">
                    <?php
                      session_start();
                      if(!isset($_SESSION['uid'])) {
                    ?>
                        <li class = "dropdown"><a class = "dropdown-toggle" data-toggle = "dropdown"><span class = "glyphicon glyphicon-user"></span> Sign Up<span class = "caret"></span></a>
                          <ul class = "dropdown-menu" style = "text-align: center;">
                            <li><a href = "#">Join us</a></li>
                            <li><a href = "#">Join as trainer</a></li>
                          </ul>
                        </li>
                        <li class = "dropdown"><a class = "dropdown-toggle" data-toggle = "dropdown"><span class = "glyphicon glyphicon-log-in"></span> Login<span class="caret"></span></a>
                          <ul class = "dropdown-menu" style = "text-align: center;">
                            <li><a href = "login/login.php">Customer</a></li>
                            <li><a href = "#">Trainer</a></li>
                            <li><a href = "login/login_admin.php">Admin</a></li>
                          </ul>
                        </li>
                    <?php
                      }
                      else {
                    ?>
                        <li><a href = "#"><span class = "glyphicon glyphicon-user">Account</span></a></li>
                        <li><a href = "login.php"><span class = "glyphicon glyphicon-log-out"></span>Logout</a></li>
                    <?php
                      }
                    ?>
                </ul>
            </div>
        </nav>
    </body>
</html>
