
<?php
    require_once 'dbcon.php';
    require_once 'header.php';
    //Preparing the SQL Query :
    $sql="UPDATE products SET price=".$_POST['price'].",name='".$_POST['name']."',duration=".$_POST['duration'].",location='".$_POST['location']."' where id_product='".$_GET['id']."'";
    mysqli_query($conn,$sql);
    header('Location: http://localhost/Projects/LearnAccount/LearnShop.php');
?>