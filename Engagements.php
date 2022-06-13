<?php include "Menu.php"; ?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        *{
            font-family: Oswald,sans-serif;
        }

        .engagements{
            background-color: grey;
            width: 23%;
            height: 270px;
            margin: 10px;
            text-align: center;
            border-radius: 50px 50px 50px 50px;
            border: 1px solid #aaaaaa;
        }
        @media screen and (max-width: 1400px){
            .engagements{
                background-color: grey;
                width: 100%;
                border-radius: 50px 50px 50px 50px;
                border: 1px solid #aaaaaa;
            }
        }
    </style>
    <link href="site.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8479660908.js" crossorigin="anonymous"></script>

</head>
<body>

<br>
<br>
<br>
<br>
<br>
<br>

<div class="DivTest">
    <h1>Nos engagements !</h1>
    <br>
    <br>
    <div class="row DivTest" style="background-color: grey">
        <div class="engagements">
            <p><i class="fa-solid fa-handshake fa-6x"></i><br><span style="font-weight: bold"> Relation de proximité </span> <br> Nous vous accompagnons dans la réalisation de vos projets localement en développant de nouvelles agences de proximité dans la région.</p>
        </div>
        <br>
        <br>
        <div class="engagements">
            <p><i class="fa-solid fa-message fa-6x"></i> <br> <span style="font-weight: bold"> Conseils et services </span> <br> Nous vous apportons des conseils avisés, des solutions adaptées ainsi que des alternatives astucieuses répondant à vos besoins.  </p>
        </div>
        <br>
        <br>
        <div class="engagements">
            <p><i class="fa-solid fa-hammer fa-6x"></i> <br> <span style="font-weight: bold"> Savoir-faire </span> <br> Nous enrichissons régulièrement les savoirs faire de nos collaborateurs, par le biais de formations spécifiques basées sur les pratiques traditionnelles et actuelles de notre métier.  </p>
        </div>
        <br>
        <br>
        <div class="engagements">
            <p><i class="fa-solid fa-house-user fa-6x"></i> <br> <span style="font-weight: bold"> Responsabilité </span> <br> Nous accordons une importance particulière aux enjeux sociaux, environnementaux et éthiques dans la gestion quotidienne de notre entreprise.</p>
        </div>
    </div>
    <br>
    <br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>

<?php include "Footer.php"; ?>
