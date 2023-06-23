<?php
$metaTitle = 'Contact';
$metaDescription = 'Commentaires, contact, adresse, telephone';
$date = date_create('now', timezone_open('Europe/Paris'));
$formulaire = 'contact_'.$date->format('Y-m-d-H-i-s').'.txt';
$reponse = $_POST['status'] . ' '. $_POST['nom']. ' '. $_POST['prenom']. ' '. $_POST['email']. ' '. $_POST['raison']. ' '. $_POST['message'];
$reponseNom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
$reponsePrenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
$reponseEmail = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
$reponseMessage = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);


if(!empty($_POST['submit'])) {
    if(empty($reponseNom)) {
        echo 'NOM INVALIDE';
    }
    if(empty($reponsePrenom)) {
        echo 'PRENOM INVALIDE';
    }
    if(empty($reponseEmail)) {
        echo 'E-MAIL INVALIDE';
    }
    if(empty($reponseMessage)) {
        echo 'CHAMP DE MESSAGE VIDE';
    }
    file_put_contents ($formulaire, $reponse);
    }
else {
    echo 'ERROR : FORMULAIRE VIDE. VEUILLEZ REESAYER';
    }
include 'header.php';
?>

  <main>
    <div class="mx-auto justify-content-center align-items-center col-10 col-md-8 col-lg-8">
      <div class="text-center p-5">
        <h1 class="mb-3">Contact</h1>
      </div>

      <form method="post" action="http://phpdebase.local/php/index.php?page=contact/post"
        class="mx-auto justify-content-center align-items-center col-10 col-md-8 col-lg-8">
        <div class="form-group mb-3">
          <select class="form-control text-secondary" id="civilité" name="status">
            <option value="Mme">Mme</option>
            <option value="M.">M.</option>
          </select>
        </div>

        <div class="col mb-3">
          <input type="text" class="form-control" placeholder="Nom" name="nom">
        </div>
          <div class="col mb-3">
              <input type="text" class="form-control" placeholder="Prénom" name="prenom">
          </div>
          <div class="form-group mb-3">
              <input type="email" class="form-control" id="e-mail" placeholder="E-mail"  name="email">
        </div>
        <div class="form-group mb-3">
              <input type="radio" id="Proposition d'emploi" name="raison" value="Proposition d'emploi">
              <label for="Proposition d'emploi">Proposition d'emploi</label><br>
              <input type="radio" id="Demande d'information" name="raison" value="Demande d'information">
              <label for="Demande d'information">Demande d'information</label><br>
              <input type="radio" id="Prestations" name="raison" value="Prestations">
              <label for="Prestations">Prestations</label><br>
        </div>
        <div class="form-group mb-4">
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message" name="message"></textarea>
        </div>
        <div class="text-center mb-5">
          <button type="submit" class="btn btn-success" name="submit">Envoyer</button>
        </div>
      </form>
    </div>
  </main>
<?php
include'footer.php';
?>