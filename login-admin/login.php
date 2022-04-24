<?php 
session_start();
if(isset($_SESSION['username'])){
 header("<location:../project.php");
}else{


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
        <h1>Log In</h1>
        <input type="text" name="username"> <br> <br>
        <input type="password" name="password"> <br> <br>

        <input type="submit" name="loginBtn" value="Login">
    </form>
    <?php 
    require_once 'loginValidate.php';
    ?>
    
</body>
</html>

<?php 
}
?>