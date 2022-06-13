<?php
// Initialiser la session
session_start();
// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit();
}
?>



<?php include "Menu.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            font-family: Oswald;
        }
    </style>
    <link rel="stylesheet" href="site.css" />
</head>
<body>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="DivTest">
    <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
    <?php
    if(userconnect()){
        ?>
        <p> <?php echo $_SESSION['username'];?> est bien connecté ! </p>
    <?php }else{ ?>
        <p> <?php echo $_SESSION['username'];?> n'est pas connecté ! </p>
    <?php } ?>
        <button onclick='location.href="logout.php"' class="button">Déconnexion</button>
    </ul>
    <br>
    _____________________________________________________________________________________________________________________________
    <br>
    <!--
    <div class="DivTest">
        <button onclick='location.href="Showcase.php"' class="button">Showcase de NST</button>
    </div>
    -->
</div>
</body>
</html>