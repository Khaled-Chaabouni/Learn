
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="header.css?v=<?php echo time(); ?>">
    </head>
    <body class="Landing">
        <?php
            require_once 'header.php';
        ?>
        <audio controls autoplay loop style="display: none;">
            <source src="http://localhost/projects/LearnAccount/musics/backgroundmusic.mp3" type="audio/mpeg"></source>
            <source src="http://localhost/projects/LearnAccount/musics/backgroundmusic.ogg" type="audio/ogg"></source>
        </audio>
        <video id="bgvid" style="width:85.5em;" muted="muted" loop="loop" preload="none" controlslist="nodownload" autoplay playsinline="" class="product-video">
            <source src="videos/codingwithcoffee.mp4" type="video/mp4">
        </video>
        <div class="Home">
            <h2>Welcome ► Learn!</h2>
            <div class="quickdesc">
                <h2 style="font-weight: bold;">
                Study hard what interests you the most in the most undisciplined, irreverent and original manner possible.
                That's when Learning takes place!
                </h2>
                <p id="parg">
                    Your journey is about to Begin! Happy Learning.
                </p><br>
                <a href="LearnShop.php" class="explorebtn">Explore Now &#8594;</a>
            </div>
        </div>
    </body>
</html>