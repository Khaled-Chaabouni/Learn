
<?php
    require_once 'dbcon.php';
    require_once 'header.php';
    //Preparing the SQL Query :   
    $sql="update products set deleted=1 where id_product='".$_GET['id']."'";
    mysqli_query($conn,$sql);
    header('location: http://localhost/projects/LearnAccount/LearnShop.php');
?>