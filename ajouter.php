<?php
session_start();

if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit();
}
// Connection à la base de donnée
$msg='';
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"galerie photos");
$con->set_charset("utf8");

// Vérification et envois des informations dans la base de données
if (isset($_POST["btn"])) {
    $images = addslashes(file_get_contents($_FILES['images']['tmp_name']));
    $titre = $con->real_escape_string($_POST['title']);
    $description = $con->real_escape_string($_POST['description']);
    $type = $con->real_escape_string($_POST['type']);
    mysqli_query($con, "insert into photo values('','$images','$titre','$description','$type')");
    $msg = 'Votre image a bien été envoyée';
}

// Message d'erreur si jamais l'envoi ne fonctionne pas
else {
    $msg = 'Veuillez rajouter une image !';
}
?>

<?php include "Menu.php"; ?>
<!doctype html>
<html lang="fr">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        input{
            border-radius: 10px 10px;
        }
    </style>
</head>
<link href="test.css" rel="stylesheet" type="text/css">

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="content upload">
    <h2>Upload d'image</h2>
    <br>
    <p><?=$msg?></p>
    <br>
    <form method="post" enctype="multipart/form-data">
        <label for="images">Veuillez choisir une image !</label>
        <input type="file" name="images">
        <label for="titre">Titre</label>
        <input type="text" name="title" id="title">
        <label for="description">Description</label>
        <textarea name="description" id="description"></textarea>
        <select name="type">
            <option>Choisir</option>
            <option>tuiles</option>
            <option>ardoises</option>
            <option>zinc</option>
            <option>bac</option>
            <option>etancheite</option>
            <option>isolation</option>
            <option>puit</option>
            <option>machine</option>
        </select>
        <br>
        <br>
        <button name="btn"> Envoyer </button>
    </form>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php include "Footer.php"; ?>
