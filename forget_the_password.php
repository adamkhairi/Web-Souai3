<?php
session_start();
require("connexion.php");
include("navbar.php");
?>    
<div class="signin-content">
<div class="signin-image">
    <figure><img src="src/img/signin-image.jpg" alt="sing up image"></figure>
  
</div>

<div class="signin-form">
    <h2 class="form-title">Mode passe Oublie</h2>
    <form method="POST" action="forgetPasseword.php" class="register-form" id="login-form">
        <div class="form-group">
            <label for="your_email"><i class="zmdi zmdi-account material-icons-name"></i></label>
            <input type="email" name="email" id="your_email" placeholder="Votre Email"/>
        </div>
        <input type="text" name="userType" hidden id="userType" value="">
        <div class="form-group form-button">
            <input type="submit" name="send_email" id="signin" class="form-submit" value="Connexion"/>
        </div>
    </form>
</div>
</div>


