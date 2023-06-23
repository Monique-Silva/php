<?php
$date = date_create('now', timezone_open('Europe/Paris'));

$formulaire = 'contact_'.$date->format('Y-m-d-H-i-s').'.txt';
$reponse = $_POST['status'] . ' '. $_POST['nom']. ' '. $_POST['prenom']. ' '. $_POST['email']. ' '. $_POST['raison']. ' '. $_POST['message'];

$reponseMessage = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

if(!empty($_POST['submit']) {
    if(empty($POST['nom']) {
        echo 'NOM INVALIDE';
    }
    else {
        $reponseNom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
    }
      if(empty($POST['prenom']) {
        echo 'PRENOM INVALIDE';
    }
    else {
        $reponsePrenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
    }
    if(empty($POST['email']) {
        echo 'E-MAIL INVALIDE';
    }
    else
        {
        $reponseEmail = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
        }
    if(empty($POST['message'])) {
        echo 'CHAMP DE MESSAGE VIDE';

    else{
        $reponseMessage = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    }
    file_put_contents ($formulaire, $reponse);
}
    else {
        echo 'ERROR : FORMULAIRE VIDE. VEUILLEZ RÉESAYER';
    }
    ?>


    <?php if($reponseEmail===false) {echo "N'oubliez pas votre addresse !";} else {echo 'Email';}?>
strlen($reponseMessage)<=5)
<p style="color:#FA8072;">