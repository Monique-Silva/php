<?php
$metaTitle = 'CV Monique';
$metaDescription = 'Page dediée au CV de Monique Silva, développeur web';

include 'header.php';

if ($_GET['page'] == 'accueil') {
    include 'moniquesilva.php';
}

if ($_GET['page'] == 'contact') {
    include 'contact.php';
}

include 'footer.php';
