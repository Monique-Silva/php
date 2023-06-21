<?php
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue</title>
    <link rel="icon" href="../photos/logo_team_fleury.svg" type="image/svg">
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Services</title>
</head>

<body>
<header class="d-flex justify-content-between align-items-center  bg-light">
    <div class="">
        <img class="mt-2 " src="../photos/logo_team_fleury.svg" alt="logo de la compagnie">
    </div>

    <nav class="navbar navbar-expand-sm ">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../index.html">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="catalogue.html">Catalogue</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="equipe.html">Équipe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main>
    <div
        class="container d-flex flex-column d-flex justify-content-center container-sm container-md container-lg container-xl container-xxl">
        <div class="text-center">
            <h1 class="mt-5 mb-5">Nos services</h1>

            <p class="mb-4">Nous concevons des produits logiciels adaptés à votre entreprise.</p>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">
            <div class="col text-center">
                <div class="card text-dark bg-light mb-3 w-100 p-3" style="width: auto;">
                    <img src="../photos/UX_Design.jpg" class="card-img-top" alt="UX Design">
                    <div class="card-body card-text-center">
                        <h4 class="card-title">Conception de sites web</h4>
                        <p class="card-text fs-6 lh-sm">Nous pouvons concevoir de pages internet adaptées à
                            votre
                            entreprise pour augmenter les ventes.
                        </p>
                        <a href="produit1.html" class="btn btn-success">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <div class="card text-dark bg-light mb-3 w-100 p-3" style="width: auto;">
                    <img src="../photos/logiciel.jpg" class="card-img-top" alt="UX Design">
                    <div class="card-body card-text-center">
                        <h4 class="card-title">Conception de logiciels</h4>
                        <p class="card-text fs-6 lh-sm">Si vous avez besoin d'un logiciel pour votre business ou
                            une idée d'application, venez parler avec nous.
                        </p>
                        <a href="produit2.html" class="btn btn-success">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <div class="card text-dark bg-light mb-3 w-100 p-3" style="width: auto;">
                    <img src="../photos/serveur.jpg" class="card-img-top" alt="UX Design">
                    <div class="card-body card-text-center">
                        <h4 class="card-title">Maintenance de serveur</h4>
                        <p class="card-text fs-6 lh-sm">Booster la performance de votre serveur et évitez des
                            surprises désagreables avec notre service.
                        </p>
                        <a href="produit3.html" class="btn btn-success">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<div class="heigh_footer"></div>
<footer class="est_en_bas_de_page">
    <div
        class="bg-light  d-flex flex-column flex-lg-row justify-content-between align-items-center p-3 position-relative bottom-0 w-100">
        <div class="justify-content-lg-evenly">
            <p class="text-black fw-normal mx-lg-5 text-center text-lg-start">Team Fleury &copy;</p>
            <p class="text-black fw-normal mx-lg-5 text-center text-lg-start">contact@teamfleury.fr</p>
            <p class="text-black fw-normal mx-lg-5 text-center text-lg-start">08 07 06 05 04</p>
        </div>
        <div>
            <div class="d-flex justify-content-evenly align-items-center mx-10 my-0">
                <img class="footer__img" src="../photos/icons8-github-48.png" alt="GitHub">
                <img class="footer__img" src="../photos/icons8-linkedin-48.png" alt="LinkedIn">
                <img class="footer__img" src="../photos/icons8-instagram-50.png" alt="Instagram">
            </div>

        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
        crossorigin="anonymous"></script>
</body>

</html>
