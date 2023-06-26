<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="header.css?v=<?php echo time(); ?>">
    </head>
    <body >
        <?php
            require_once 'header.php';
            require_once 'dbcon.php'
        ?>
        <?php   
                if(!isset($_SESSION['cart'])){
                    echo "Empty cart.";
                }else{
                    $nb_articles = count($_SESSION['cart']['id']);
                    /* On va calculer le total par article */
                    if(($nb_articles==0)||(!isset($_SESSION['firstname']))){
                        header('location: http://localhost/projects/LearnAccount/LearnShop.php');
                    }
                    $total=0;
                    
                    require_once 'Searchbar.php';?> 
                <?php 
                
                /* $_SESSION['cart']=sortedby($_SESSION['cart']); */
                ?>

            <div class="cart">
                <div class="articles">
                    <?php for($i = 0; $i < $nb_articles; $i++)
                    {   
                        //Preparing the SQL Query :
                        if(isset($_GET['prname'])){
                            if($_GET['prname']!=''){
                                $sql="select * from products where name like '%".$_GET['prname']."%' and id_product='".$_SESSION['cart']['id'][$i]."' and deleted=0"; 
                            }
                        }else{
                            $sql="select * from products where id_product='".$_SESSION['cart']['id'][$i]."'";
                        }
                        $result=mysqli_query($conn,$sql);
                        $count=mysqli_num_rows($result);
                        $row=mysqli_fetch_assoc($result);?>
                        <?php if (isset($row['name'] )){?>
                            <div class="article">
                                <img id="productimg" src='<?php echo "images/products/".$row['img_course'].""?>'>
                                <h1><?php echo $row['name']?></h1>
                                <h2><?php echo $row['price'].' DT'?></h2>
                                <h2><?php echo $row['duration'].' Days'?></h2>
                                <h2><?php echo 'Location : '.$row['location']?></h2>
                                <form id="addcart" action="http://localhost/Projects/LearnAccount/RemoveCartElement.php?id=<?php echo $row['id_product']?>" method="POST" enctype="multipart/form-data">
                                    <input type="submit" name="submit" value="Delete">
                                </form>
                            </div><?php }
                        $total += $_SESSION['cart']['price'][$i];
                        $_SESSION['total']=$total;
                        $_SESSION['Sorted']=0;
                    }?>
                </div>
                <?php }?>
                <div class="confirmcart">
                    <?php include_once 'Sortingpanel.php'?>
                    
                    <form id="submit" action="http://localhost/Projects/LearnAccount/UserCommand.php" method="POST" enctype="multipart/form-data">
                        <h1>Total = <?php echo $total;$_SESSION['totalcost']=$total; ?></h1>        
                        <input type="submit" id="submit" name="submit" value="Confirm" class="btn btn-primary"><br><br>  
                    </form> 
                </div>     
            </div>        
    </body>
</html>