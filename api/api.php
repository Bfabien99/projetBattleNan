<?php
function getConnexion()
{
    return new PDO("mysql:host=localhost;dbname=clando;charset=utf8","root","");
}

function sendJSON($infos)
{   
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json");
    echo json_encode($infos,JSON_UNESCAPED_UNICODE);
}

function getAllUser()
{
    $pdo = getConnexion();
    $req = "SELECT * FROM users";

    $stmt = $pdo->prepare($req);
    $stmt->execute();
    $maisons = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    sendJSON($maisons);
}