<?php include "Menu.php"; ?>

<html>
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');

        .grid-container {
            display: grid;
            gap: 1rem;
            grid-template-columns: repeat(auto-fit, minmax(12rem, 1fr));
            grid-auto-flow: dense;
        }
        .grid-container .item {
            background:#8FF;
            display:flex;
        }
        .grid-container .item a {
            display:flex;
            width:100%;
        }
        .grid-container .item.portrait {
            grid-row: auto / span 2;
        }
        .grid-container .item img {
            width:100%;
            height:auto;
            object-fit:cover;
        }

        .filter-buttons {
            padding:1rem;
            text-align:center;
        }
        .filter-buttons button {
            background:#ccc;
            border:none;
            font-size:1rem;
            padding:.5rem 1rem;
            margin-bottom:.5rem;
        }
        .filter-buttons button:focus {
            outline:none;
            background:#eee;
        }
    </style>
    <link href="site.css" rel="stylesheet">
    <link href="https://www.helha.pub/scripts/lightbox2-2.11.1/dist/css/lightbox.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://www.helha.pub/scripts/patrickkunka-mixitup-61dac05/dist/mixitup.min.js"></script>
    <script src="https://www.helha.pub/scripts/lightbox2-2.11.1/dist/js/lightbox.js"></script>

    <title>Nord Solutions Toiture</title>

</head>
<body>

<br>
<br>
<br>
<br>

<div class="filter-buttons">
    <button type="button" data-filter="all">Tout</button>
    <button type="button" data-filter=".tuiles">Tuiles</button>
    <button type="button" data-filter=".ardoises">Ardoises</button>
    <button type="button" data-filter=".zinc">Zinc</button>
    <button type="button" data-filter=".bac">Bac acier</button>
    <button type="button" data-filter=".etancheite">Étanchéité</button>
    <button type="button" data-filter=".isolation">Isolation</button>
    <button type="button" data-filter=".puit">Puit de lumière</button>
    <button type="button" data-filter=".machine">Machine</button>
</div>

