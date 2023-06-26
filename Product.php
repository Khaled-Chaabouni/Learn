<html>
    <head>
        <link rel="stylesheet" href="header.css?v=<?php echo time();?>">
    </head>
    <body>
        <?php
            include_once 'header.php';
            require_once 'dbcon.php';
        ?>
        <?php
            //Database Connection : */
            require_once 'dbcon.php';
            //Preparing the SQL Query :
            $sql="select * from products where deleted=0";
            $result=mysqli_query($conn,$sql);
            $count=mysqli_num_rows($result);
            //Setting Session Variables Gathered from Database :
            $row=mysqli_fetch_assoc($result);
            $_SESSION['id_product']=$row['id_product'];
            $_SESSION['price']=$row['price'];
            $_SESSION['name']=$row['name'];
            $_SESSION['duration']=$row['duration'];
            $_SESSION['location']=$row['location'];
            $_SESSION['img_course']=@$row['img_course'];
        ?>
        
        <div class="edpage" style="overflow:hidden;">
            <video style="position: fixed; left:0;top: -150px; width: 100%; height: 175%; z-index: -10;" id="bgvid" muted="muted" loop="loop" preload="none" controlslist="nodownload" autoplay playsinline="" class="product-video">
                <source src="videos/addingproduct.mp4" type="video/mp4">
            </video>
            <form id="CreatePr" action="http://localhost/Projects/LearnAccount/ProductManagement.php" method="POST" enctype="multipart/form-data">
                <?php if ($count > 0) {?>     
                    <h1 style="color:white;background-color:black;">Add Course</h1><br>                           
                    <input type="number" id="id_product" name="id_product"  placeholder="Product ID" required autofocus><br>
                    <input type="text" id="name" name="name" placeholder="Name" required autofocus><br>
                    <input type="number" id="price" name="price" placeholder="Price" required autofocus><br>
                    <input type="number" id="duration" name="duration" placeholder="Duration"  required autofocus><br>
                    <div>
                        <input type="radio" id="Online" name="location" value="Online">
                        <label for="Online">Online</label>
                        <input type="radio" id="Office" name="location" value="Office">
                        <label for="Office">Office</label>
                    </div>  
                    <input type="file" id="img_product" name="img_product"  required><br>                         
                    <input type="submit" id="Add" name="ADD" value=" Add ">
                <?php } ?>
            </form>
        </div>         
    </body>
</html>