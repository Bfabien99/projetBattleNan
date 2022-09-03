<form action="" id="newForm" method="post">
    <input type="text" name="nom" placeholder="nom" id="nom">
    <input type="text" name="prenoms" placeholder="prenoms" id="prenoms">
    <input type="number" name="contact" placeholder="contact" id="contact">
    <input type="date" name="date_naissance" placeholder="date_naissance" id="date_naissance">
    <input type="text" name="email" placeholder="email" id="email">
    <input type="text" name="pseudo" placeholder="pseudo" id="pseudo">
    <input type="text" name="password" placeholder="password" id="password">
    <button type="submit">Soumetre</button>
</form>
<div id="msg">
    
</div>
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