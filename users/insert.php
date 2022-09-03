<?php
include('../api/api.php');
if(isset($_POST['insert'])){
    if(!empty($_POST['nom']) && !empty($_POST['prenoms']) && !empty($_POST['contact']) && !empty($_POST['date_naissance']) && !empty($_POST['email']) && !empty($_POST['pseudo']) && !empty($_POST['password'])){
        $nom = str_replace(' ','_',$_POST['nom']);
        $prenoms = str_replace(' ','_',$_POST['prenoms']);
        $contact =str_replace(' ','_',$_POST['contact']);
        $date_naissance =str_replace(' ','_',$_POST['date_naissance']);
        $email =str_replace(' ','_',$_POST['email']);
        $pseudo =str_replace(' ','_',$_POST['pseudo']);
        $password = str_replace(' ','_',$_POST['password']);
        $insert = file_get_contents("http://localhost/projetBattleNan/api/insert/$nom/$prenoms/$contact/$date_naissance/$email/$pseudo/$password");
    }
}

if(isset($_POST['update'])){
    if(!empty($_POST['id']) && !empty($_POST['prenoms']) && !empty($_POST['contact']) && !empty($_POST['date_naissance']) && !empty($_POST['email']) && !empty($_POST['pseudo']) && !empty($_POST['password'])){

    }
}