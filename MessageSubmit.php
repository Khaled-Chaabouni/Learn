<?php 
include_once'dbcon.php';
include_once'header.php';
//Preparing the SQL Query :
if(isset($_SESSION['id_user'])){
    $sql="INSERT INTO contact(firstname, lastname, country, text) VALUES ('".$_SESSION['id_user']."/".$_GET['firstname']."','".$_GET['lastname']."','".$_GET['country']."','".$_GET['text']."')";
    mysqli_query($conn,$sql);
}else{
    $sql="INSERT INTO contact(firstname, lastname, country, text) VALUES ('0/".$_GET['firstname']."','".$_GET['lastname']."','".$_GET['country']."','".$_GET['text']."')";
    mysqli_query($conn,$sql);
}
$_SESSION['verif']=1;
header('Location: http://localhost/Projects/LearnAccount/LearnContact.php');
?>
