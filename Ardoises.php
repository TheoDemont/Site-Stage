<?php include "Menu.php"; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        *{
            font-family: Oswald,sans-serif;
        }

        .image1{
            float: left ;
            margin: 20px 15px 15px 0;
        }

        .image2{
            transform: scaleX(-1);
            max-width: 100%;
        }

        @media (max-width: 750px) {
            .image2{
                transform: scaleX(-1);
                max-width: 100%;
            }
        }
    </style>

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
<br>

<div class="DivTest" style="height: auto">
    <h1>Ardoises</h1>
    <br>
    <img src="./images/bande-NST.webp" class="image2">
    <div class="DivTest">
        <p>
            <img src="./images/ardoise2.jpg" width="350" height="350" class="image1">
        </p>
        <p style="line-height: 35px">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
    </div>

</div>

<br>
<br>
<br>

</body>



<?php include "Footer.php"; ?>
