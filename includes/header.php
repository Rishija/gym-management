<html>
    <head>
        <title>Fitness Freak</title>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1">
        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></link>
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
                    <li id = "About"><a href = "/gym_management/about.php">About</a></li>
                    <li id = "Facilities"><a href = "/gym_management/facilities.php">Facilities</a></li>
                    <li id = "Trainers"><a href = "/gym_management/trainers.php">Our trainers</a></li>
                    <li id = "Achievements"><a href = "/gym_management/achievements.php">Achievements</a></li>
                    <li id = "Gallery"><a href = "/gym_management/gallery.php">Gallery</a></li>
                    <li id = "Contact"><a href = "/gym_management/contact.php">Contact</a></li>
                </ul>
                <ul class = "nav navbar-nav navbar-right">
                    <?php
                      session_start();
                      if(!isset($_SESSION['uid'])) {

                        echo '<li class = "dropdown"><a class = "dropdown-toggle" data-toggle = "dropdown"><span class = "glyphicon glyphicon-user"></span> Sign Up<span class = "caret"></span></a>
                          <ul class = "dropdown-menu" style = "text-align: center;">
                            <li><a href = "/gym_management/signup/signup_client.php">Join us</a></li>
                            <li><a href = "/gym_management/signup/signup_trainer.php">Join as trainer</a></li>
                          </ul>
                        </li>
                        ';
                        echo '
                        <li class = "dropdown"><a class = "dropdown-toggle" data-toggle = "dropdown"><span class = "glyphicon glyphicon-log-in"></span> Login<span class="caret"></span></a>
                          <ul class = "dropdown-menu" style = "text-align: center;">
                            <li><a href = "/gym_management/login/login.php">Customer</a></li>
                            <li><a href = "/gym_management/login/login.php">Trainer</a></li>
                            <li><a href = "/gym_management/login/login_admin.php">Admin</a></li>
                          </ul>
                        </li>
                        ';
                      }
                      else if($_SESSION['type'] == "client") {
                        echo '
                          <li class = "dropdown"><a class = "dropdown-toggle" data-toggle = "dropdown"><span class = "glyphicon glyphicon-user"></span> Account<span class="caret"></span></a>
                          <ul class = "dropdown-menu" style = "text-align: center;">
                            <li><a href = "/gym_management/client/edit_details.php">Edit details</a></li>
                          </ul>
                        </li>
                        ';
                        echo '
                        <li><a href = "/gym_management/logout/logout.php"><span class = "glyphicon glyphicon-log-out"></span>Logout</a></li>
                        ';
                      }
                      else if($_SESSION['type'] == "admin") {
                        echo '
                          <li class = "dropdown"><a class = "dropdown-toggle" data-toggle = "dropdown"><span class = "glyphicon glyphicon-user"></span> Account<span class="caret"></span></a>
                          <ul class = "dropdown-menu" style = "text-align: center;">
                            <li><a href = "/gym_management/admin/edit_details.php">Edit details</a></li>
                            <li><a href = "/gym_management/admin/create_admin.php">Create admin</a></li>
                          </ul>
                        </li>
                        ';
                        echo '
                        <li><a href = "/gym_management/logout/logout.php"><span class = "glyphicon glyphicon-log-out"></span>Logout</a></li>
                        ';
                      }
                      else {
                        echo '
                        <li><a href = "#"><span class = "glyphicon glyphicon-user">Account</span></a></li>
                        ';
                        echo '
                        <li><a href = "/gym_management/logout/logout.php"><span class = "glyphicon glyphicon-log-out"></span>Logout</a></li>
                        ';
                      }
                    ?>
                </ul>
            </div>
        </nav>
    </body>
</html>
