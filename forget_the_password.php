<?php
require("connexion.php");
include("navbar.php");
?>    
<div class="signin-content">
<div class="signin-image">
    <figure><img src="src/img/signin-image.jpg" alt="sing up image"></figure>
</div>
<div class="signin-form">
    <h2 class="form-title">Mode passe Oublie</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" class="register-form" id="login-form">
        <div class="form-group">
            <label for="your_email"><i class="zmdi zmdi-account material-icons-name"></i></label>
            <input type="email" name="email" id="your_email" placeholder="Votre Email"/>
        </div>
        <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $email = $_POST['email'];
                    if(!empty($email)){
                        $sql = "SELECT * FROM `etudiant` WHERE mailetudiant = '". $email ."';";
                        $result = $conn->query($sql);
                        $reponse = mysqli_fetch_array($result);
                        if(!empty($reponse['mailetudiant'])){
                            $to_email = $email;
                            $subject = "Changer le mot de passe";
                            $body = "Pour changer Le mot de passe clique lien suivant: http://localhost/Web-Souai3/resetNewPassword.php?m=". $email ."";
                            $headers = "From: soutiensway3@gmail.com";
                            if (mail($to_email, $subject, $body, $headers)) {
                                echo "<p class ='text-success m-4'>vérifiez votre email</p>";
                                
                            } else {
                                echo"<p class ='text-danger m-4'>Cet email n'existe pas!</p>";
                            }   
                        }
                        else{
                            echo"<p class ='text-danger m-4'>Cet email n'existe pas!</p>";
                        }
                    } else{
                        header("location: index.php");
                    }
                }
        ?>
        <input type="text" name="userType" hidden id="userType" value="">
        <div class="form-group form-button">
            <input type="submit" name="send_email" id="signin" class="form-submit" value="Connexion"/>
        </div>
    </form>
</div>
</div>


