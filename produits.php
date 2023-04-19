<?php
  include ("varSession.inc.php");
  // On récupère les catégories et on charge la css en fonction
  $category = $_GET['categories'];
  if ($category == "Coverart"){
    echo '<link rel="stylesheet" href="./CSS/CoverArt.css">';
  }
  else if ($category == "ArtConcret"){
    echo '<link rel="stylesheet" href="./CSS/Artmatériel.css">';
  }
  else{
    echo '<link rel="stylesheet" href="./CSS/Artvirtuel.css">';
  }
?>


<html>
  <div class="grid-container">
  <head>
    <script src="JS/produit.js"></script>
    <div class="item1">
      <nav>
        <ul class="menuheader">
          <li><a href="LOGO" class="LOGO"></a></li>
          <?php include ("header.php"); ?>
        </ul>
      </nav>
    </div>
  </head>

  <body>
    <div class="item2">
      <ul id="menu-accordeon">
        <li><a href=""> MENU </a>
          <ul>
            <li><a href="Index.php">ACCUEIL</a></li>
            <li><a href="<?php echo 'produits.php?categories=ArtConcret';?>" class="lien" id="Artmatériel">ART CONCRET</a></li>
            <li><a href="<?php echo 'produits.php?categories=Virtualart';?>" class="lien">ART VIRTUEL</a></li>
            <li><a href="<?php echo 'produits.php?categories=Coverart';?>" class="lien">COVER ART</a></li>
            <li><a href="EspaceConnexion.php">CONTACT</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <?php

      // Bon les gars vous avez merdé vos classes CSS, ducoup j'ai du faire ca:
      $numberWords = ['un', 'deux', 'trois', 'quatre', 'cinq', 'six', 'sept', 'huit', 'neuf', 'dix'];
      $numberWordsEn = ['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten'];
      //Le counter permet de tracker l'id du produit vu que c'est un foreach qui boucle sur les produits
      // si le counter est a 1, on récupere le deuxieme element de numberWords et numberWordsEn
      $counter = 0;
      //On vérifie qu'on récupère les catégories
      if (isset($_GET['categories']))
      {
          // Check if the specified category exists in the session array
          if (isset($_SESSION['categories'][$category]))
          {
              //On prépare la syntaxe pour afficher les produits
              echo '<div class="product-container">';
              // Loop through the products in the specified category and display them
              foreach ($_SESSION['categories'][$category] as $product)
              {
                  echo ' <div class="product-' . $numberWordsEn[$counter] . '" data-product-index="' . $counter . '">';
                  echo ' <div class="bigcontainer">';
                  echo ' <div class="container' . $numberWords[$counter] . '">';
                  echo ' <div class="overlay">';
                  echo ' <div class="items">' . '</div>';
                  echo ' <div class="items head">';
                  echo '<h2>' . $product['name'] . '</h2>';
                  echo '<hr>';
                  echo '</div>';
                  echo '<div class="items price">';
                  echo '<h4 class="old">' . $product['price'] . '</h4>';
                  echo '</div>';
                  echo '<div class="items cart">';
                  echo '<p id="d' . $counter . '">Quantité en stock: <span id="stock' . $counter . '">' . $product['stock'] . '</span></p>';
                  echo '<p> Quantité demandée: <span id="quantite' . $counter . '">0</span></p>';
                  echo '<button onclick="augmenterQuantite(' . $counter . ')">+</button>';
                  echo '<button onclick="diminuerQuantite(' . $counter . ')">-</button>';
                  echo '<button onclick="addToBasket(' . $counter . ')">Ajouter au panier</button>';
                  echo '</div> Eterne/';
                  echo '</div>';
                  echo '</div>';
                  echo '</div>';
                  echo '</div>';
                  echo '<div class="description-product-' . $numberWordsEn[$counter] . '">';
                  echo '<h2>' . $product['name'] . '</h2>';
                  echo '<h5>' . $product['description'] . '</h5>';
                  echo '</div>';
                  $counter++;
              }
              echo '</div>';
          }
          else
          {
              echo '<p>Category not found.</p>';
          }
      }
      else
      {
          echo '<p>No category specified.</p>';
      }
    ?>
  <div class="item5">
    <?php include ("footer.php"); ?>
  </div>
  </div>
  </body>
</html>
