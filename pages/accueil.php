<?php include 'assets/data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/accueil/headers.css">
    <link rel="stylesheet" href="assets/css/accueil/apropos.css">
    <link rel="stylesheet" href="assets/css/accueil/activites.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Blu Azur</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Mulish;
            letter-spacing: 0%;
        }
    </style>
</head>
<body>
    <!-- ENTETE DE LA PAGE -->
    <div class="header">
        <div class="menu">
            <div class="d-flex justify-content-between align-items-center px-4 py-3 header-menu">
                <div class="logo">
                    <img src="assets/img/logo.png" alt="logo" style="height: 50px;">
                </div>
                <ul class="d-flex gap-5 list-unstyled mb-0 menu-items">
                    <?php foreach ($menuItems as $item): ?>
                        <li><a href="<?= $item['href'] ?>"><?= $item['label'] ?></a></li>
                    <?php endforeach; ?>
                    <li>
                        <div class="menu-hamburger d-flex flex-column justify-content-between" style="height: 20px;">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Trait horizontal avec indicateur -->
            <div class="trait-menu-container">
                <hr class="trait-menu">
                <span class="indicator"></span>
            </div>
        </div>

        <div class="col-blue vertical-gauche d-flex flex-column justify-content-end align-items-center">
            <?php foreach ($socialIcons as $icon): ?>
                <img src="<?= $icon['src'] ?>" alt="<?= $icon['alt'] ?>" class="<?= $icon['class'] ?>">
            <?php endforeach; ?>
        </div>

        <div class="contenu position-absolute text-start">
            <h1 class="fw-bold"><?= $heroContent['title1'] ?></h1>
            <h1><?= $heroContent['title2'] ?></h1>
            <p class="texte-description"><?= $heroContent['description'] ?></p>

            <button class="btn-reservation">
                <?= $heroContent['button']['text'] ?>
                <span class="btn-circle"><?= $heroContent['button']['circle'] ?></span>
            </button>
        </div>
        
        <div class="carousel-container">
            <div class="carousel">
                <?php foreach($carouselImages as $index => $image): ?>
                    <img 
                        src="<?= $image['src'] ?>" 
                        alt="<?= $image['alt'] ?>" 
                        class="<?= $index === 0 ? 'active' : '' ?>"
                    >
                <?php endforeach; ?>
            </div>
            <button class="carousel-next btn-circle">></button>
        </div>
    </div>

    <!-- CORP DE LA PAGE -->
    <div class="apropos d-flex align-items-center" id="apropos" style="gap: 2rem;">
        <div class="propos col-7 h bg-red ms-auto d-flex flex-column justify-content-center align-items-start text-black p-5" style="height: 300px;">
            <h1><?= $aproposContent['titre1'] ?></h1>
            <h1 class="fw-bold pb-3"><?= $aproposContent['titre2'] ?></h1>
            <p class="pe-extra"><?= $aproposContent['description'] ?></p>
            <div class="pt-4">
                <h4><?= $aproposContent['inclusionsTitre'] ?></h4>
                <ul class="pe-extra custom-list">
                    <?php foreach($aproposContent['inclusions'] as $item): ?>
                        <li><?= $item ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>


        <div class="col-4 h bg-red me-0">
            <div class="slider-wrapper">
                <div class="slider-track d-flex align-items-center justify-content-center pt-5">
                    <?php foreach($carouselImagesP as $index => $image): ?>
                        <img 
                            src="<?= $image['src'] ?>" 
                            alt="<?= $image['alt'] ?>" 
                            class="slider-img <?= $index === 0 ? 'is-active' : '' ?>"
                        >
                    <?php endforeach; ?>
                </div>
                <button class="slider-next btn-circle">></button>
            </div>
        </div>
    </div>
    <div class="activites d-flex flex-column gap-5 align-items-center justify-content-center py-5">
        <div class="col-6 loko d-flex flex-column align-items-center justify-content-center text-center px-4 text-white" style="height: 28%; scale: 0.8;">
            <h1><?php echo $activitesContent["titre1"]; ?></h1>
            <h1 class="fw-bold"><?php echo $activitesContent["titre2"]; ?></h1>
            <p><?php echo $activitesContent["description"]; ?></p>
        </div>
        <div class="col-10 loko d-flex align-items-center justify-content-center" style="height: 38%; gap:6rem;">
            <?php foreach ($activites as $item): ?>
                <div class="cadreA col-1 loko text-white" style="height: 90%;">
                    <div class="cercle bg-white d-flex align-items-center justify-content-center">
                        <img class="<?php echo $item['class']; ?>" src="<?php echo $item['img']; ?>" alt="<?php echo $item['alt']; ?>">
                    </div>
                    <p class="px-3 py-1 text-center"><?php echo $item['texte']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="col-4 loko d-flex align-items-center justify-content-center text-white text-center" style="height: 18%;">
            <p style="font-size: 11px;">Flânez sur la Promenade des Bains, explorez les criques secrètes ou partez en mer depuis son port de plaisance. Saint-Raphaël, c'est la Côte d'Azur dans toute sa splendeur !</p>
        </div>
    </div>
    <!-- <script src="assets/js/carousel_header.js" defer></script> -->
    <script src="assets/js/carousel.js" defer></script>
</body>
</html>
