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
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>


<div class="row DivTest">
    <p style="font-family: Oswald"><u>Quelques chiffres clés :</u></p>
    <div class="col">
        <div class="counter-number" id="num-1">0+</div>
        <div class="counter-title">  <strong>Projets</strong> menés à bien</div>
    </div>
    <div class="col">
        <div class="counter-number" style="color: #2babc8;" id="num-2">0+</div>
        <div class="counter-title">  <strong>Clients</strong> satisfaits</div>
    </div>
    <div class="col">
        <div class="counter-number" style="color: #42c4e0;" id="num-3">0+</div>
        <div class="counter-title">  <strong>Tuiles</strong> posées</div>
    </div>
    <div class="col">
        <div class="counter-number" style="color: #38c9e8;" id="num-4">0+</div>
        <div class="counter-title">  <strong>Devis</strong> effectués</div>
    </div>
</div>

<BR>
<BR>
<BR>
<BR>
<BR>

<script>
    //Fonction chiffres clés
    $.Tween.propHooks.number = {
        get: function(tween) {
            var num = tween.elem.innerHTML.replace(/^[^\d-]+/, "");
            return parseFloat(num) || 0;
        },

        set: function(tween) {
            var opts = tween.options;
            tween.elem.innerHTML =
                (opts.prefix || "") +
                tween.now.toFixed(opts.fixed || 0) +
                (opts.postfix || "");
        }
    };

    $("#num-1")
        .delay(500)
        .animate(
            { number: 50 },
            {
                duration: 1000,
                postfix: "+"
            }
        );

    $("#num-2")
        .delay(500)
        .animate(
            { number: 100 },
            {
                duration: 2000,
                postfix: "+"
            }
        );

    $("#num-3")
        .delay(500)
        .animate(
            { number: 683000 },
            {
                duration: 2000,
                postfix: "+"
            }
        );

    $("#num-4")
        .delay(500)
        .animate(
            { number: 500 },
            {
                duration: 2000,
                postfix: "+"
            }
        );

</script>
</script>


<?php include "Footer.php"; ?>
</body>
</html>