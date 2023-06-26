<?php
    require_once 'dbcon.php';
    require_once 'header.php';
    $_SESSION['img_product']=$_FILES['img_product']['name'];
    move_uploaded_file($_FILES['img_product']['tmp_name'],"images/products/".$_FILES['img_product']['name']);
    //Preparing the SQL Query : 
    $sql="INSERT INTO products(id_product,price,name,duration,location,img_course) VALUES (".$_POST['id_product'].",".$_POST['price'].",'".$_POST['name']."',".$_POST['duration'].",'".$_POST['location']."','".$_SESSION['img_product']."')";
    mysqli_query($conn,$sql);
    header('location: http://localhost/projects/LearnAccount/LearnShop.php');
?>