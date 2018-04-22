<?php
    require('includes/header.php');
?>

<div class = "container" style = "width: 100%; height: 50%;">
    <div id = "myCarousel" class = "carousel slide" data-ride = "carousel">
        <!-- Indicators -->
        <ol class = "carousel-indicators">
            <li data-target = "#myCarousel" data-slide-to = "0" class = "active"></li>
            <li data-target = "#myCarousel" data-slide-to = "1"></li>
            <li data-target = "#myCarousel" data-slide-to = "2"></li>
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
            <span class = "glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class = "right carousel-control" href = "#myCarousel" data-slide = "next">
            <span class = "glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
