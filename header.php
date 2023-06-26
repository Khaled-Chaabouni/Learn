<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title PROJET FEDEREE></title>
        <link rel="stylesheet" href="Header.css?v=<?php echo time(); ?>">
        <script src="./app.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Work+Sans:400,700" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Rock+Salt&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="logo">
            <a href="http://localhost/Projects/LearnAccount/LearnHome.php"><h1>Learn</h1></a>
        </div>
        <div class="navbar">  
            <?php if ($_SESSION['lgdin']):?>
                <nav class="menu"style="right:0px">
                    <ul>
                        <li><button onclick="window.location.href='LearnHome.php'">Home</button></li>
                        <li><button onclick="window.location.href='LearnAbout.php'">About</button></li>
                        <li><button onclick="window.location.href='LearnShop.php'">Shop</button></li>
                        <li><button onclick="window.location.href='LearnContact.php'">Contact</button></li>
                        <?php 
                            $nbproducts= count($_SESSION['cart']['id']);
                        ?>
                        <li><button style="cursor:default;" id="user"><?php echo $_SESSION['firstname']?> <img id="Basket" src="images/OrangeCart.png" width="20px" height="20px"><div style="font-size:12px;color:orange;font-weight: bold;"><?php echo"(".$nbproducts.")"?></div></button>
                            <ul id="UserMenu">
                                <li><button onclick="window.location.href='Profile.php'">Profile</button></li>
                                <?php if($_SESSION['admin']==1):?>
                                    <li><button onclick="window.location.href='Product.php'">Product</button></li>
                                <?php else:?>
                                    <li><button onclick="window.location.href='UserCart.php'">Cart</button></li>
                                <?php endif;?>
                                <li><button onclick="window.location.href='Logout.php'">Disconnect</button></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            <?php endif;?>
            <?php if(!($_SESSION['lgdin'])):?>
                <nav class="menu">
                    <ul>
                        <li><button onclick="window.location.href='LearnHome.php'">Home</button></li>
                        <li><button onclick="window.location.href='LearnAbout.php'">About</button></li>
                        <li><button onclick="window.location.href='LearnShop.php'">Shop</button></li>
                        <li><button onclick="window.location.href='LearnContact.php'">Contact</button></li>
                        <li><button onclick="window.location.href='LearnAccount.php'">Account<img id="Basket" src="images/OrangeCart.png" width="20px" height="20px"></button></li>
                    </ul>
                </nav>
            <?php endif;?>  
        </div>
    </body>
</html>