<div class="DivTest" >
    <div class="grid-container filter-container">
        <div class="item mix tuiles">
            <a href="./images/galery/tuile1.webp" data-lightbox="lightbox" data-title="Légende de l'image">
                <img src="./images/galery/tuile1.webp">
            </a>
        </div>
        <div class="item mix bac">
            <a href="./images/galery/bac_ecole3.webp" data-lightbox="lightbox" data-title="Légende de l'image">
                <img src="./images/galery/bac_ecole3.webp?text=bac">
            </a>
        </div>
        <div class="item portrait mix etancheite">
            <a href="./images/galery/terasse.webp" data-lightbox="lightbox" data-title="Légende de l'image">
                <img src="./images/galery/terasse.webp?text=etancheite">
            </a>
        </div>
        <div class="item mix bac">
            <a href="./images/galery/bac_acier.webp" data-lightbox="lightbox" data-title="Légende de l'image">
                <img src="./images/galery/bac_acier.webp?text=bac">
            </a>
        </div>
        <div class="item mix tuiles">
            <a href="./images/galery/maison_tuileshaut.webp" data-lightbox="lightbox" data-title="Légende de l'image">
                <img src="./images/galery/maison_tuileshaut.webp?text=tuiles">
            </a>
        </div>
        <div class="item portrait mix ardoises">
            <a href="./images/galery/ardoise_toit.webp" data-lightbox="lightbox" data-title="Légende de l'image">
                <img src="./images/galery/ardoise_toit.webp?text=ardoises">
            </a>
        </div>
        <div class="item mix bac">
            <a href="./images/galery/bac_ecole2.webp" data-lightbox="lightbox" data-title="Légende de l'image">
                <img src="./images/galery/bac_ecole2.webp?text=bac">
            </a>
        </div>
        <div class="item portrait mix machine">
            <a href="./images/galery/college.webp" data-lightbox="lightbox" data-title="Légende de l'image">
                <img src="./images/galery/college.webp?text=machine">
            </a>
        </div>
        <div class="item mix tuiles">
            <a href="./images/galery/maison_tuileshaut2.webp" data-lightbox="lightbox" data-title="Légende de l'image">
                <img src="./images/galery/maison_tuileshaut2.webp?text=tuiles">
            </a>
        </div>
        <div class="item mix machine">
            <a href="./images/galery/college2.webp" data-lightbox="lightbox" data-title="Légende de l'image">
                <img src="./images/galery/college2.webp?text=machine">
            </a>
        </div>
        <div class="item mix bac">
            <a href="./images/galery/bac_ecole.webp" data-lightbox="lightbox" data-title="Légende de l'image">
                <img src="./images/galery/bac_ecole.webp?text=bac">
            </a>
        </div>
        <div class="item mix puit">
            <a href="./images/galery/dome_lumi.webp" data-lightbox="lightbox" data-title="Légende de l'image">
                <img src="./images/galery/dome_lumi.webp?text=puit">
            </a>
        </div>
        <div class="item mix tuiles">
            <a href="./images/galery/tuiles_noires.webp" data-lightbox="lightbox" data-title="Légende de l'image">
                <img src="./images/galery/tuiles_noires.webp?text=tuiles">
            </a>
        </div>
        <div class="item mix etancheite">
            <a href="./images/galery/EPDM.webp" data-lightbox="lightbox" data-title="Légende de l'image">
                <img src="./images/galery/EPDM.webp?text=etancheite">
            </a>
        </div>
        <div class="item portrait mix tuiles">
            <a href="./images/galery/tuiles-montante.webp" data-lightbox="lightbox" data-title="Légende de l'image">
                <img src="./images/galery/tuiles-montante.webp?text=tuiles">
            </a>
        </div>
        <div class="item portrait mix bac">
            <a href="./images/galery/preau_bac.webp" data-lightbox="lightbox" data-title="Légende de l'image">
                <img src="./images/galery/preau_bac.webp?text=bac">
            </a>
        </div>
        <div class="item mix tuiles">
            <a href="./images/galery/haut_tuiles.webp" data-lightbox="lightbox" data-title="Légende de l'image">
                <img src="./images/galery/haut_tuiles.webp?text=tuiles">
            </a>
        </div>
        <div class="item portrait mix bac">
            <a href="./images/galery/preau_bac2.webp" data-lightbox="lightbox" data-title="Légende de l'image">
                <img src="./images/galery/preau_bac2.webp?text=bac">
            </a>
        </div>
        <div class="item mix zinc">
            <a href="./images/galery/zinc.webp" data-lightbox="lightbox" data-title="Légende de l'image">
                <img src="./images/galery/zinc.webp?text=zinc">
            </a>
        </div>
        <div class="item portrait mix ardoises">
            <a href="./images/galery/ardoise_fenetre.webp" data-lightbox="lightbox" data-title="Légende de l'image">
                <img src="./images/galery/ardoise_fenetre.webp?text=ardoises">
            </a>
        </div>
        <div class="item mix etancheite">
            <a href="./images/galery/EPDM2.webp" data-lightbox="lightbox" data-title="Légende de l'image">
                <img src="./images/galery/EPDM2.webp?text=etancheite">
            </a>
        </div>
        <div class="item mix bac">
            <a href="./images/galery/bac_noire.webp" data-lightbox="lightbox" data-title="Légende de l'image">
                <img src="./images/galery/bac_noire.webp?text=bac">
            </a>
        </div>
        <div class="item portrait mix machine">
            <a href="./images/galery/filets.webp" data-lightbox="lightbox" data-title="Légende de l'image">
                <img src="./images/galery/filets.webp?text=machine">
            </a>
        </div>
        <div class="item mix etancheite">
            <a href="./images/galery/EPDM3.webp" data-lightbox="lightbox" data-title="Légende de l'image">
                <img src="./images/galery/EPDM3.webp?text=etancheite">
            </a>
        </div>
        <div class="item mix ardoises">
            <a href="./images/galery/ardoise_fenetre2.webp" data-lightbox="lightbox" data-title="Légende de l'image">
                <img src="./images/galery/ardoise_fenetre2.webp?text=ardoises">
            </a>
        </div>

    </div>
</div>

<br>
<br>
<br>
<br>

<script>
    var mixer = mixitup('.filter-container');
</script>

</body>
</html>

<?php include "Footer.php"; ?>
