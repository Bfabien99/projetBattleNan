<?php
$success = false;
if(isset($_POST['connect'])){
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        if(userLogin($email,$password)){
            die('ok');
        }else{
            $success = true;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../css/stylecox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <form action = "" method="post"> 
        <h1> Se Connecter</h1>
        <div class="social-media">

            <p><i class="fa-brands fa-google"></i>  </p>
            <p><i class="fa-brands fa-youtube"></i></p>
            <p><i class="fa-brands fa-facebook"></i></p>
            <p><i class="fa-brands fa-twitter"></i></p>

        </div>
        <p class="choose-email">ou utiliser mon adresse e-mail :</p>

        <div class="input">
            <input type="email" name="email" placeholder="Email" required ="required" autocomplete="off"></br>
            <input type="password" name="password" id="Password" placeholder="Mot de passe" required = "required" autocomplete="off">
        </div>
        <p class="oublier"><a href="#"> Mot de passe oublier</a></p>
        <p class="incription">Je n'ai pas de <span>compte</span>. Je m'en <span class="fa fa"> <a href="formulaire-inscription.php">  créé  </a> </span> un.</p>
        <div align ="center">
            <button type="submit" name="connect">Se connecter</button>
        </div></br>
        <?php if($success):?>
                <h3 style="color:red">Identifiant Incorrect</h3>
            <?php endif;?>
    </form>
</body>
</html>