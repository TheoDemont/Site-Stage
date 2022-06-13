<?php
include "EviterAvertissement.php";

if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit();
}

include 'fonctions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check that the image ID exists
if (isset($_GET['idTest'])) {
    // Select the record that is going to be deleted
    $stmt = $pdo->prepare('SELECT * FROM photo WHERE idTest = ?');
    $stmt->execute([ $_GET['idTest'] ]);
    $image = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$image) {
        exit('Image doesn\'t exist with that ID!');
    }
    // Make sure the user confirms before deletion
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            $stmt = $pdo->prepare('DELETE FROM photo WHERE idTest = ?');
            $stmt->execute([ $_GET['idTest'] ]);
            // Output msg
            $msg = 'Suppression effectuée !';
        } else {
            // User clicked the "No" button, redirect them back to the home/index page
            header('Location: Galery.php');
            exit;
        }
    }
} else {
    exit('No ID specified!');
}
?>

<?php include "Menu.php" ?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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


<div class="content delete">
    <h2>Suppression de l'image #<?=$image['idTest']?></h2>
    <?php if ($msg): ?>
        <p><?=$msg?></p>
    <?php else: ?>
        <p>Etes-vous sûr de vouloir supprimer : <?=$image['titre']?>?</p>
        <div style="justify-content: center" class="yesno">
            <a href="supprimer.php?idTest=<?=$image['idTest']?>&confirm=yes">Oui</a>
            <a href="supprimer.php?idTest=<?=$image['idTest']?>&confirm=no">Non</a>
        </div>
    <?php endif; ?>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</html>
<?php include "Footer.php" ?>