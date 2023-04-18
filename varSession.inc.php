<?php

session_start();

$_SESSION["categories"] = [
    "Coverart" => [
        [
            "name" => "THE SEPTEMBER WIND",
            "price" => '$100',
            "stock" => 10,
            "image" => "./IMAGE/japanese.jpg",
            "description" => "Définir le langage visuel de la City Pop des années 80. Plages immaculées, piscines étincelantes, bleu
            infini : Les peintures d'Hiroshi Nagai capturent la sensibilité de la côte ouest sur une série de pochettes de
            disques, en s'inspirant de l'optimisme des États-Unis des années 1950 et de la bulle économique du Japon des
            années 1980.",  
            "id" => 1, 
        ],
        [
            "name" => "RANGER SERIES",
            "price" => '$400',
            "stock" => 10,
            "image" => "./IMAGE/japanesepink.jpg",
            "description" => "Le style du créatif est presque comme un retour dans le temps, avec une combinaison de design graphique des
            années 80 et 90 et de palettes de couleurs vives, avec des références nostalgiques aux boomboxes et aux
            cassettes.",  
            "id" => 2, 
        ],
        [
            "name" => "RANGER SERIES",
            "price" => '$400',
            "stock" => 10,
            "image" => "./IMAGE/japaneseblue.jpg",
            "description" => "\"J'ai des tas d'inspirations et la plupart d'entre elles proviennent de publicités pop
            vintage et asiatiques\", explique Putra. \"Je peux m'inspirer d'une affiche, d'une pochette d'album, d'un
            panneau publicitaire, d'une publicité télévisée, de mon dessin animé japonais préféré quand j'étais enfant, et
            de jeux vidéo vintage comme Sega Saturn ou Nintendo 64.\"",
            "id" => 3,
        ],
        [
            "name" => "THE RED MAN",
            "price" => "$1.000",
            "stock" => 10,
            "image" => "./IMAGE/redman.jpg",
            "description" => "Unknown",
            "id" => 4,
        ],
        [
            "name" => "CHAFF AND DUST",
            "price" => "15ETH",
            "stock" => 10,
            "image" => "./IMAGE/sunrise.jpg",
            "description" => "Unknown artist",
            "id" => 5,
        ]
    ],
    "ArtConcret" => [
        [
            "name" => "THE BIRD MAN",
            "price" => "$699",
            "stock" => 10,
            "image" => "./IMAGE/hommeoiseau.jpg",
            "description" => "Oliveira, une artiste brésilienne , se concentre principalement sur le thème de l'amour en représentant des
            hommes avec des images émotionnelles telles que des oiseaux. L'artiste affirme que \"l'amour peut transformer
            les
            gens d'une manière qui est belle à saisir\".",
            "id" => 1,
        ],
        [
            "name" => "NHA RONG WHARF",
            "price" => "$2790",
            "stock" => 10,
            "image" => "./IMAGE/YearTiger.jpg",
            "description" => "Pendant la guerre de résistance contre les Français, notre artiste a enseigné à l'École des Beaux-Arts de
            la résistance à Viêt Bac. Entre 1959 et 1960, il a également donné des cours à l'Ecole des Beaux-Arts et des
            Métiers à Hanoi. Nguyen Tu Nghiem travaille souvent sur des thèmes culturels traditionnels vietnamiens, ici le
            cavalier mythique Thanh Gióng, traités avec une esthétique européenne moderniste se mêlant aux images
            populaires. Ils provoquent un fort sentiment de modernisme occidental avec une profonde empreinte asiatique.",
            "id" => 2,
        ],
        [
            "name" => "BEING IN LOVE EASES THE PAIN",
            "price" => "$4770",
            "stock" => 10,
            "image" => "./IMAGE/LeeMerrionHarret.jpg",
            "description" => "L'œuvre de Harriet Lee-Merrion, chargée d'émotion, complexe et réfléchie, est absolument époustouflante.
            Principalement réalisées en noir et blanc, mais avec des éclairs occasionnels de couleurs pastel, les
            compositions d'Harriet combinent des influences japonaises traditionnelles avec une imagerie moderne et
            onirique saisissante.",
            "id" => 3,
        ],
        [
            "name" => "REUNION DE FAMILLE",
            "price" => "$10000",
            "stock" => 10,
            "image" => "./IMAGE/Ba_Amadou.jpg",
            "description" => "Diplômé de l'Ecole des Beaux-Arts, il se fait connaître en Europe et notamment en France grâce à
            l'exposition \"L\'art sénégalais d'aujourd'hui\" qui se tient au Grand Palais à Paris, en 1974.
            Sa peinture est à la fois traditionnelle et moderne, elle décrit une Afrique nomade et rurale. Très attaché à
            ses racines, à sa ville natale qui se trouve dans la région sahélienne du Sénégal, le Sahel reste le thème
            unique de ses peintures. A travers ses œuvres, Amadou Bâ nous raconte une partie de son enfance.",
            "id" => 4,
        ],
        [
            "name" => "MIRIT BEN NUN/ SANS TITRE",
            "price" => "$15000",
            "stock" => 10,
            "image" => "./IMAGE/ZZZ_20.jpg",
            "description" => "Avec une détermination qui va jusqu'à l'obsession, Mirit Ben-Nun revient sans cesse à son art de la
            décoration méticuleuse. Une forte présence de l'ornementation primitive confère à l'œuvre une facette tribale
            d'une part et une touche féminine d'autre part, englobant entre autres la broderie, l'enfilage de perles et le
            tissage. L'envie d'embellir de Ben-Nun porte en elle une strate archétypale, parfois mythique, qui lui permet
            de s'exprimer de manière authentique.",
            "id" => 5,
        ]
    ],
    "Virtualart" => [
        [
            "name" => "GBC #8681",
            "price" => "1ETH",
            "stock" => 10,
            "image" => "./IMAGE/GBC_8681-min.jpg",
            "description" => "Le GMX Blueberry Club est une collection de 10 000 NFTs (jetons non fongibles) vivant sur Arbitrum qui sont composés de +130 traits dessinés à la main. Le succès de GMX.io vient de sa nouveauté, un protocole qui fonctionne pour tous les participants. Nous admirons les principes du fondateur X. Honnête, juste, gentil et un génie acharné qui traite tout le monde sur un pied d'égalité. Nous voulons rester fidèles à ces principe",
            "id" => 1,
        ],
        [
            "name" => "SOVIET CROCO",
            "price" => "2ETH",
            "stock" => 10,
            "image" => "./IMAGE/NFTCROCO.jpg",
            "description" => "Le docteur Troller a connu la célébrité l'année dernière lorsque des milliers de livres sterling d'œuvres d'art ont été volées dans sa galerie Honest à Londres. Quatre œuvres originales de l'artiste étaient accrochées dans Berwick Street à Soho, avec une boîte de collecte sur le mur pour les dons, mais toutes les œuvres ont été volées en quelques heures.",
            "id" => 2,
        ],
        [
            "name" => "ORIGINATOR #3389",
            "price" => "$4.770",
            "stock" => 10,
            "image" => "./IMAGE/ASTRO.jpg",
            "description" => "Les ORIGINATEURS sont une collection unique de 1 111 astronautes s'aventurant à travers le temps.",
            "id" => 3,
        ],
        [
            "name" => "XOXO BY ALFRED STOLL",
            "price" => "$1.663",
            "stock" => 10,
            "image" => "./IMAGE/XOXO.jpg",
            "description" => "Germany Mixed Media, Digital on Canvas Size: 80 W x 120 H x 2 D cm",
            "id" => 4,
        ],
        [
            "name" => "DOODLE #8697",
            "price" => "15ETH",
            "stock" => 10,
            "image" => "./IMAGE/DOODLES.jpg",
            "description" => "Un projet communautaire d'objets à collectionner mettant en vedette l'art de Burnt Toast. Les Doodles se déclinent dans une joyeuse gamme de couleurs, de traits et de tailles, avec une taille de collection de 10 000 unités. Chaque Doodle permet à son propriétaire de voter pour des expériences et des activations financées par le Trésor communautaire des Doodles.",
            "id" => 5,
        ]
    ]
];

// Définir la variable de session contenant le tableau associatif des produits
?>



<?$_SESSION['products'] = $products;

?>