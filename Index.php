
<html class="biggrid">

<link rel="stylesheet" href="CSS/Index.css">


<header class="biggrid-itemun">

    <nav>
        <ul class="menuheader"> <!-- Menu Header-->

            <li><a href="Index.html" class="LOGO">
           
            </a></li>

            <?php include("header.php"); ?>

        </ul>
    </nav>

</header>

<!-- Menu Acordéon-->

<body class="biggrid-itemdeux">
    <div class="container">
        <div class="un">
            <div class="child"> <a href="Index.php" class="lien"><mark> Accueil </mark></a> </div>
        </div>
        <div class="deux">
            <div class="child"> <a href="<?php echo 'produits.php?categories=ArtConcret';?>" class="lien" id="Artmatériel"><mark> Art concret </mark></a>
            </div>
        </div>
        <div class="trois">
            <div class="child"> <a href="<?php echo 'produits.php?categories=Virtualart';?>" class="lien"><mark> Art virtuel </mark></a></div>
        </div>
        <div class="quatre">
            <div class="child"> <a href="<?php echo 'produits.php?categories=Coverart';?>" class="lien"><mark> COVER ART</mark></a></div>
        </div>
    </div>

    <!-- Création de la page du bas -->
    <footer class="biggrid-itemtrois">
        <!-- Création de la page du bas-->
        <!-- Création d'une grille afin de mieux compartimenter les élements-->
        <?php include("footer.php"); ?>







</html>