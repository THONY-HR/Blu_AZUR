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
            <img class="map" src="assets/img/map.png" alt="Map">
            <svg class="svg position-absolute" width="99" height="141" viewBox="0 0 99 141" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M49.4998 140.083C47.8762 140.083 46.4846 139.619 45.3248 138.692C44.1651 137.764 43.2953 136.546 42.7155 135.039C40.512 128.544 37.7287 122.456 34.3655 116.773C31.1182 111.09 26.5373 104.422 20.6228 96.7677C14.7082 89.1136 9.89532 81.8073 6.18421 74.849C2.58907 67.8906 0.791504 59.4827 0.791504 49.625C0.791504 36.0563 5.48838 24.575 14.8821 15.1813C24.3918 5.67155 35.9311 0.916687 49.4998 0.916687C63.0686 0.916687 74.5498 5.67155 83.9436 15.1813C93.4533 24.575 98.2082 36.0563 98.2082 49.625C98.2082 60.1785 96.1786 68.9924 92.1196 76.0667C88.1766 83.025 83.5957 89.9254 78.3769 96.7677C72.1144 105.118 67.3596 112.076 64.1123 117.643C60.9811 123.093 58.3717 128.892 56.2842 135.039C55.7043 136.662 54.7766 137.938 53.5009 138.866C52.3412 139.677 51.0075 140.083 49.4998 140.083ZM49.4998 67.0209C54.3707 67.0209 58.4877 65.3393 61.8509 61.9761C65.2141 58.6129 66.8957 54.4959 66.8957 49.625C66.8957 44.7542 65.2141 40.6372 61.8509 37.274C58.4877 33.9108 54.3707 32.2292 49.4998 32.2292C44.629 32.2292 40.512 33.9108 37.1488 37.274C33.7856 40.6372 32.104 44.7542 32.104 49.625C32.104 54.4959 33.7856 58.6129 37.1488 61.9761C40.512 65.3393 44.629 67.0209 49.4998 67.0209Z" fill="#FF4A4A"/>
            </svg>

            <div class="col-10 cadre" style="height: 90%;">
                <img class="carte" src="assets/img/carte.png" alt="carte">    
            </div>
        </div>

    </div>

    <!-- <script src="assets/js/carousel_header.js" defer></script> -->
    <script src="assets/js/carousel.js" defer></script>
</body>
</html>
