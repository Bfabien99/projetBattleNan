<?php
include('includes/header.php');
?>
<?php $users = json_decode(file_get_contents("http://localhost/projetBattleNan/api/users"));var_dump($formations);?>

<?php
include('includes/footer.php');
?>
