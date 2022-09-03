<?php
include('../api/api.php');
if(isset($_POST['insert'])){
    if(!empty($_POST['nom']) && !empty($_POST['prenoms']) && !empty($_POST['contact']) && !empty($_POST['date_naissance']) && !empty($_POST['email']) && !empty($_POST['pseudo']) && !empty($_POST['password'])){
        $nom = escapeString($_POST['nom']);
        $prenoms = escapeString($_POST['prenoms']);
        $contact =escapeString($_POST['contact']);
        $date_naissance =escapeString($_POST['date_naissance']);
        $email =escapeString($_POST['email']);
        $pseudo =escapeString($_POST['pseudo']);
        $password = escapeString($_POST['password']);
        $insert = file_get_contents("http://localhost/projetBattleNan/api/insert/$nom/$prenoms/$contact/$date_naissance/$email/$pseudo/$password");
        if($insert){
            echo "donné enregistré";
        }else{
            echo "donné non enregistré";
        }
    }
}

