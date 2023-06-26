
<?php
  require_once 'dbcon.php';
  require_once 'header.php';
    /* Subdivision du cart */
  if(!isset($_SESSION['cart']))
  {
    $_SESSION['cart'] = array();
    $_SESSION['cart']['id'] = array();
    $_SESSION['cart']['name'] = array();
    $_SESSION['cart']['location'] = array();
    $_SESSION['cart']['price'] = array();
  }
  if(isset($_GET['id']))
  {
    
        del_article($_GET['id']);
      if(!del_article($_GET['id'])){
        
        echo "Article successfully deleted!";
      }else{
        echo"Article not deleted haha !";
      }
    }
  header('Location: '.$_SERVER["HTTP_REFERER"]);
?>
<!-- Our function : -->
<?php 
function del_article($ref_article)
{
    $deletion = false;
    /* création d'un tableau temporaire de stockage des articles */
    $cart_tmp = array("id"=>array(),"name"=>array(),"location"=>array(),"price"=>array());
    /* Comptage des articles du cart */
    $nb_articles = count($_SESSION['cart']['id']);
    /* Transfert du cart dans le cart temporaire */
    for($i = 0; $i < $nb_articles; $i++)
    {
        /* On transfère tout sauf l'article à supprimer */
        if($_SESSION['cart']['id'][$i] != $ref_article)
        {
            array_push($cart_tmp['id'],$_SESSION['cart']['id'][$i]);
            array_push($cart_tmp['name'],$_SESSION['cart']['name'][$i]);
            array_push($cart_tmp['location'],$_SESSION['cart']['location'][$i]);
            array_push($cart_tmp['price'],$_SESSION['cart']['price'][$i]);
        }
    }
    /* Le transfert est terminé, on ré-initialise le cart */
    $_SESSION['cart'] = $cart_tmp;
    /* Option : on peut maintenant supprimer notre cart temporaire: */
    unset($cart_tmp);
    $deletion = true;
    return $deletion;
}
?>
