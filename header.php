<html>
    <head>
        <title> Fitness Freak</title>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1">
        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
        <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>

    </head>
    <body>

        <nav class = "navbar navbar-inverse">
            <div class = "container-fluid">
                <div class = "navbar-header">
                    <a class = "navbar-brand" href = "index.php"> Fitness Freak</a>
                </div>
                <ul class = "nav navbar-nav">
                    <li class = "active"> <a href = "#"> About</a> </li>
                    <li> <a href = "#"> Facilities</a> </li>
                    <li> <a href = "#"> Our trainers</a> </li>
                    <li> <a href = "#"> Achievements</a> </li>
                    <li> <a href = "#"> Gallery</a> </li>
                    <li> <a href = "#"> Contact</a> </li>
                </ul>
                <ul class = "nav navbar-nav navbar-right">
                    <?php
                      session_start();
                      if(!isset($_SESSION['uid'])) {
                        echo '
                        <li> <a href = "signup.php"> <span class = "glyphicon glyphicon-user"> </span> Sign Up</a> </li>
                        <li> <a href = "login.php"> <span class = "glyphicon glyphicon-log-in"> </span> Login</a> </li> ';
                      }
                      else {
                        echo '
                        <li> <a href = "#"> <span class = "glyphicon glyphicon-user"> Account</span> </a> </li>
                        <li> <a href = "login.php"> <span class = "glyphicon glyphicon-log-out"> </span> Logout</a> </li> ';
                      }
                    ?>
                </ul>
            </div>
        </nav>


        <div class = "container" style = "width: 100%; height: 50%;">
            <div id = "myCarousel" class = "carousel slide" data-ride = "carousel">
                <!-- Indicators -->
                <ol class = "carousel-indicators">
                    <li data-target = "#myCarousel" data-slide-to = "0" class = "active"> </li>
                    <li data-target = "#myCarousel" data-slide-to = "1"> </li>
                    <li data-target = "#myCarousel" data-slide-to = "2"> </li>
                </ol>

                <!-- Wrapper for slides -->
                <div class = "carousel-inner" style = "width: 100%; height: 100%;">
                    <div class = "item active" >
                        <img src = "./images/1.jpg" alt = "Los Angeles">
                    </div>

                    <div class = "item">
                        <img src = "./images/2.jpg" alt = "Chicago">
                    </div>

                    <div class = "item">
                        <img src = "./images/3.jpg" alt = "New york">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class = "left carousel-control" href = "#myCarousel" data-slide = "prev">
                    <span class = "glyphicon glyphicon-chevron-left"> </span>
                </a>
                <a class = "right carousel-control" href = "#myCarousel" data-slide = "next">
                    <span class = "glyphicon glyphicon-chevron-right"> </span>
                </a>
            </div>
        </div>
    </body>
</html>
