<?php
require_once 'MenuController.php';
?>

<link rel="stylesheet" href="css/sy.css">
<link rel="stylesheet" href="style.css">


<div class="navigation">
    <a class="links" href="../signUp/signUp.php">Sign up</a>
    <a class="links" href="../login/logIn.php">My Account</a>
    <a href="../products/shop.php">Products</a>
    <a href="../aboutUs/aboutus.html">About Us</a>
    <a href="../project.html">Home</a>              
</div>


<div>
    <?php
    $products = new MenuController;
    $all = $products->readData();
    for($i = 0; $i < count($all); $i++) {
        echo 
        '<div class="gallery">
            <div class="content">
                <img id="img" src="' .$all[$i] ['menu_image'].'"> 
                <h3 id="h3">' .$all[$i]['menu_title'].'</h3>
                <p>'.$all[$i]['menu_body'].'</p>
                <br>
                <h6>$' .$all[$i]['menu_price'].'</h6>
                <a href="#"><button class="buy">Buy Now</button> </a>
            </div>
        </div>';
    }
    ?>
</div>

</body>
</html>