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
  
    <form action ="" id="newForm" method="post"> 
        <h1> Inscriptions</h1>
        <div class="social-media">

            <p><i class="fa-brands fa-google"></i>  </p>
            <p><i class="fa-brands fa-youtube"></i></p>
            <p><i class="fa-brands fa-facebook"></i></p>
            <p><i class="fa-brands fa-twitter"></i></p>

        </div>
        <p class="choose-email">Remplissez les Champs :</p>

        <div class="input">
        <input type="text" id="nom" name="nom" class="form-control" placeholder="nom" required="required" autocomplete="off"></br>
        <input type="text" id="prenoms" name="prenoms" class="form-control" placeholder="Prenom" required="required" autocomplete="off"></br>

            <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo" required="required" autocomplete="off"></br>
            <input type="date" id="date_naissance" name="date_naissance" placeholder="Date de naissance" required="required" autocomplete="off"></br>
            <input type="email" id="email" name="email" placeholder="email" required="required" autocomplete="off"></br>
            <input type="text" id="contact" name="contact" placeholder="contact" required="required" autocomplete="off"></br>
            <input type="password" id="password" name="password" id="Password" placeholder="Mot de passe" required = "required" autocomplete="off"></br>
            
            
            
           
        </div>
        <div align="center" class="conbtn">
            <button class="btn-1"><a href="formulaire.php"> Aller à la Connexion </a></button>  
            <button type="submit" name="insert" class="btn-2">Valider</button>
        </div></br>
        <div id="msg">

        </div>
    </form>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {

        $('#newForm').on('submit', function(e) {
            e.preventDefault();
            var nom = $('#nom').val();
            var prenoms = $('#prenoms').val();
            var contact = $('#contact').val();
            var date_naissance = $('#date_naissance').val();
            var email = $('#email').val();
            var pseudo = $('#pseudo').val();
            var password = $('#password').val();

            $.ajax({
                url: 'insert.php',
                type: 'POST',
                data: {
                    insert: true,
                    nom: nom,
                    prenoms: prenoms,
                    contact: contact,
                    date_naissance: date_naissance,
                    email: email,
                    pseudo: pseudo,
                    password: password
                },
                success: function(data) {
                    if (data) {
                        $('#msg').html(data);
                    }
                }
            });

        });

    });
</script>