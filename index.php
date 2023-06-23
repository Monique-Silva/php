<?php
$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_URL);

if ($page === 'accueil') {
    include 'pages/index.php';
}

elseif ($page === 'contact') {
    include 'pages/contact.php';
}

elseif ($page === null) {
    include 'pages/index.php';
}

else if ($page === 'contact/post') {
    include 'pages/contact.php';
}

else {
    include 'pages/404.php';
}
