<?php
require_once 'userController.php';

$userss = new userController;
if(isset($_POST['submit'])){
    $userss->insert($_POST);
}


?>
<link rel="stylesheet" href="login.css">
<div class="wrapper">
    <header>Login Form</header>
    <form action="#" method="post">
      <div class="field email">
        <div class="input-area">
          <input type="text" placeholder="Email Address" name="email">
          <i class="icon fas fa-envelope"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Email can't be blank</div>
      </div>
      <div class="field password">
        <div class="input-area">
          <input type="password" placeholder="Password" name="pass">
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Password can't be blank</div>
      </div>
      <div class="pass-txt"><a href="#">Forgot password?</a></div>
      <input type="submit" name="submit" value="Login">
    </form>
    <div class="sign-txt">Not yet member? <a href="../signUp/signUp.php">Signup now</a></div>
    <div class="sign-txt">Login as Admin? <a href="../login-Admin/login.php">Login as Admin</a></div>
  </div>
  <!-- <script src="login.js"></script> -->