<?php
include 'fonctions.php';
$page_nb=1;
$nb_image = 15;
if (isset($_GET['page_nb']))
{
    $premiere_image = ($_GET['page_nb']-1) *$nb_image;
}
else
{
    $premiere_image = 0 ;
}
$pdo = pdo_connect_mysql();
// MySQL query that selects all the images
$stmt = $pdo->query('SELECT * FROM `photo` WHERE 1 LIMIT '.$premiere_image.', 15 ');
if(isset($_GET['type']))
    $stmt = $pdo->query("SELECT * FROM `photo` WHERE type LIKE '$_GET[type]' LIMIT $premiere_image, 15");
$photos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<?php include "Menu.php"; ?>
<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');

        *{
            max-width: 100%;
            justify-content: center;
        }

        .atest{
            background-color: #04AA6D;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Oswald;
            cursor: pointer;
            text-decoration: none;

        .atest:hover {
            opacity: 0.8;
        }
        }

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
        <h2>Galerie</h2>
            <p>Bienvenue sur notre galerie ! Vous pouvez observer plusieurs photos de nos réalisations ci-dessous.</p>
            <?php
            if(userconnect()){
                echo "<a href=ajouter.php class=upload-image>Uploader votre image</a>";
            }
            ?>
            <div class="filter-buttons">
                <button type="button" onclick='location.href="Galery.php"'> Tout </button>
                <button type="button" onclick='location.href="Galery.php?type=tuiles"'> Tuiles </button>
                <button type="button" onclick='location.href="Galery.php?type=ardoises"'> Ardoises </button>
                <button type="button" onclick='location.href="Galery.php?type=zinc"'> Zinc </button>
                <button type="button" onclick='location.href="Galery.php?type=bac"'> Bac Acier </button>
                <button type="button" onclick='location.href="Galery.php?type=etancheite"'> Etanchéité </button>
                <button type="button" onclick='location.href="Galery.php?type=isolation"'> Isolation </button>
                <button type="button" onclick='location.href="Galery.php?type=puit"'> Puit de lumière </button>
                <button type="button" onclick='location.href="Galery.php?type=machine"'> Machine </button>
            </div>
            <br>
            <br>
            <div class="images">
                <?php foreach ($photos as $photo): ?>
                    <?php if ($photo['images']): ?>
                        <a href="#">
                <?php echo "<div class='item mix ".($photo['type']). "'>  <img data-bs-toggle=\"modal\" src=\"data:image/jpg;base64,".base64_encode($photo['images']). "\" alt='$photo[description]' data-id='$photo[idTest]'  data-title='$photo[titre]' width=250 height=250> </div>"  ?>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        <?php
        if(!isset($_GET['type'])){?>
        <a class="atest" <?php $next_page = $page_nb; echo "href='?page_nb=$next_page'"; ?>><?php echo "Page N°1"; ?></a>
        <a class="atest" <?php $next_page = $page_nb+1; echo "href='?page_nb=$next_page'"; ?>><?php echo "Page N°2"; ?></a>
        <a class="atest" <?php $next_page = $page_nb+2; echo "href='?page_nb=$next_page'"; ?>><?php echo "Page N°3"; ?></a>
        <?php }else{
            echo "";
        } ?>
        <br>
        <br>
        </div>
        <div class="image-popup">
    </div>
</div>

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


<?php include "Footer.php";?>
