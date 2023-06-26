<?php
    //Datebase Connection :
    require_once 'dbcon.php';
    //--------------------------------------------------------
    session_start();
    $_SESSION['firstname']=$_POST['firstname'];
    $_SESSION['lastname']=$_POST['lastname'];
    $_SESSION['email']=$_POST['email'];
    $_SESSION['password']=$_POST['password'];
    $_SESSION['phonenumber']=$_POST['number'];
    $_SESSION['birthday']=$_POST['birthday'];
    $_SESSION['gender']=$_POST['gender'];
    $_SESSION['img']=$_FILES['profileimg']['name'];
    $_SESSION['admin']=0;
    if(!isset($_SESSION['cart']))
      {
        $_SESSION['cart'] = array();
        $_SESSION['cart']['id'] = array();
        $_SESSION['cart']['name'] = array();
        $_SESSION['cart']['location'] = array();
        $_SESSION['cart']['price'] = array();
      }
    if(isset($_FILES['profileimg']))
    {
        $_SESSION['primg']=$_FILES['profileimg'];
        move_uploaded_file($_FILES['profileimg']['tmp_name'],"images/Account/".$_FILES['profileimg']['name']);
        $q=mysqli_query($conn,"UPDATE registrations SET img='".$_FILES['profileimg']['name']."' WHERE email = '".$_SESSION['email']."'");
    }
    //--------------------------------------------------------
    $_SESSION['lgdin'] = false;
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        $stmt=$conn->prepare("insert into registrations(firstname,lastname,email,password,number,birthday,gender,img) values(?,?,?,?,?,?,?,?)");
        $stmt->bind_param('ssssisss',$_SESSION['firstname'],$_SESSION['lastname'],$_SESSION['email'],
        $_SESSION['password'],$_SESSION['phonenumber'],$_SESSION['birthday'],$_SESSION['gender'],$_SESSION['img']);
        $stmt->execute();
        header('Location: http://localhost/projects/LearnAccount/LearnHome.php');
        $stmt->close();
        $_SESSION['lgdin'] = true;
        /* $conn->close(); */
    }
?>
