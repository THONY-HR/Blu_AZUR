<!--
    Par:
        HERINANTENAINA
        Rantonrinina Anthony
        +261 34 85 178 51
-->
        
<?php
                                                                // HEADER DATA
    $menuItems = [
        ['class' => "",'href' => '#apropos', 'label' => 'A propos'],
        ['class' => "",'href' => '#localisation', 'label' => 'Localisation'],
        ['class' => "",'href' => '#activites', 'label' => 'Activités'],
        ['class' => "lien-config",'href' => '#reserve', 'label' => 'Réservé']
    ];

    $socialIcons = [
        ['src' => 'assets/img/fb.png', 'href' => '','alt' => 'Facebook', 'class' => 'fb-icon'],
        ['src' => 'assets/img/yt.png', 'href' => '','alt' => 'YouTube', 'class' => ''],
        ['src' => 'assets/img/tw.png', 'href' => '','alt' => 'Twitter', 'class' => ''],
        ['src' => 'assets/img/ig.png', 'href' => '','alt' => 'Instagram', 'class' => '']
    ];


    $heroContent = [
        'title1' => 'Votre évasion',
        'title2' => 'sur la Côte d\'Azur !',
        'description' => "Blu Azur vous invite à découvrir le charme de Saint-Raphaël, une destination d'exception nichée entre Cannes et Saint-Tropez. 
        Nos appartements tout équipés, situés dans un domaine privé sécurisé, offrent un cadre verdoyant et paisible, à quelques pas de la marina de Santa Lucia, 
        des plages de sable fin et du centre-ville animé. Profitez d'un séjour alliant confort, sérénité et élégance au cœur de la Riviera française !",
        'button' => [
            'text' => 'Réservez dès maintenant votre séjour !',
            'circle' => '>',
            'href' => '#reserve'
        ]
    ];

    $carouselImages = [
        [
            "src" => "assets/img/piscine1.png",
            "alt" => "Piscine 1"
        ],
        [
            "src" => "assets/img/piscine2.png",
            "alt" => "Piscine 2"
        ]
    ];

                                                                // APROPOS DATA

    $aproposContent = [
        "titre1" => "Le confort et la sérénité d'un",
        "titre2" => "appartement privé",
        "description" => "Blu Azur vous propose des appartements élégants et spacieux, conçus pour accueillir de 2 à 6 personnes. Offrant un cadre confortable et moderne, ils sont parfaits pour une escapade détente ou un séjour prolongé.",
        "inclusionsTitre" => "Les inclusions:",
        "inclusions" => [
            "Stationnement privé",
            "Piscine extérieure avec chaises longues",
            "Linge de lit et serviettes",
            "Télévision, téléphone et Wi-Fi (accès au salon)",
            "Réfrigérateur, cuisinière, lave-vaisselle, vaisselle",
            "Kit bébé: comprend un lit parapluie avec un vrai matelas et une chaise haute",
            "Autres commodités en prêt à la réception: jeux de société, livres, raquettes et balles de ping-pong, sèche-cheveux, fer et planche à repasser, adaptateur pour les prises étrangères et cache-prises pour les enfants."
        ]
    ];

    $carouselImagesP = [
        [
            "src" => "assets/img/apropos1.png",
            "alt" => "SALON "
        ],
        [
            "src" => "assets/img/apropos2.png",
            "alt" => "Cuisine"
        ]
    ];

                                                                // ACTIVITES DATA

    $activitesContent = [
        "titre1" => "Saint Raphaël, l'endroit parfait pour",
        "titre2" => "vivre la Côte d'Azur",
        "description" => "Avec ses plages dorées, ses 300 jours de soleil et ses calanques sauvages, Saint-Raphaël est une destination de rêve. Entre mer turquoise et rochers rouges de l'Estérel, elle offre un cadre idyllique pour la détente et l'aventure.",
        "footDesc" => "Flânez sur la Promenade des Bains, explorez les criques secrètes ou partez en mer depuis son port de plaisance. Saint-Raphaël, c'est la Côte d'Azur dans toute sa splendeur !"
    ];

    $activites = [
        [
            "img" => "assets/img/swimming.png",
            "alt" => "Swimming",
            "texte" => "Sports nautiques, plongée, voile",
            "class" => ""
        ],
        [
            "img" => "assets/img/city.png",
            "alt" => "City",
            "texte" => "Randonnées et vélo dans l'Estérel",
            "class" => ""
        ],
        [
            "img" => "assets/img/casino.png",
            "alt" => "Casino",
            "texte" => "Casino et vie nocturne animée",
            "class" => ""
        ],
        [
            "img" => "assets/img/village.png",
            "alt" => "Village",
            "texte" => "Villages perchés et marchés provençaux",
            "class" => ""
        ],
        [
            "img" => "assets/img/golf.png",
            "alt" => "Golf",
            "texte" => "Un paradis pour les golfeurs ",
            "class" => "retrecir"
        ],
        [
            "img" => "assets/img/mountains.png",
            "alt" => "Montagne",
            "texte" => "Montagne et vélo de route",
            "class" => "retrecir"
        ]
    ];

                                                                // LOCALISATION DATA

    $localisationContent = [
        'title1' => 'Où se trouve Blu Azur à',
        'title2' => 'Saint-Raphaël ?',
        'description' => "Blu Azur est idéalement situé entre Saint-Tropez et Cannes, au cœur de l'une des plus belles stations balnéaires de France. Nos appartements se trouvent dans un domaine privé sécurisé, entouré de verdure, à quelques minutes à pied de la plage sablonneuse de Santa Lucia et de la marina. Proche du centre-ville de Saint-Raphaël, la résidence permet un accès facile aux boutiques, restaurants et animations locales. Une station d'arrêt d'autobus est située à la sortie du site, facilitant les déplacements, et une boulangerie à proximité vous offre du pain frais chaque matin pour bien commencer la journée.",

        'button' => [
            'text' => 'Comment s’y rendre ?',
            'circle' => '>',
            'href' => '#reserve'
        ]
    ];

    $imageLocalisation = [
        [
            'img' => 'assets/img/map.png',
            'alt' => 'Map'
        ],
        [
            'img' => 'assets/img/carte.png',
            'alt' => 'Carte'
        ],
        [
            'img' => '<path d="M49.4998 140.083C47.8762 140.083 46.4846 139.619 45.3248 138.692C44.1651 137.764 43.2953 136.546 42.7155 135.039C40.512 128.544 37.7287 122.456 34.3655 116.773C31.1182 111.09 26.5373 104.422 20.6228 96.7677C14.7082 89.1136 9.89532 81.8073 6.18421 74.849C2.58907 67.8906 0.791504 59.4827 0.791504 49.625C0.791504 36.0563 5.48838 24.575 14.8821 15.1813C24.3918 5.67155 35.9311 0.916687 49.4998 0.916687C63.0686 0.916687 74.5498 5.67155 83.9436 15.1813C93.4533 24.575 98.2082 36.0563 98.2082 49.625C98.2082 60.1785 96.1786 68.9924 92.1196 76.0667C88.1766 83.025 83.5957 89.9254 78.3769 96.7677C72.1144 105.118 67.3596 112.076 64.1123 117.643C60.9811 123.093 58.3717 128.892 56.2842 135.039C55.7043 136.662 54.7766 137.938 53.5009 138.866C52.3412 139.677 51.0075 140.083 49.4998 140.083ZM49.4998 67.0209C54.3707 67.0209 58.4877 65.3393 61.8509 61.9761C65.2141 58.6129 66.8957 54.4959 66.8957 49.625C66.8957 44.7542 65.2141 40.6372 61.8509 37.274C58.4877 33.9108 54.3707 32.2292 49.4998 32.2292C44.629 32.2292 40.512 33.9108 37.1488 37.274C33.7856 40.6372 32.104 44.7542 32.104 49.625C32.104 54.4959 33.7856 58.6129 37.1488 61.9761C40.512 65.3393 44.629 67.0209 49.4998 67.0209Z" fill="#FF4A4A"/>',
            'alt' => 'svg Localisation'
        ]
    ];

    $localisation = [
        "image" => [
            "src" => "assets/img/grp-localisation2.png",
            "alt" => "Groupe image de paysage",
        ],
        "titres" => [
            "titre1" => "Un point de départ idéal",
            "titre2" => "pour <span class=\"fw-bold\">découvrir la Côte d'Azur !</span>"
        ],
        "description" => "Entre mer et montagne, Saint-Raphaël est une destination idéale pour les amateurs de plein air et de découvertes. Randonnées dans le Massif de l’Estérel, sports nautiques sur les eaux cristallines de la Méditerranée, balades en bateau vers les îles de Lérins ou encore golf et cyclisme sur des parcours panoramiques, chaque journée offre son lot d’aventures. Entre marchés provençaux, villages perchés et animations locales, l’art de vivre azuréen se dévoile à chaque instant, faisant de Saint-Raphaël un lieu vibrant et inoubliable."
    ];

                                                                // AUTRE DATA

    $autreInfos = [
        [
            "img" => "assets/img/stPaulDeVence2.png",
            "alt" => "ST PAUL DE VENCE 2",
            "title1" => "Un patrimoine culturel",
            "title2" => "d’exception",
            "text" => "De Picasso à Cocteau, la Côte d’Azur a toujours été une terre d’inspiration pour les artistes. Musées, galeries et sites historiques jalonnent la région, offrant un voyage au cœur de l’art et de l’histoire entre Saint-Raphaël, Antibes et Saint-Paul-de-Vence.",
            "extra" => "À voir: <a href='#'>Le Festival de Cannes, Carnaval de Nice, Fête du Citron</a>",
            "button" => null
        ],
        [
            "img" => "assets/img/laRouteNational5.png",
            "alt" => "Route Nationale 5",
            "title1" => "Le sport au rythme de la Méditerranée",
            "title2" => "",
            "text" => "Du légendaire Grand Prix de Monaco aux défis de l’Ironman, en passant par le Marathon des Alpes-Maritimes, la région vibre au rythme des grands événements sportifs. Cyclisme sur la Route des Crêtes, golf sur des parcours prestigieux et voile lors des Régates de Saint-Tropez complètent ce décor idéal pour les amateurs de sport et d’adrénaline.",
            "extra" => "À voir: <a href='#'>Grand prix de Monaco, Ironman France - Nice, Marathon des Alpes-Maritimes, Régates de Saint-Tropez</a>",
            "button" => null
        ],
        [
            "img" => "assets/img/fayanceTourettes.png",
            "alt" => "Fayence Tourettes",
            "title1" => "Une destination gourmande",
            "title2" => "et authentique",
            "text" => "Les marchés provençaux dévoilent des saveurs du terroir, entre fromages affinés, huile d’olive et spécialités méditerranéennes. Vignerons passionnés et restaurants raffinés offrent une expérience gastronomique où tradition et créativité se rencontrent dans un cadre enchanteur.",
            "extra" => "",
            "button" => [
                "label" => "Consulter la liste des meilleurs restaurants",
                "circle" => ">"
            ]
        ],
        [
            "img" => "assets/img/portGrimaude.png",
            "alt" => "Port Grimaude",
            "title1" => "Des expériences inoubliables",
            "title2" => "en famille",
            "text" => "Entre villages pittoresques, marchés publics animés et escapades sur la route du littoral, Saint-Raphaël propose un cadre idéal pour partager des moments inoubliables. La diversité des activités en plein air fait de la région une destination prisée par les amateurs de découvertes et d’aventures en famille.",
            "extra" => "",
            "button" => null
        ],
        [
            "img" => "assets/img/capDramont2.png",
            "alt" => "Cap Dramont",
            "title1" => "L’évasion en pleine nature",
            "title2" => "",
            "text" => "Le Massif de l’Estérel déploie ses roches rouges entre ciel et mer, offrant des panoramas spectaculaires. Randonnées, balades côtières et sentiers sauvages permettent de s’imprégner d’un environnement préservé, idéal pour une parenthèse hors du temps.",
            "extra" => "À voir: Grand Canyon du Verdon",
            "button" => [
                "label" => "Consulter la liste des sentiers pédestres",
                "circle" => ">"
            ]
        ],
    ];

                                                                // RESERVATIONS DATA

    $reserve = [
        "title" => "Réservations",
        "description" => "<b>Offrez-vous un séjour inoubliable</b> dans l’un de nos appartements Blu Azur. Profitez d’un cadre exceptionnel, entre confort, détente et découvertes, au cœur de Saint-Raphaël.",
        "button" => [
            "text" => "Réservez dès maintenant votre séjour !",
            "icon" => ">",
            "class" => "btn-config btn-reservationL"
        ]
    ];

                                                                // FOOTER DATA

    $footer = [
        "logo" => "assets/img/logo.png",
        "contactTitle" => "Contactez-nous",
        "contacts" => [
            [
                "icon" => "assets/img/email.png",
                "text" => "info@bluazur.com"
            ],
            [
                "icon" => "assets/img/call.png",
                "text" => "+1 555 555-5555"
            ],
            [
                "icon" => "assets/img/facebook.png",
                "text" => "@ BLU Azur"
            ]
        ],
        "copyright" => "© Tous droits réservés à Blu Azur"
    ];