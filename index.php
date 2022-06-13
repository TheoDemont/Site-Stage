<?php include "Menu.php"; ?>

<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');
    </style>
    <link href="site.css" rel="stylesheet">
    <script src="sweetalert2.all.min.js"></script>
    <title>Nord Solutions Toiture</title>

</head>
<body>

<script type="module" src="https://cookieconsent.popupsmart.com/js/CookieConsent.js" ></script>
<script type="text/javascript" src="https://cookieconsent.popupsmart.com/js/App.js"></script>
<script>
    popupsmartCookieConsentPopup({
        "siteName" : "Nord Solutions Toiture" ,
        "notice_banner_type": "popup",
        "consent_type": "gdpr",
        "palette": "light",
        "language": "French",
        "privacy_policy_url" : "#" ,
        "preferencesId" : "#" ,
        "companyLogoURL" : "./images/Sans_titre.png"
    });
</script>

<noscript>Cookie Consent by <a href="https://popupsmart.com/" rel="nofollow noopener">Popupsmart Website</a></noscript>

<div class="video-container">
    <video width=100% autoplay="" loop="" muted="">
        <source src="./images/video_drone.mp4" type="video/mp4">
    </video>
</div>

<BR>
<BR>
<BR>

<div style="border : solid 5px darkorange; width: 95%" class="row DivTest">

    <div style="font-family: Oswald">
        <br>
        <br>
        <h4>Bienvenue chez NORD Solutions Toiture ! </h4>
        <span style="font-size: small">Une société <span class="areo">AREO</span> COUVERTURES </span>
        <br>
        <br>
        <p><u>Vous pouvez voir ci-dessous les différentes prestations que nous pouvons vous proposer :</u></p>
        <div id="container">
            <a style="padding-left: 10px"href="Tuile.php">
                <div class="slice" id="s1">
                    <img src="./images/tuile1.jpg"/>
                    <div class="texte_centrer">
                        <p class="bouton_menu">&nbsp; Tuiles &nbsp;</p>
                    </div>
                </div>
            </a>

            <a style="padding-left: 10px" href="Ardoises.php">
                <div class="slice" id="s2">
                    <img src="./images/ardoise2.jpg" />
                    <div class="texte_centrer">
                        <p class="bouton_menu">&nbsp; Ardoises &nbsp;</p>
                    </div>
                </div>
            </a>

            <a style="padding-left: 10px" href="isolation.php">
                <div class="slice" id="s3">
                    <img src="./images/zinc.png" />
                    <div class="texte_centrer">
                        <p class="bouton_menu">&nbsp; Zinc &nbsp;</p>
                    </div>
                </div>
            </a>
            <br>
            <a style="padding-left: 10px" href="Bac_Acier.php">
                <div class="slice" id="s4">
                    <img src="./images/R.jpg" />
                    <div class="texte_centrer">
                        <p class="bouton_menu">&nbsp; Bac acier &nbsp;</p>
                    </div>
                </div>
            </a>

            <a style="padding-left: 10px" href="Puit_Lumiere.php">
                <div class="slice" id="s4">
                    <img src="./images/puit_lumiere.jpg" width="450"/>
                    <div class="texte_centrer">
                        <p class="bouton_menu">Puit de lumière</p>
                    </div>
                </div>
            </a>

            <a style="padding-left: 10px" href="Galery.php">
                <div class="slice" id="s4">
                    <img src="./images/galerie.jpg" width="450"/>
                    <div class="texte_centrer">
                        <p class="bouton_menu">&nbsp; Galerie &nbsp;</p>
                    </div>
                </div>
            </a>
            <br>
            <br>
            <br>
        </div>
    </div>
</div>

<BR>
<BR>
<BR>
<BR>
<BR>

<script>
    //Fonction slide (+ grand / - grand)
    var pw = parseInt($('.slice').css('width'));

    $('.slice img').mouseover(function(){
        $(this).parent().css('width',pw+40+"px");
    });

    $('.slice img').mouseleave(function(){
        $(this).parent().css('width',pw+"px");
    });
</script>

<?php include "Footer.php"; ?>
</body>
</html>


