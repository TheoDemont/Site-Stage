<?php include "EviterAvertissement.php"; ?>
<?php include "Menu.php"; ?>

<!doctype html>
<html lang="fr">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #f1f1f1;
        }

        .small{
            font-size: small;
        }

        h3{
            text-align: center;
        }

        #regForm {
            background-color: lightgrey;
            margin: 100px auto;
            font-family: Oswald;
            padding: 40px;
            width: 70%;
            min-width: 300px;
            border-radius: 42px 0px 91px 0px;
            border : solid 10px #345198
        }

        #teste {
            background-color: lightgrey;
            margin: 100px auto;
            font-family: Oswald;
            padding: 40px;
            width: 20%;
            min-width: 300px;
            border-radius: 42px 0px 91px 0px;
            border : solid 6px #345198
        }

        h1 {
            text-align: center;
        }

        input {
            padding: 10px;
            font-size: 17px;
            font-family: Oswald, sans-serif;
            border-radius: 50px 50px 50px 50px;
            border: 1px solid #aaaaaa;
        }

        select {
            font-size: 17px;
            font-family: Oswald, sans-serif;
            border-radius: 15px 15px 15px 15px;
            border: 1px solid #aaaaaa;
        }

        input.invalid {
            background-color: #ffdddd;
        }

        .tab {
            display: none;
        }

        button {
            background-color: #04AA6D;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Oswald;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.8;
        }

        #prevBtn {
            background-color: #bbbbbb;
        }

        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: red;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active {
            opacity: 1;
        }

        .step.finish {
            background-color: #04AA6D;
    </style>
    <link href="site.css" rel="stylesheet">
    <title>Nord Solutions Toiture</title>

</head>
<body>

<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>

<div id="teste">
<h1>Contactez-nous</h1>
</div>

<form method="post" id="regForm" enctype="multipart/form-data">
    <div class="tab">
        <h3>Informations personnelles</h3>
        <p style="text-align: center;"><i class="fa-solid fa-person fa-2xl"></i><i class="fa-solid fa-person fa-2xl"></i></p>
        <label>Votre nom  <span class="rouge">*</span> </label>
        <input style="width: 100%" type="text" name="nom" placeholder="Nom / Prénom " oninput="this.className = ''" required>
        <label>Votre numéro de contact  <span class="rouge">*</span> </label>
        <input style="width: 100%" type=number name="num" placeholder="Numéro de téléphone à joindre " maxlength="10" oninput="this.className = ''" required>
        <label>Votre email <span class="rouge">*</span> </label>
        <input style="width: 100%" type="email" name="email" placeholder="Email" oninput="this.className = ''" required>
        <p>Quel est votre statut ?  <span class="rouge">*</span> </p>
        <select name="statut" oninput="this.className = ''">
            <option>Choisir</option>
            <option>Particulier</option>
            <option>Société</option>
            <option>Syndicat de copropriété</option>
            <option> Promoteur / Constructeur</option>
            <option>Administration</option>
            <option>Collectivité locale</option>
            <option>Architecte</option>
            <option>Agence immobilière</option>
            <option>Autre</option>
        </select>
        <br>
        <br>
        <p>Et : <span class="rouge">*</span></p>
        <select name="test" oninput="this.className = ''">
            <option>Choisir</option>
            <option>Propriétaire occupant</option>
            <option>Propriétaire bailleur</option>
            <option>Futur propriétaire</option>
            <option>Locataire</option>
            <option>Administrateur</option>
            <option>Autre</option>
        </select>
        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Suivant</button>
            </div>
        </div>
    </div>
        <div class="tab">
            <h3>Lieu des travaux</h3>
            <p style="text-align: center;"><i class="fa-solid fa-map-location fa-2xl"></i></p>
            <label>Adresse complète <span class="small">(N° + Nom de voie + Complément)</span> : <span class="rouge">*</span> </label>
            <input style="width: 100%" type="text" name="adresse" placeholder="Ex: 30 Rue de ... " oninput="this.className = ''" required>
            <label>Code postal : <span class="rouge">*</span></label>
            <input style="width: 100%" type="number" name="CP" placeholder="Ex : 59000" oninput="this.className = ''" required>
            <label>Ville : <span class="rouge">*</span></label>
            <input style="width: 100%" type="text" name="ville" placeholder="Ex : Lille" oninput="this.className = ''" required>
            <p>Département : <span class="rouge">*</span></p>
            <select name="dept" oninput="this.className = ''" required>
                <option>Choisir</option>
                <option>Pas-De-Calais - 62</option>
                <option>Nord - 59</option>
                <option>Somme - 80</option>
                <option>Autre</option>
            </select>
            <p>Date prévue pour les travaux : <span class="rouge">*</span></p>
            <select name="urgence" oninput="this.className = ''" required>
                <option>Choisir</option>
                <option>Au plus vite / urgent</option>
                <option>Dans moins de 3 mois</option>
                <option>Dans moins de 6 mois</option>
                <option>Dans l'année en cours</option>
                <option>Pas de date fixée</option>
            </select>
            <div style="overflow:auto;">
                <div style="float:right;">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Précédent</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Suivant</button>
                </div>
            </div>
        </div>
        <div class="tab">
            <h3>Description de l’habitation</h3>
            <p style="text-align: center;"><i class="fa-solid fa-people-roof fa-2xl"></i></p>
            <p>Type de construction : <span class="rouge">*</span></p>
            <select name="type" oninput="this.className = ''" required>
                <option>Choisir</option>
                <option>Maison de ville</option>
                <option>Pavillon individuel</option>
                <option>Ferme / Fermette</option>
                <option>Immeuble</option>
                <option>Copropriété</option>
                <option>Habitation classée</option>
                <option>Local industriel</option>
                <option>Autre construction</option>
            </select>
            <br>
            <br>
            <label>Ancienneté de la maison : <span class="rouge">*</span> </label>
            <br>
            <input type="radio" name="anciennete" value="Ancien" required> Ancien <br>
            <input type="radio" name="anciennete" value="Neuf (< 2ans)" required> Neuf <span class="small">(< 2ans)</span><br>
            <input type="radio" name="anciennete" value="Projet de construction" required> Projet de construction
            <br>
            <br>
            <p>Année de construction : </p>
            <select name="anneeconstruction" oninput="this.className = ''" required>
                <option>Je ne sais pas</option>
                <option>Avant 2000</option>
                <option>Entre 2000 et 2010</option>
                <option>Entre 2010 et 2020</option>
            </select>
            <br>
            <br>
            <p>Hauteur du bâtiment : <span class="small">(en mètres)</span> </p>
            <select name="hauteur" oninput="this.className = ''" required>
                <option>Je ne sais pas</option>
                <option> Supérieur à 5m</option>
                <option>Supérieur à 10m</option>
                <option>Supérieur à 20m</option>
            </select>
            <br>
            <br>
            <p>Type de couverture : <span class="rouge">*</span></p>
            <select name="typecouv" oninput="this.className = ''" required>
                <option>Choisir</option>
                <option>Tuiles</option>
                <option>Ardoises</option>
                <option>Bac acier</option>
                <option>Je ne sais pas</option>
                <option>Autre</option>
            </select>
            <br>
            <br>
            <p>Matériaux de gouttières : <span class="rouge">*</span></p>
            <select name="typegout" oninput="this.className = ''" required>
                <option>Choisir</option>
                <option>Zinc</option>
                <option>Aluminium</option>
                <option>Je ne sais pas</option>
                <option>Autre</option>
            </select>
            <div style="overflow:auto;">
                <div style="float:right;">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Précédent</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Suivant</button>
                </div>
            </div>
        </div>
        <div class="tab">
            <h3>Travaux prévus</h3>
            <p style="text-align: center"><i class="fa-solid fa-person-digging fa-2xl"></i></p>
            <label>Type de travaux demandé et leurs options :<span class="rouge">*</span> </label>
            <br>
            <br>
            <input type="checkbox" value="[Travaux couverture] " name="travaux1">Travaux couverture <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="toiture" value=" [Toiture neuve] "/> Toiture neuve &nbsp;&nbsp;<input type="radio" name="toiture" value=" [Rénovation toiture] "/> Rénovation toiture
            <br>
            <br>
            <input type="checkbox" value=" [Travaux zinguerie] " name="travaux2">Travaux zinguerie <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="zinguerie" value=" [Zinc] "/> Zinc &nbsp;&nbsp;<input type="radio" name="zinguerie" value=" [PVC] "/> PVC &nbsp;&nbsp;<input type="radio" name="zinguerie" value=" [Autre] "/> Autre
            <br>
            <br>
            <input type="checkbox" value=" [Travaux isolation] " name="travaux3">Travaux isolation <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value=" [Combles perdus] " name="isolation">Combles perdus&nbsp;&nbsp; <input type="radio" name="isolation" value=" [Isolation de la toiture par l'extérieur] " />Isolation de la toiture par l'extérieur
            <br>
            <br>
            <input type="checkbox" value=" [Travaux puit de lumière]" name="travaux4">Travaux puit de lumière <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="lumiere" value=" [Fenêtre de toit]"/> Fenêtre de toit &nbsp;&nbsp;<input type="radio" name="lumiere" value=" [Puit de lumière]"/> Puit de lumière
            <br>
            <br>
            <p>Message  <span class="rouge">*</span> </p>
            <textarea name="message" placeholder="Donnez-nous plus d'informations sur votre demande !" rows="5" cols="40" required></textarea>
            <br>
            <br>
            <div style="overflow:auto;">
                <div style="float:right;">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Précédent</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Envoyer</button>
                </div>
            </div>
        </div>

    <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
    </div>
</form>
<?php
session_start();

$mess="Votre message à bien été envoyé !";

if (isset($_POST['nom'])) {
    $entete  = 'MIME-Version: 1.0' . "\r\n";
    $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $entete .= 'From: theo.demont55@gmail.fr' . "\r\n";
    $entete .= 'Reply-to: ' . $_POST['email'];

    $message = '<h1>Devis de toiture</h1>
        <h3><u>Informations personnelles :</u></h3>
        <p><b>Nom : </b>' . $_POST['nom'] .' <br> </p>
        <p><b>Numéro : </b>' . $_POST['num'] .' <br> </p>
        <p><b>Email : </b>' . $_POST['email'] . '<br> </p>
        <p><b>Statut : </b>' . $_POST['statut'] .'<br> </p>
        <p><b>Statut bis : </b>' . $_POST['test'] .' <br> </p>
        <br>
        <br>
        <h3><u>Lieu des travaux</u></h3>
        <p><b>Adresse compléte : </b>' . $_POST['adresse'] .' <br> </p>
        <p><b>Code postal : </b>' . $_POST['CP'] .' <br> </p>
        <p><b>Ville : </b>' . $_POST['ville'] .' <br> </p>
        <p><b>Département : </b>' . $_POST['dept'] .' <br> </p>
        <p><b>Urgence : </b>' . $_POST['urgence'] .' <br> </p>
        <br>
        <br>
        <h3><u>Description de l’habitation</u></h3> 
        <p><b>Type de construction : </b>' . $_POST['type'] .' <br> </p>
        <p><b>Ancienneté de la maison : </b>' . $_POST['anciennete'] . '<br> </p>
        <p><b>Année de construction : </b>' . $_POST['anneeconstruction'] .'<br> </p>
        <p><b>Hauteur du bâtiment : </b>' . $_POST['hauteur'] .' <br> </p>
        <p><b>Type de couverture : </b>' . $_POST['typecouv'] .' <br> </p>
        <p><b>Matériaux de gouttières : </b>' . $_POST['typegout'] .' <br> </p>
        <br>
        <br>
        <h3><u>Travaux prévus</u></h3>
        <p><b>Type de travaux : </b>' . $_POST['travaux1'] . $_POST['travaux2'] . $_POST['travaux3'] . $_POST['travaux4'] .' <br> </p>
        <p><b>Précision sur les travaux : </b>' . $_POST['toiture'] . $_POST['zinguerie'] . $_POST['isolation'] . $_POST['lumiere'] . ' <br> </p>
        <p><b>Message : </b>' . htmlspecialchars($_POST['message']) . ' <br> </p> 
        
        ';

    $retour = mail('theo.demont.sin@gmail.com', 'Devis de ' . $_POST['nom'] . '', $message, $entete);
    if($retour)

        echo '<script type="text/javascript">window.alert("'.$mess.'");</script>';

}


?>


<BR>
<BR>
<BR>
<BR>

<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Envoyer";
        } else {
            document.getElementById("nextBtn").innerHTML = "Suivant";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value === "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }
</script>

<?php include "Footer.php"; ?>
</body>
</html>
