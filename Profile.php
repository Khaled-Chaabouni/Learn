<?php
    require_once'header.php';
    require_once'dbcon.php';
?>
<html style="background:linear-gradient(75deg ,black, rgb(255,100,0),white 100%);">
    <head>
        <link rel="stylesheet" href="header.css?v=<?php echo time();?>">
        <script src="./app.js"></script>
    </head>
    <body>
        <?php if(isset($_SESSION['email'])){?>
            <div class="Profile">
                <?php if($_SESSION['img']==""){?>
                    <img class="Profile-Picture" src='images/Account/usericon.png' alt='Profile Picture'>
                <?php }else{?>
                    <img class="Profile-Picture" src='<?php echo "images/Account/".$_SESSION['img'].""?>'>
                <?php }?>
                <div class="Profile-Informations">
                    <?php
                    $q=mysqli_query($conn,"select * from registrations");
                    if($_SESSION['img']==""){
                        ?>
                        <div class="Primg">
                            <img src='images/Account/usericon.png' alt='Profile Picture'><br>
                        </div>
                    <?php }else{?>
                        <div class="Primg">
                            <img src='<?php echo "images/Account/".$_SESSION['img'].""?>'>
                        </div>
                    <?php }?>
                    <h2><?php echo $_SESSION['firstname']." ".$_SESSION['lastname']; ?><br></h2>
                    <h4><?php echo $_SESSION['email']; ?></h4>
                    <h4><?php echo $_SESSION['password']; ?></h4>
                    <?php echo $_SESSION['phonenumber']; ?><br>
                    <?php echo $_SESSION['birthday']; ?><br>
                    <?php echo $_SESSION['gender']; ?>
                </div>
            </div>
        <?php }else{header('location: http://localhost/projects/LearnAccount/LearnAccount.php');}?>
    </body>
</html>