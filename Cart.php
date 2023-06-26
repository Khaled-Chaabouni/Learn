
<html>
  <head>
  </head>
  <body>
    <?php
      require_once 'dbcon.php';
      require_once 'header.php';
      /* Subdividing Cart*/
      if(!isset($_SESSION['cart']))
      {
        /* $_SESSION['cart'] = array(array()); */
        $_SESSION['cart']['id'] = array();
        $_SESSION['cart']['name'] = array();
        $_SESSION['cart']['location'] = array();
        $_SESSION['cart']['price'] = array();
      }
      if(isset($_GET['id']))
      {
        if($_GET['id']!='')
        {
          $sql="select * from products where id_product='".$_GET['id']."%' ";
          $result=mysqli_query($conn,$sql);
          $row=mysqli_fetch_assoc($result);
        }
        else
        {
          echo "Error : You haven't picked an article yet!";
        }
        if($count=mysqli_num_rows($result)>0)
        {
          verif_cart($row['id_product']);
          if(!verif_cart($row['id_product'])){
            array_push($_SESSION['cart']['id'],$row['id_product']);
            array_push($_SESSION['cart']['name'],$row['name']);
            array_push($_SESSION['cart']['price'],$row['price']);
            array_push($_SESSION['cart']['location'],$row['location']);
            echo "Article successfully added!";
          }else{
            echo"Article already exists!";
          }
        }
      }
      header('Location: '.$_SERVER["HTTP_REFERER"]);
    ?>
    <!-- Our function : -->
    <?php 
    function verif_cart($ref_article)
    {
      /* Initializing our return variable */
      $present = false;
      /* Verifying ID_Products and comparing it with the article's that we wanna verify */
      if( count($_SESSION['cart']['id']) > 0 && array_search($ref_article,$_SESSION['cart']['id']) !== false)
      {
        $present = true;
      }
      return $present;
    } 
    ?>
    
  </body>
</html> 
