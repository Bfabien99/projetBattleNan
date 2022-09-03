<?php
// define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])? "https" : "http")."://".$_SERVER['HTTP_HOST'].$_SERVER["PHP_SELF"]));

function getConnexion()
{
    return new PDO("mysql:host=localhost;dbname=clando;charset=utf8","root","");
}

// function sendJSON($infos)
// {   
//     header("Access-Control-Allow-Origin: *");
//     header("Content-type: application/json");
//     echo json_encode($infos,JSON_UNESCAPED_UNICODE);
// }

function getAllUsers()
{
    $pdo = getConnexion();
    $req = "SELECT * FROM users";

    $stmt = $pdo->prepare($req);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $users;
}

function insertUser($nom,$prenoms,$contact,$date_naissance,$email,$pseudo,$pass){
    $pdo = getConnexion();
    $query = $pdo->prepare("INSERT INTO users (nom,prenoms,contact,date_naissance,email,pseudo,pass) VALUES ('
    :nom','
    :prenoms','
    :contact','
    :date_naissance','
    :email','
    :pseudo','
    :pass'");
            $insert = $query->execute([
                ':nom' => $nom,
                ':prenoms' => $prenoms,
                ':contact' => $contact,
                ':date_naissance' => $date_naissance,
                ':email' => $email,
                ':pseudo' => $pseudo,
                ':pass' => $pass,
            ]);
            if($insert){
                return true;
            }
            else {
                return false;
            }
}

//Table finance
function postFinance(){

}

//Table job
function postJob(){

}