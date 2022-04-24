
<?php
require_once 'MenuController.php';

$menu = new MenuController;
if(isset($_POST['submit'])){
    $menu->insert($_POST);
}


?>

<div id="divi">
    <form method="POST">
        Image:
        <input id="first" type="file" name="image">
        <br> <br>
        Title:
        <input id="title"type="text" name="title">
        <br> <br>
        Content:
        <textarea id="content" name="body" cols="30" rows="10"></textarea>
        <br><br>
        Price:
        <input id="number" type="number" name="price">
        <br>
        <br>
        <input id="buton" type="submit" name="submit" value="Save">
    </form>
</div>
<style>
body{
    background-color: #0e309e71;

}
#title{
    background-color: #0e309e71; 
    border-radius: 5px;
}
#content{
    background-color: #0e309e71; 
    border-radius: 11px;
}
#number{
    background-color: #0e309e71; 
    border-radius: 5px;
}
#divi{
    margin-top: 80px;
margin-left: 520px;
border-radius: 5px;
border-right: 150%;
 text-align: center;
 background-color: white;
 width: 270px;

}

#first{
    
    border-radius: 5px;

}
#buton{
    border-radius: 4px;
    width: 70px;
    right: 5%;
    background-color: #0e309e71; 
}
</style>
