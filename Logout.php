<?php
    session_start();
    unset($_SESSION['firstname']);
    unset($_SESSION['lastname']);
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    unset($_SESSION['phonenumber']);
    unset($_SESSION['birthday']);
    unset($_SESSION['gender']);
    unset($_SESSION['img']);
    unset($_SESSION['id_user']);
    unset($_SESSION['cart']);
    unset($_SESSION['admin']);
    unset($_SESSION['verif']);
    $_SESSION['lgdin'] = false;
    header('Location: '.$_SERVER["HTTP_REFERER"]);
?>