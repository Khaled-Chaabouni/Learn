
<head>
    <link rel="stylesheet" href="header.css?v=<?php echo time(); ?>">
</head>
<?php
    //Database Connection : */
    require_once 'dbcon.php';

    if(isset($_SESSION['admin'])){
        if($_SESSION['admin']==1){
            ?>
            <form id="searchform" action="LearnShop.php" method="POST">
                <input id="searchquery" type="text"  id="prname" name="prname" placeholder="Search" required autofocus>
                <button id="searchbutton" type="submit">Search</button>
            </form>
            <?php 
        }else{
            if(isset($_GET['prname'])){
                if(strpos($_SERVER['REQUEST_URI'],'UserCart')>0){?>
                    <form id="searchform" action="http://localhost/Projects/LearnAccount/UserCart.php?name=".<?php echo $_GET['prname']?> method="GET">
                        <input id="searchquery" type="text" id="prname" name="prname" placeholder="Search item in cart" required autofocus>
                        <button id="searchbutton" type="submit">Search</button>
                    </form>
                <?php }else{?>
                    <form id="searchform" action="http://localhost/Projects/LearnAccount/LearnShop.php?name=".<?php echo $_GET['prname']?> method="GET">
                        <input id="searchquery" type="text" id="prname" name="prname" placeholder="Search" required autofocus>
                        <button id="searchbutton" type="submit">Search</button>
                    </form>
                <?php }?>
            <?php 
            }else{
                if(strpos($_SERVER['REQUEST_URI'],'UserCart')>0){?>
                    <form id="searchform" action="http://localhost/Projects/LearnAccount/UserCart.php" method="GET">
                        <input id="searchquery" type="text" id="prname" name="prname" placeholder="Search item in cart" required autofocus>
                        <button id="searchbutton" type="submit">Search</button>
                    </form>
                <?php }else{?>
                    <form id="searchform" action="http://localhost/Projects/LearnAccount/LearnShop.php" method="GET">
                        <input id="searchquery" type="text" id="prname" name="prname" placeholder="Search" required autofocus>
                        <button id="searchbutton" type="submit">Search</button>
                    </form>
                <?php }?>
                <?php 
            }
        }
    }else{
        if(isset($_GET['prname'])){
            if(strpos($_SERVER['REQUEST_URI'],'UserCart')>0){?>
                <form id="searchform" action="http://localhost/Projects/LearnAccount/UserCart.php?name=".<?php echo $_GET['prname']?> method="GET">
                    <input id="searchquery" type="text" id="prname" name="prname" placeholder="Search" required autofocus>
                    <button id="searchbutton" type="submit">Search</button>
                </form>
            <?php }else{?>
                <form id="searchform" action="http://localhost/Projects/LearnAccount/LearnShop.php?name=".<?php echo $_GET['prname']?> method="GET">
                    <input id="searchquery" type="text" id="prname" name="prname" placeholder="Search" required autofocus>
                    <button id="searchbutton" type="submit">Search</button>
                </form>
            <?php }?>
        <?php 
        }else{
            if(strpos($_SERVER['REQUEST_URI'],'UserCart')>0){?>
                <form id="searchform" action="http://localhost/Projects/LearnAccount/UserCart.php" method="GET">
                    <input id="searchquery" type="text" id="prname" name="prname" placeholder="Search" required autofocus>
                    <button id="searchbutton" type="submit">Search</button>
                </form>
            <?php }else{?>
                <form id="searchform" action="http://localhost/Projects/LearnAccount/LearnShop.php" method="GET">
                    <input id="searchquery" type="text" id="prname" name="prname" placeholder="Search" required autofocus>
                    <button id="searchbutton" type="submit">Search</button>
                </form>
            <?php }
        }
    }
?>
