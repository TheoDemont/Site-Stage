<?php

error_reporting(E_ALL); ini_set("display_errors", 1); //Display errors

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$num = $_POST['num'];
$email_from = htmlentities($_POST['email']);
$message = htmlentities($_POST['texte']);

//Vérifier si on accepte le \r (retour à la ligne)
if(preg_match("#@(hotmail|live|msn).[a-z]{2,4}$#", $email_from))
{
    $passage_ligne = "\n";
}
else
{
    $passage_ligne = "\r\n";
}

$email_to = "theo.demont.sin@gmail.com"; //Adresse de destination
$email_subject = "CV de $nom $prenom"; //Objet
$boundary = md5(rand()); // Random boundary key

function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
}

$headers = "From: \"".$nom."\"".$prenom."\"<".$email_from.">" . $passage_ligne; //Expéditeur
$headers.= "Reply-to: \"".$nom ."\"".$prenom."\" <".$email_from.">" . $passage_ligne; //Expéditeur
$headers.= "MIME-Version: 1.0" . $passage_ligne; //MIME Version
$headers.= 'Content-Type: multipart/mixed; boundary='.$boundary .' '. $passage_ligne; //Content (2 versions ex:text/plain et text/html)

$email_message = '--' . $boundary . $passage_ligne; //Opening boundary
$email_message .= "Content-Type: text/plain; charset=\"utf-8\"" . $passage_ligne; //Content type
$email_message .= "Content-Transfer-Encoding: 8bit" . $passage_ligne; //Encoding
$email_message .= $passage_ligne. " Message : " .clean_string($message). $passage_ligne. " Numéro de téléphone : " . $num .$passage_ligne. " Mail du postulant : " . $email_from. $passage_ligne; //Content

//Attachment
if(isset($_FILES["fichier"]) &&  $_FILES['fichier']['name'] != ""){ //Vérifier si le fichier existe
    $nom_fichier = $_FILES['fichier']['name'];
    $source = $_FILES['fichier']['tmp_name'];
    $type_fichier = $_FILES['fichier']['type'];
    $taille_fichier = $_FILES['fichier']['size'];

    if($nom_fichier != ".htaccess"){ //Vérifier s'il ne s'agit pas d'un fichier .htaccess
        if($type_fichier == "image/jpeg"
            || $type_fichier == "image/pjpeg"
            || $type_fichier == "application/pdf"){

            if ($taille_fichier <= 2097152) { //Taille équivalente à 2MB
                $tabRemplacement = array("é"=>"e", "è"=>"e", "à"=>"a"); //Changing special characters

                $handle = fopen($source, 'r'); //File opening
                $content = fread($handle, $taille_fichier); //File reading
                $encoded_content = chunk_split(base64_encode($content)); //Encoding
                $f = fclose($handle); //File closing

                $email_message .= $passage_ligne . "--" . $boundary . $passage_ligne; //Second boundary opening
                $email_message .= 'Content-type:'.$type_fichier.';name="'.$nom_fichier.'"'."\n"; //Content type (application/pdf or image/jpeg)
                $email_message .='Content-Disposition: attachment; filename="'.$nom_fichier.'"'."\n"; //Inform there is an attachment
                $email_message .= 'Content-transfer-encoding:base64'."\n"; //Encoding
                $email_message .= "\n"; //Blank line. IMPORTANT !
                $email_message .= $encoded_content."\n"; //Attachment

            }else{
                //Error Message for attachment above 2MB
                $email_message .= $passage_ligne ."L'utilisateur a tenté de vous envoyer une pièce jointe mais celle ci était superieure à 2Mo.". $passage_ligne;
            }
        }else{
            //Error Message for wrong content type for attachment
            $email_message .= $passage_ligne ."L'utilisateur a tenté de vous envoyer une pièce jointe mais elle n'était pas au bon format.". $passage_ligne;
        }
    }else{
        //Error Message for sending a .htaccess file
        $email_message .= $passage_ligne ."L'utilisateur a tenté de vous envoyer une pièce jointe .htaccess.". $passage_ligne;
    }
}

$email_message .= $passage_ligne . "--" . $boundary . "--" . $passage_ligne; //Closing boundary

if(mail($email_to,$email_subject, $email_message, $headers)==true){  //Sending mail
    header('Location: Rejoindre.php'); //Redirection
}

?>