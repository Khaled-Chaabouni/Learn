<html>
    <head>
        <link rel="stylesheet" href="header.css?v=<?php echo time();?>">
    </head>
    <body class="upd" style="overflow: hidden;">
        <?php
            require_once 'dbcon.php';
            require_once 'header.php';
            //Preparing the SQL Query :
            $sql="select * from products where id_product='".$_GET['id']."'";
            $result=mysqli_query($conn,$sql);
            $count=mysqli_num_rows($result);
            $row=mysqli_fetch_assoc($result);
        ?>    
            <div class="articles">
                <div class="editem">
                    <form id="upditem" action="http://localhost/Projects/LearnAccount/Saveproduct.php?id=<?php echo $row['id_product']?>" method="POST" enctype="multipart/form-data">
                        <h1 style="text-shadow:black 1px 1px 5px"><?php echo $row['id_product']?></h1>
                        <img id="productimg" src='<?php echo "images/products/".$row['img_course'].""?>'>
                        <input type="text" id="name" name="name" value="<?php echo $row['name']?>" placeholder="<?php echo $row['name']?>" required>
                        <input type="text" id="price" name="price" value="<?php echo $row['price']?>" placeholder="<?php echo $row['price'].' DT'?>"required>
                        <input type="text" id="duration" name="duration" value="<?php echo $row['duration']?>" placeholder="<?php echo $row['duration'].' Days'?>"required><br>
                        <?php if($row['location']=='Online'){?>
                            <input type="radio" id="location" name="location" value="Online" checked>
                            <label for="location">Online</label>
                            <input type="radio" id="location" name="location" value="Office">
                            <label for="location">Office</label>
                        <?php }if($row['location']=='Office'){?>
                            <input type="radio" id="location" name="location" value="Online">
                            <label for="location">Online</label>
                            <input type="radio" id="location" name="location" value="Office" checked>
                            <label for="location">Office</label>
                        <?php }?><br>
                        <input type="submit" id="save" name="submit" value="Save" class="btn btn-primary">  
                    </form> 
                    <form id="delitem" action="http://localhost/Projects/LearnAccount/Deleteproduct.php?id=<?php echo $row['id_product']?>" method="POST" enctype="multipart/form-data">      
                        <input type="submit" id="delete" name="submit" value="Delete" class="btn btn-primary"> 
                    </form>
                </div>
                <img id="prodpic" src='<?php echo "images/products/".$row['img_course'].""?>'>
            </div>  
    </body>
</html>