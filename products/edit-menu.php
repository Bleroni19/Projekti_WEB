<?php
require_once 'MenuController.php';
if(isset($_GET['id'])){
    $menuId = $_GET['id'];
}

$menu = new MenuController;
$currenMenu = $menu->edit($menuId);

if(isset($_POST['submit'])) {
    $menu -> update($_POST, $menuId);
}


?>

<form action="" method="post" name="myform">
     Image:
     <input type="file" name="image" value="<?php echo $currenMenu['menu_image'];?>">
     <br>
     Title:
     <input type="text" name="title" value="<?php echo $currenMenu['menu_title'];?>">
     <br>
     Body:
     <input type="text" name="body" value="<?php echo $currenMenu['menu_body'];?>">
     <br>
     Price:
     <input type="number" name="price" value="<?php echo $currenMenu['menu_price'];?>">
     <br>
     <input type="submit" name="submit" value="update" >
</form>