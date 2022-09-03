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
        <input type="text" name="prenom" class="form-control" placeholder="Prenom" required="required" autocomplete="off"></br>

            <input type="email" name="pseudo" placeholder="Pseudo" required="required" autocomplete="off"></br>
            <input type="email" name="date_naissance" placeholder="Date de naissance" required="required" autocomplete="off"></br>
            <input type="email" name="email" placeholder="email" required="required" autocomplete="off"></br>
            <input type="password" name="password" id="Password" placeholder="Mot de passe" required = "required" autocomplete="off"></br>
            <input type="password" name="password_retype" id="Password" class= "from-control" placeholder="Re-tapez le mot de pass" required="required" autocomplete="off"></br>
            
            
           
        </div>
        <div align="center" class="conbtn">
            <button type="submit" class="btn-1"><a href="formulaire.php"> Aller à la Connexion </a></button>  
            <button type="submit" class="btn-2" name="submit">Valider</button>
        </div></br>

        <?php
        if(isset($_GET['reg_err']))
        {
            $err = htmlspecialchars($_GET['reg_err']);

            switch($err)
            {
                case 'success' :
                    ?>
                    <div class="alert-succes">
                        <strong>Succès</strong> Inscription réuissie  !  <a href="connexion.php">  Se Connecter</a>
                    </div>
                    <?php
                break;
                case 'password' :
                    ?>
                    <div class="alert-password">
                        <strong>Erreur</strong>Mot de passe différent
                    </div>
                    <?php
                break;
                case 'email' :
                    ?>
                    <div class="alert-email">
                        <strong>Erreur</strong> email non valide 
                    </div>
                    <?php
                break;
                case 'email_length' :
                    ?>
                    <div class=" alert-email_length">
                        <strong>Erreur</strong>email trop long
                    </div>
                    <?php
                break;
                case 'pseudo_length' :
                    ?>
                    <div class="alert-pseudo_length">
                        <strong>Erreur</strong> Pseudo trop long
                    </div>
                    <?php
                break;
                case 'already' :
                    ?>
                    <div class="alert-already">
                        <strong>Erreur</strong>Compte déjà existant
                    </div>
                    <?php
                break;
                    
                    
            }
        }


    ?>
    </form>
</body>
</html>