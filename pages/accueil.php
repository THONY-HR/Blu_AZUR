<?php include 'assets/data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/accueil/headers.css">
    <link rel="stylesheet" href="assets/css/accueil/apropos.css">
    <link rel="stylesheet" href="assets/css/accueil/activites.css">
    <link rel="stylesheet" href="assets/css/accueil/localisations.css">
    <link rel="stylesheet" href="assets/css/accueil/autreInformation.css">

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
    <div class="activites d-flex flex-column gap-5 align-items-center justify-content-center py-5" id="activites">
        <div class="col-6 d-flex flex-column align-items-center justify-content-center text-center px-4 text-white" style="height: 28%; scale: 0.8;">
            <h1><?php echo $activitesContent["titre1"]; ?></h1>
            <h1 class="fw-bold"><?php echo $activitesContent["titre2"]; ?></h1>
            <p><?php echo $activitesContent["description"]; ?></p>
        </div>
        <div class="col-10 d-flex align-items-center justify-content-center" style="height: 38%; gap:6rem;">
            <?php foreach ($activites as $item): ?>
                <div class="cadreA col-1 text-white" style="height: 90%;">
                    <div class="cercle bg-white d-flex align-items-center justify-content-center">
                        <img class="<?php echo $item['class']; ?>" src="<?php echo $item['img']; ?>" alt="<?php echo $item['alt']; ?>">
                    </div>
                    <p class="px-3 py-1 text-center"><?php echo $item['texte']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="col-4 d-flex align-items-center justify-content-center text-white text-center" style="height: 18%;">
            <p style="font-size: 11px;">Flânez sur la Promenade des Bains, explorez les criques secrètes ou partez en mer depuis son port de plaisance. Saint-Raphaël, c'est la Côte d'Azur dans toute sa splendeur !</p>
        </div>
    </div>
    <div class="localisation d-flex gap-5 align-items-center justify-content-center" id="localisation">
        <div class="local col-6 d-flex flex-column justify-content-center text-left px-5" style="height:80%;">
            <h2><?= $localisationContent['title1']?></h2>
            <h2 class="fw-bold"><?= $localisationContent['title2']?></h2>
            <p class="pt-3"><?= $localisationContent['description']?></p>
            <button class="btn-reservationL mt-3">
                <?= $localisationContent['button']['text'] ?>
                <span class="btn-circleL"><?= $heroContent['button']['circle'] ?></span>
            </button>
        </div>
        <div class="col-4 cover d-flex align-items-center justify-content-center px-5 position-relative" style="height: 80%;">
            
            <!-- Map placée au-dessus, indépendante du cadre -->
            <img class="map" src="<?php echo $imageLocalisation[0]['img']; ?>" alt="<?php echo $imageLocalisation[0]['alt']; ?>">
            <svg class="svg position-absolute" width="99" height="141" viewBox="0 0 99 141" fill="none" xmlns="http://www.w3.org/2000/svg">
                <?php echo $imageLocalisation[2]['img']; ?>
            </svg>

            <div class="col-10 cadre" style="height: 90%;">
                <img class="carte" src="<?php echo $imageLocalisation[1]['img']; ?>" alt="<?php echo $imageLocalisation[1]['alt']; ?>">    
            </div>
        </div>
    </div>
    <div class="localisation2 d-flex gap-5 align-items-center justify-content-center text-white">
        <div class="col-5 d-flex gap-5 align-items-center justify-content-center" style="height: 90%;">
            <img src="<?php echo $localisation['image']['src']; ?>" 
                alt="<?php echo $localisation['image']['alt']; ?>" 
                style="width: 60%;">
        </div>

        <div class="local2content col-4 d-flex flex-column align-items-center justify-content-center" style="height: 90%;">
            <div class="text-end">
                <h2><?php echo $localisation['titres']['titre1']; ?></h2>
                <h2><?php echo $localisation['titres']['titre2']; ?></h2>
            </div>
            <p class="text-justify px-4">
                <?php echo $localisation['description']; ?>
            </p>
        </div>
    </div>
    <div class="autreInfos">
        <div class="autreInfo d-flex flex-column align-items-center justify-content-center">
            <div class="col-8 loko d-flex justify-content-between" style="height:40%">
                <?php foreach (array_slice($autreInfos, 0, 2) as $info): ?>
                    <div class="col-6 loko masquer d-flex align-items-center justify-content-center position-relative" style="height:98%">
                        <img class="img-config-up" src="<?= $info['img'] ?>" alt="<?= $info['alt'] ?>">
                        <div class="contentAutreInfo position-absolute text-white">
                            <h4><?= $info['title1'] ?></h4>
                            <h4><?= $info['title2'] ?></h4>
                            <p><?= $info['text'] ?></p>
                            <?php if ($info['extra']): ?><p><?= $info['extra'] ?></p><?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="col-8 loko d-flex justify-content-between" style="height:50%">
                <?php foreach (array_slice($autreInfos, 2) as $info): ?>
                    <div class="col-4 loko masquer d-flex align-items-center justify-content-center position-relative" style="height:98%">
                        <img class="img-config-down" src="<?= $info['img'] ?>" alt="<?= $info['alt'] ?>">
                        <div class="contentAutreInfo position-absolute text-white">
                            <h4><?= $info['title1'] ?></h4>
                            <h4><?= $info['title2'] ?></h4>
                            <p><?= $info['text'] ?></p>
                            <?php if ($info['extra']): ?><p><?= $info['extra'] ?></p><?php endif; ?>
                            <?php if ($info['button']): ?>
                                <button class="btn-reservationL mt-3">
                                    <?= $info['button']['label'] ?>
                                    <span class="btn-circleL"><?= $info['button']['circle'] ?></span>
                                </button>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="reserve">

    </div>


    <script src="assets/js/carousel.js" defer></script>
</body>
</html>
