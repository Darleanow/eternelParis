<html>
<link rel="stylesheet" href="CSS/CoverArt.css">
<script src="JS/produit.js"></script>
<div class="grid-container">

  <head>
    <div class="item1">
      <nav>
        <ul class="menuheader">
          <li><a href="LOGO" class="LOGO">
           
          </a></li>
          <?php include("header.php"); ?>

        </ul>
      </nav>
    </div>



  </head>

  <body>
    <div class="item2">
      <ul id="menu-accordeon">
        <li><a href="#"> MENU </a>
          <ul>
            <li><a href="Index.php">ACCUEIL</a></li>
            <li><a href="Artmatériel.php">ART CONCRET</a></li>
            <li><a href="Artvirtuel.php">ART VIRTUEL</a></li>
            <li><a href="CoverArt.php">COVER ART</a></li>
            <li><a href="Formulairevrai.php">CONTACT</a></li>
          </ul>
        </li>



    </div>
    <!--Création des cartes spécifique à chaque produit-->
    <div class="product-container">
      <div class="product-one">
        <div class="bigcontainer">
          <div class="containerun">
            <div class="overlay">
              <div class="items"></div>
              <div class="items head">
                <h2>THE SEPTEMBER WIND </h2>
                <hr>
              </div>
              <div class="items price">
                <h4 class="old">$100</h4>
              </div>
              <div class="items cart">
                <i class="fa fa-shopping-cart"></i>
                <p id="d1">Quantité en stock: <span id="stock1">10</span></p>
                <p> Quantité demandée: <span id="quantite1">0</span></p>
                <button onclick="augmenterQuantite(1)">+</button>
                <button onclick="diminuerQuantite(1)">-</button>  
                <button onclick="toggleVisibility(1)">Cacher/Afficher</button>
              </div> Eterne/
            </div>
          </div>
        </div>
      </div>
      <div class="product-two">
        <div class="bigcontainer">
          <div class="containerdeux">
            <div class="overlay">
              <div class="items"></div>
              <div class="items head">
                <h3>RANGER SERIES</h3>
                <hr>
              </div>
              <div class="items price">
                <h4 class="old">$400</h4>
              </div>
              <div class="items cart">
                <i class="fa fa-shopping-cart"></i>
                <p id="d2">Quantité en stock: <span id="stock2">10</span></p><p> Quantité demandée: <span id="quantite2">0</span></p>
                <button onclick="augmenterQuantite(2)">+</button>
                <button onclick="diminuerQuantite(2)">-</button> 
                <button onclick="toggleVisibility(2)">Cacher/Afficher</button>
              </div> Eterne/
            </div>
          </div>

        </div>
      </div>
      <div class="product-three">
        <div class="containertrois">
          <div class="bigcontainer">

            <div class="overlay">
              <div class="items"></div>
              <div class="items head">
                <h3>RANGER SERIES </h3>
                <hr>
              </div>
              <div class="items price">
                <h4 class="old">$400</h4>
              </div>
              <div class="items cart">
                <i class="fa fa-shopping-cart"></i>
                <p id="d3">Quantité en stock: <span id="stock3">10</span></p><p> Quantité demandée: <span id="quantite3">0</span></p>
                <button onclick="augmenterQuantite(3)">+</button>
                <button onclick="diminuerQuantite(3)">-</button>     
                <button onclick="toggleVisibility(3)">Cacher/Afficher</button>
              </div> Eterne/
            </div>
          </div>
        </div>
      </div>

      <div class="product-four">
        <div class="containerquatre">
          <div class="bigcontainer">

            <div class="overlay">
              <div class="items"></div>
              <div class="items head">
                <h3>THE RED MAN</h3>
                <hr>
              </div>
              <div class="items price">
                <h4 class="old">€1.000
                </h4>
              </div>
              <div class="items cart">
                <i class="fa fa-shopping-cart"></i>
                <p id="d4">Quantité en stock: <span id="stock4">10</span></p><p> Quantité demandée: <span id="quantite4">0</span></p>
                <button onclick="augmenterQuantite(4)">+</button>
                <button onclick="diminuerQuantite(4)">-</button> 
                <button onclick="toggleVisibility(4)">Cacher/Afficher</button>
              </div> Eterne/
            </div>
          </div>
        </div>
      </div>
      <div class="product-five">
        <div class="containercinq">
          <div class="bigcontainer">

            <div class="overlay">
              <div class="items"></div>
              <div class="items head">
                <h3>CHAFF AND DUST
                </h3>
                <hr>
              </div>
              <div class="items price">
                <h4 class="old">15:ETH</h4>
              </div>
              <div class="items cart">
                <i class="fa fa-shopping-cart"></i>
                <p id="d5">Quantité en stock: <span id="stock5">10</span></p><p> Quantité demandée: <span id="quantite5">0</span></p>
                <button onclick="augmenterQuantite(5)">+</button>
                <button onclick="diminuerQuantite(5)">-</button>
                <button onclick="toggleVisibility(5)">Cacher/Afficher</button>
              </div> Eterne/
            </div>
          </div>
        </div>

      </div>
      <!-- Création de la partie de gauche, pour les descriptions-->

      <div class="description-product-one">

        <h2> THE SEPTEMBER WIND </h2>
        <h5>Définir le langage visuel de la City Pop des années 80. Plages immaculées, piscines étincelantes, bleu
          infini : Les peintures d'Hiroshi Nagai capturent la sensibilité de la côte ouest sur une série de pochettes de
          disques, en s'inspirant de l'optimisme des États-Unis des années 1950 et de la bulle économique du Japon des
          années 1980. </h5>

      </div>
      <div class="description-product-two">
        <h2> RANGER SERIES <br>BY ARDHIRA PUTRA </h2>
        <h5> Le style du créatif est presque comme un retour dans le temps, avec une combinaison de design graphique des
          années 80 et 90 et de palettes de couleurs vives, avec des références nostalgiques aux boomboxes et aux
          cassettes. </h5>
      </div>
      <div class="description-product-three">
        <h2> RANGER SERIES <br>BY ARDHIRA PUTRA </h2>
        <h5>"J'ai des tas d'inspirations et la plupart d'entre elles proviennent de publicités pop
          vintage et asiatiques", explique Putra. "Je peux m'inspirer d'une affiche, d'une pochette d'album, d'un
          panneau publicitaire, d'une publicité télévisée, de mon dessin animé japonais préféré quand j'étais enfant, et
          de jeux vidéo vintage comme Sega Saturn ou Nintendo 64."</h5>

      </div>
      <div class="description-product-four">
        <h2> THE RED MAN</h2>
        <h5>Unknown </h5>



      </div>
      <div class="description-product-five">
        <h2> CHAFF AND DUST </h2>
        <h5>Unknown artist</h5>


      </div>
    </div>


    <div class="item5">

      <!-- Page de bas de site-->
      <?php include("footer.php"); ?>







    </div>



  </body>

</div>

</html>