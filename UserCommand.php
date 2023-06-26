
<?php
    require_once 'header.php';
    require_once 'dbcon.php'
?>
<?php 
    if(!isset($_SESSION['cart'])){
        echo "Your Cart is empty.";
    }else{
        $nb_articles = count($_SESSION['cart']['id']);
        $mysqldatetime = date ("Y/m/d");
        $sql="INSERT INTO purchases(id_user, creationdate, purchasestatus, cost, payed) VALUES (".$_SESSION['id_user'].",'".$mysqldatetime."','Processing',".$_SESSION['totalcost'].",1)";
        $result=mysqli_query($conn,$sql);
        $lastid=mysqli_insert_id($conn);
        for($i = 0; $i < $nb_articles; $i++)
        {
            $sql="select * from products where id_product='".$_SESSION['cart']['id'][$i]."'";
            $result=mysqli_query($conn,$sql);
            $row=mysqli_fetch_assoc($result);
            $sql="INSERT INTO details(id_purchase, id_product, price, location) VALUES (".$lastid.",".$row['id_product'].",".$row['price'].",'".$row['location']."')";
            $result=mysqli_query($conn,$sql);
        }
        unset($_SESSION['cart']);
        if(!isset($_SESSION['cart']))
        {
            $_SESSION['cart'] = array();
            $_SESSION['cart']['id'] = array();
            $_SESSION['cart']['name'] = array();
            $_SESSION['cart']['location'] = array();
            $_SESSION['cart']['price'] = array();
        }
    }
    header('Location: '.$_SERVER["HTTP_REFERER"]);
?>