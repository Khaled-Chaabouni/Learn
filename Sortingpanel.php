<?php require_once'dbcon.php'?>
<?php if(isset($_SESSION['total']) && strpos($_SERVER['REQUEST_URI'],'UserCart')>0){?>
    <div class="sorts">
        <form id="sorting" action="http://localhost/Projects/LearnAccount/UserCart.php" method="GET">
            <?php $_SESSION['Sorted']=1;?>
            <button id="sortby" style="background:rgb(255,100,0);cursor:pointer;">Cart</button><br><br>
            <button id="sortby">Sort by</button>
            <ul type="submit" style="list-style-type: none;">
                <li ><button id="byname" name="sortby" value="name">Name</button></li>
                <li ><button id="byduration" name="sortby" value="duration">Duration</button></li>
                <li ><button id="byprice" name="sortby" value="price">Price</button></li>
                <li ><button id="bylocation" name="sortby" value="location">Location</button></li>
                <li ><button id="bydate" name="sortby" value="id_product">Date</button></li>
            </ul>    
        </form>
    </div>
<?php }else{?>
    <div class="sorts" style="list-style-type: none;">
        <form id="sorting" action="http://localhost/Projects/LearnAccount/LearnShop.php" method="GET">
            <button id="sortby">Sort by</button>
            <ul type="submit">
                <li ><button id="byname" name="sortby" value="name">Name</button></li>
                <li ><button id="byduration" name="sortby" value="duration">Duration</button></li>
                <li ><button id="byprice" name="sortby" value="price">Price</button></li>
                <li ><button id="bylocation" name="sortby" value="location">Location</button></li>
                <li ><button id="bydate" name="sortby" value="id_product">Date</button></li>
            </ul>    
        </form>
    </div>
<?php }?>