<?php
function getConnexion()
{
    return new PDO("mysql:host=localhost;dbname=clando;charset=utf8", "root", "");
}

function getAllUsers()
{
    $pdo = getConnexion();
    $req = "SELECT * FROM users";

    $stmt = $pdo->prepare($req);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $users;
}

function insertUser($nom,$prenoms,$contact,$date_naissance,$email,$pseudo,$pass)
{
    $pdo = getConnexion();
    $req = "INSERT INTO users(nom,prenoms,contact,date_naissance,email,pseudo,password) VALUES(
        :nom,:prenoms,:contact,:date_naissance,:email,:pseudo,:password)";
    $query = $pdo->prepare($req);
    $insert = $query->execute([
        'nom' => $nom,
        'prenoms' => $prenoms,
        'contact' => $contact,
        'date_naissance' => $date_naissance,
        'email' => $email,
        'pseudo' => $pseudo,
        'password' => $pass
    ]);
    if ($insert) {
        return true;
    } else {
        return false;
    }
}

function userLogin($email, $pass){
    $pdo = getConnexion();
    $req = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";

    $stmt = $pdo->prepare($req);
    $stmt->execute();
    $users = $stmt->fetch(PDO::FETCH_ASSOC);
    return $users;
}

//Table finance
function postFinance($userId,$domaine,$description,$somme)
{
    $pdo = getConnexion();
    $req = "INSERT INTO finance(userId,domaine,description,somme) VALUES(
        :userId,:domaine,:description,:somme)";
    $query = $pdo->prepare($req);
    $insert = $query->execute([
        'userId' => $userId,
        'domaine' => $domaine,
        'description' => $description,
        'somme' => $somme,
    ]);
    if ($insert) {
        return true;
    } else {
        return false;
    }
}

//Table job
function postJob()
{
}
