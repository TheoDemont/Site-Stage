<?php
session_start();
// Connection à la base de donnée
$message='';
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"galerie photos");
$con->set_charset("utf8");

if (isset($_POST['username'])) {
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con, $username);
    $_SESSION['username'] = $username;
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    $query = "SELECT * FROM `admin` WHERE username='$username' 
  and password='$password'";

    $result = mysqli_query($con,$query) or die(mysqli_error());
    $rows = mysqli_num_rows($result);
    if($rows==1){
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit;
    }else{
        $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
    }

}
?>
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

<div class="DivTest">
    <form action="" id="regForm" method="post" name="login">
        <h1>Interface de connexion administrateur</h1>
        <br>
        <label for="username"><h4>Nom d'utilisateur</h4></label>
            <input style="width: 100%" type="text" placeholder="Nom d'utilsateur" name="username" required>
        <br>
        <br>
        <label for="password"><h4>Mot de passe</h4></label>
            <input style="width: 100%" type="password" name="password" placeholder="Mot de passe" required">
        <br>
        <br>
        <input type="submit" value="Connexion " name="submit" />
        <br>
        <?php if (! empty($message)) { ?>
            <p><?php echo $message; ?></p>
        <?php } ?>
    </form>
</div>

<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>

</body>
</html>

<?php include "Footer.php" ?>