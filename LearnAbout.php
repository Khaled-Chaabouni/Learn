<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="header.css?v=<?php echo time(); ?>">
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Work+Sans:400,700" rel="stylesheet">
    </head>
    <body style="overflow:hidden;">
        <?php
            require_once 'header.php';
        ?>
        <div class="Aboutpage">
                <div class="aboutcontent" >
                    <h1>
                        About
                    </h1>
                    <br>
                    <h3>
                        &nbsp Learn offers a variety of courses covering a wide majority of the IT domain,
                        mainly, aiming to facilitate access to information with no age restriction.
                        developped by Khaled Chaabouni, a Computer Science student at the High Institute
                        of Informatics AKA ISI.
                    </h3>
                </div>
                <div class="aboutvideo">
                    <video id="bgvid" muted="muted" loop="loop" preload="none" controlslist="nodownload" autoplay playsinline="" class="product-video">
                        <source src="videos/coding.mp4" type="video/mp4">
                    </video>
                </div>
        </div>
    </body>
</html>