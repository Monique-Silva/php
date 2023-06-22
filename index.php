<?php
$page = filter_input(INPUT_GET, 'page');

if ($page === 'accueil') {
    include 'pages/index.php';
}

elseif ($page === 'contact') {
    include 'pages/contact.php';
}

elseif ($page === null) {
    include 'pages/index.php';
}

else {
    include 'pages/404.php';
}
