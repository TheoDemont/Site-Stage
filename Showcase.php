<?php
session_start();
function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'showcase';
    try {
        return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
        exit('Failed to connect to database!');
    }
}


if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit();
}
// Connection à la base de donnée
$pdo = pdo_connect_mysql();
// MySQL query that selects all the images
$stmt = $pdo->query('SELECT * FROM tuiles');
if(isset($_GET['type']))
    $stmt = $pdo->query("SELECT * FROM tuiles,ardoises,bac,zinc,epdm WHERE 'type' LIKE '$_GET[type]'");
$photos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<?php include "Menu.php" ?>
<!doctype html>
<body lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');

        .grid-container {
            display: grid;
            gap: 1rem;
            grid-template-columns: repeat(auto-fit, minmax(12rem, 1fr));
            grid-auto-flow: dense;
        }
        .grid-container item {
            background:#8FF;
            display:flex;
        }
        .grid-container .item a {
            display:flex;
            width:100%;
        }
        .grid-container .item img {
            width:95%;
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
    <link href="test.css" rel="stylesheet" type="text/css">
    <script src="https://www.helha.pub/scripts/patrickkunka-mixitup-61dac05/dist/mixitup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class='grid-container filter-container'>
    <div class="content home">
        <h2>Showcase NST</h2>
        <p>Bienvenue sur notre Showcase ! Vous pouvez observer plusieurs de nos produits ci-dessous.</p>
        <div class="filter-buttons">
            <button type="button" onclick='location.href="Showcase.php"'> Tout </button>
            <button type="button" onclick='location.href="Showcase.php?type=tuiles"'> Tuiles </button>
            <button type="button" onclick='location.href="Showcase.php?type=ardoises"'> Ardoises </button>
        </div>
    <br>
    <br>
    <div class="images">
        <?php foreach ($photos as $photo): ?>
            <?php if ($photo['images']): ?>
                <a href="#">
                    <?php echo "<div class='item mix ".($photo['type']). "'>  <img data-bs-toggle=\"modal\" src=\"data:image/jpg;base64,".base64_encode($photo['images']). "\" alt='$photo[type]' data-id='$photo[id]'  data-title='$photo[nom]' width=250 height=250> </div>
                    <p> $photo[nom] </p>" ?>
                </a>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <br>
    <br>
    </div>
    <div class="image-popup">
    </div>
</div>

</body>
</html>

<script>
    // Container qu'on va utiliser pour les pop-up
    let image_popup = document.querySelector('.image-popup');
    // Itérer l'image et applique le onclick sur chaque image
    document.querySelectorAll('.images a').forEach(img_link => {
        img_link.onclick = e => {
            e.preventDefault();
            let img_meta = img_link.querySelector('img');
            let img = new Image();
            img.onload = () => {
                // Créer la pop-up de l'image
                image_popup.innerHTML = `
                    <div class="con">
                        <h3> ${img_meta.dataset.title} </h3>
                        <p style="font-size: small; padding-top: 2px">${img_meta.alt}</p>
                        <img src="${img.src}" width="800" height="600">
                        <?php
                if(userconnect()){
                ?>
                            <p><?php $img_meta1 ='${img_meta.dataset.id}'; echo"<a href='supprimer.php?idTest=${img_meta1} ' class=trash title=Suppression&nbsp;de&nbsp;l'image><i class='fas fa-trash fa-xs'></i></a>" ?></p>
                            <?php }else{ ?>
                            <p> <?php echo "";?> </p>
                        <?php } ?>
                    </div>
                `;
                image_popup.style.display = 'flex';
            };
            img.src = img_meta.src;
        };
    });
    // Cacher la pop-up si on clique en dehors
    image_popup.onclick = e => {
        if (e.target.className == 'image-popup') {
            image_popup.style.display = "none";
        }
    };
</script>
<script>
    var mixer = mixitup('.filter-container');
</script>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<?php include "Footer.php" ?>