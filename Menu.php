<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');

        .button{
            background-color: #04AA6D;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Oswald;
            cursor: pointer;
        }
    </style>
    <link href="site.css" rel="stylesheet">
    <link rel="icon" href="./images/Logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8479660908.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" crossorigin="anonymous"></script>

    <title>Nord Solutions Toiture</title>

</head>
<body>

<nav class="navbar navbar-expand-md navbar-fixed-top fixed-top container-fluid navbar-top navbar-light top-menu affix-top" id="navbar">
            <a class="navbar-brand" href="index.php">
                <img src="./images/Logo.png" alt="" width="300" height="80">
            </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul style="padding-left: 23%" class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Qui sommes-nous ?
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="Historique.php">Historique</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="./Equipe.php">Notre équipe</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="./Engagements.php">Nos engagements</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="./Intervention.php">Zone d'intervention</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Nos prestations
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="./Tuile.php">Tuiles</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="./Ardoises.php">Ardoises</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="./Zinc.php">Zinc</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="./Bac_Acier.php">Bac acier</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="./Puit_Lumiere.php">Puit de lumière</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="./Galery.php">Galerie</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./Rejoindre.php">Nous rejoindre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Contact.php">Contact</a>
                </li>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div style="padding-right: 50px; align-self:center">
                    <a href="https://www.facebook.com/Nord-Solutions-Toiture-545725582238795/">
                        <i class="fa-brands fa-facebook-f fa-2xl"></i>
                    </a>
                </div>
                <br>
                <br>
                <div style="padding-right: 50px; align-self:center">
                    <a href="https://www.linkedin.com/company/nord-solutions-toiture/mycompany/">
                        <i class="fa-brands fa-linkedin-in fa-2xl"></i>
                    </a>
                </div>
                <br>
                <br>
                <div>
                    <?php
                    if(userconnect()){
                        ?>
                            <button onclick='location.href="home.php"' class="button">Panel Admin</button>
                            <img style="margin-left: 10px" onclick='location.href="logout.php"' src="./images/logout_butoon.png" width="35" height="35">
                    <?php }else{ ?>
                        <p> <button onclick='location.href="login.php"' class="button">Connexion Admin</button> </p>
                    <?php } ?>
                </div>
        </div>
</nav>

<script>
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {

            document.getElementById("navbar").style.background = "#FFFFFF";
        } else {

            document.getElementById("navbar").style.background = "none";
        }
    }
</script>
</body>


</html>

<?php
function userconnect(){
// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
    if(!isset($_SESSION["username"])){
        return false ;
    }else{
        return true;
    }
}
?>
