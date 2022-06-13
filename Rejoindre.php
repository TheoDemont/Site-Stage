<?php include "Menu.php"; ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');

        input {
            padding: 10px;
            font-size: 17px;
            font-family: Oswald, sans-serif;
            border-radius: 50px 50px 50px 50px;
            border: 1px solid #aaaaaa;
        }



    </style>
    <link href="site.css" rel="stylesheet">
    <link href="test.css" rel="stylesheet">
</head>
<body>

<br>
<br>
<br>
<br>
<br>
<br>

<div style="justify-content: center" class="DivTest row">
    <h1>Nos postes les plus recherchés !</h1>
    <br>
    <br>
    <br>
    <div class="card" style="width: 18rem; margin-right: 50px;margin-bottom: 20px">
        <br>
        <img src="./images/fiche_poste.jpg" class="card-img-top" width="250" height="250" alt="...">
        <div class="card-body">
            <h5 class="card-title">Chef d'équipe étancheur</h5>
            <br>
            <p class="card-text">Texte sur le poste en question et autre.</p>
            <br>
            <a href="#" class="btn btn-primary">Cliquez ici !</a>
        </div>
    </div>
    <br>
    <br>
    <div class="card" style="width: 18rem;margin-right: 50px;margin-bottom: 20px">
        <br>
        <img src="./images/OIP.jpg" class="card-img-top" width="250" height="250" alt="...">
        <div class="card-body">
            <h5 class="card-title">Chef d'équipe étancheur</h5>
            <br>
            <p class="card-text">Texte sur le poste en question et autre.</p>
            <br>
            <a href="#" class="btn btn-primary">Cliquez ici !</a>
        </div>
    </div>
    <br>
    <br>
    <div class="card" style="width: 18rem;margin-right: 50px;margin-bottom: 20px">
        <br>
        <img src="./images/mur_fond.jpg" class="card-img-top" width="250" height="250" alt="...">
        <div class="card-body">
            <h5 class="card-title">Chef d'équipe étancheur</h5>
            <br>
            <p class="card-text">Texte sur le poste en question et autre.</p>
            <br>
            <a href="#" class="btn btn-primary">Cliquez ici !</a>
        </div>
    </div>
    <br>
    <br>
    <div class="card" style="width: 18rem;margin-right: 50px;margin-bottom: 20px">
        <br>
        <img src="./images/sarking2.jpg" class="card-img-top" width="250" height="250" alt="...">
        <div class="card-body">
            <h5 class="card-title">Chef d'équipe étancheur</h5>
            <br>
            <p class="card-text">Texte sur le poste en question et autre.</p>
            <br>
            <a href="#" class="btn btn-primary">Cliquez ici !</a>
        </div>
    </div>
</div>
<br>
<br>
<br>
<div class="DivTest">
    <h1>Candidature spontanée :</h1>
    <br>
    <br>
    <form method="post" action="MailCV.php" name="CV" enctype="multipart/form-data">
        <div class="tab">
            <label>Votre nom  <span class="rouge">*</span> </label>
            <input style="width: 100%" type="text" name="nom" placeholder="Nom" required>
            <label>Votre prénom  <span class="rouge">*</span> </label>
            <input style="width: 100%" type="text" name="prenom" placeholder="Prénom " required>
            <label>Votre numéro de contact  <span class="rouge">*</span> </label>
            <input style="width: 100%" type=number name="num" placeholder="Numéro de téléphone à joindre " maxlength="10" required>
            <label>Votre email <span class="rouge">*</span> </label>
            <input style="width: 100%" type="email" name="email" placeholder="Email" required>
            <br>
            <br>
            <label>Votre message / demande : <span class="rouge"> *</span></label>
            <br>
            <textarea name="texte" placeholder="Veuillez préciser votre demande" style="width: 500px; height: 200px; max-width: 100%"></textarea>
            <br>
            <br>
            <label>Votre CV <span class="rouge">*</span></label>
            <br>
            <input type="file" name="fichier" placeholder="CV.pdf" required>
            <br>
            <br>
            <input type="submit" name="sub" placeholder="Envoyer">
        </div>
    </form>
</div>


<br>
<br>
<br>

</body>
</html>
<?php include "Footer.php"; ?>
