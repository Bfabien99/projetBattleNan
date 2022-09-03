<?php
include('function.php');

if(isset($_POST['insert'])){
    if(!empty($_POST['nom']) && !empty($_POST['prenoms']) && !empty($_POST['contact']) && !empty($_POST['date_naissance']) && !empty($_POST['email']) && !empty($_POST['pseudo']) && !empty($_POST['password'])){
        $nom = $_POST['nom'];
        $prenoms = $_POST['prenoms'];
        $contact =$_POST['contact'];
        $date_naissance =$_POST['date_naissance'];
        $email = $_POST['email'];
        $pseudo = $_POST['pseudo'];
        $password = $_POST['password'];
        if(insertUser($nom,$prenoms,$contact,$date_naissance,$email,$pseudo,$password)){
            die("ok");
        }else{
            die("no");
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
    <title>Inscription</title>
    <link rel="stylesheet" href="../css/stylecox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  
    <form action = "" method="post"> 
        <h1> Inscriptions</h1>
        <div class="social-media">

            <p><i class="fa-brands fa-google"></i>  </p>
            <p><i class="fa-brands fa-youtube"></i></p>
            <p><i class="fa-brands fa-facebook"></i></p>
            <p><i class="fa-brands fa-twitter"></i></p>

        </div>
        <p class="choose-email">Remplissez les Champs :</p>

        <div class="input">
        <input type="text" name="nom" class="form-control" placeholder="Pom" required="required" autocomplete="off"></br>
        <input type="text" name="prenoms" class="form-control" placeholder="Prenom" required="required" autocomplete="off"></br>

            <input type="text" name="pseudo" placeholder="Pseudo" required="required" autocomplete="off"></br>
            <input type="date" name="date_naissance" placeholder="Date de naissance" required="required" autocomplete="off"></br>
            <input type="email" name="email" placeholder="email" required="required" autocomplete="off"></br>
            <input type="text" name="contact" placeholder="contact" required="required" autocomplete="off"></br>
            <input type="password" name="password" id="Password" placeholder="Mot de passe" required = "required" autocomplete="off"></br>
            
            
            
           
        </div>
        <div align="center" class="conbtn">
            <button type="submit" class="btn-1"><a href="formulaire.php"> Aller à la Connexion </a></button>  
            <button type="submit" name="insert" class="btn-2">Valider</button>
        </div></br>
    </form>
</body>
</html>