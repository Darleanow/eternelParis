<html>
  <link rel="stylesheet" href="CSS/Artmatériel.css">
  <script src="JS/produit.js"></script>

<div class="grid-container">

  <head>
    <div class="item1">
      <nav>
        <ul class="menuheader">
          <li><a href="LOGO" class="LOGO"></a></li>
          <?php include("header.php"); ?>

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
            <li><a href="Artmatériel.php">ART CONCRET</a></li>
            <li><a href="Artvirtuel.php">ART VIRTUEL</a></li>
            <li><a href="CoverART.php">COVER ART</a></li>
            <li><a href="EspaceConnexion.php">CONTACT</a></li>
          </ul>
        </li>



    </div>

    <div class="product-container">
      <div class="product-one">
        <div class="bigcontainer">
          <div class="containerun">
            <div class="overlay">
              <div class="items"></div>
              <div class="items head">
                <h2>THE BIRD MAN</h2>
                <hr>
              </div>
              <div class="items price">
                <h4 class="old">$699</h4>
              </div>
              <div class="items cart">
                <p id="d1">Quantité en stock: <span id="stock1">10</span></p><p> Quantité demandée: <span id="quantite1">0</span></p>
                <button onclick="augmenterQuantite(1)">+</button>
                <button onclick="diminuerQuantite(1)">-</button>  
                <button onclick="toggleVisibility(1)">Cacher/Afficher</button>
              </div>Eterne/
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
                <h3>NHA RONG WHARF</h3>
                <hr>
              </div>
              <div class="items price">
                <h4 class="old">$2.790</h4>
              </div>
              <div class="items cart">
                <i class="fa fa-shopping-cart"></i>
                <p id="d2">Quantité en stock: <span id="stock2">10</span></p><p> Quantité demandée: <span id="quantite2">0</span></p>
                <button onclick="diminuerQuantite(2)">-</button>  
                <button onclick="augmenterQuantite(2)">+</button>
                <button onclick="toggleVisibility(2)">Cacher/Afficher</button> </div> Eterne/
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
                <h3>BEING IN LOVE EASES THE PAIN</h3>
                <hr>
              </div>
              <div class="items price">
                <h4 class="old">$4.770</h4>
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
                <h3>REUNION DE FAMILLE</h3>
                <hr>
              </div>
              <div class="items price">
                <h4 class="old">$10.000</h4>
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
                <h3>MIRIT BEN NUN/ SANS TITRE</h3>
                <hr>
              </div>
              <div class="items price">
                <h4 class="old">$15.000</h4>
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
      <div class="description-product-one">

        <h2> The Birdman </h2> <h5>Oliveira, une artiste brésilienne , se concentre principalement sur le thème de l'amour en représentant des
          hommes avec des images émotionnelles telles que des oiseaux. L'artiste affirme que "l'amour peut transformer
          les
          gens d'une manière qui est belle à saisir".</h5>
      </div>
      <div class="description-product-two">
        <h2> NHA RONG WHARF </h2>
        <h5> Pendant la guerre de résistance contre les Français, notre artiste a enseigné à l'École des Beaux-Arts de
          la résistance à Viêt Bac. Entre 1959 et 1960, il a également donné des cours à l'Ecole des Beaux-Arts et des
          Métiers à Hanoi. Nguyen Tu Nghiem travaille souvent sur des thèmes culturels traditionnels vietnamiens, ici le
          cavalier mythique Thanh Gióng, traités avec une esthétique européenne moderniste se mêlant aux images
          populaires. Ils provoquent un fort sentiment de modernisme occidental avec une profonde empreinte asiatique.
      </div>
      <div class="description-product-three">
        <h2>BEING IN LOVE EASES THE PAIN</h2>
        <h5>L'œuvre de Harriet Lee-Merrion, chargée d'émotion, complexe et réfléchie, est absolument époustouflante.
          Principalement réalisées en noir et blanc, mais avec des éclairs occasionnels de couleurs pastel, les
          compositions d'Harriet combinent des influences japonaises traditionnelles avec une imagerie moderne et
          onirique saisissante.</h5>

      </div>
      <div class="description-product-four">
        <h2> REUNION DE FAMILLE </h2>
        <h5>Diplômé de l'Ecole des Beaux-Arts, il se fait connaître en Europe et notamment en France grâce à
          l'exposition "L'art sénégalais d'aujourd'hui" qui se tient au Grand Palais à Paris, en 1974.
          Sa peinture est à la fois traditionnelle et moderne, elle décrit une Afrique nomade et rurale. Très attaché à
          ses racines, à sa ville natale qui se trouve dans la région sahélienne du Sénégal, le Sahel reste le thème
          unique de ses peintures. A travers ses œuvres, Amadou Bâ nous raconte une partie de son enfance.



      </div>
      <div class="description-product-five">
        <h2> SANS TITRE </h2>
        <h5>Avec une détermination qui va jusqu'à l'obsession, Mirit Ben-Nun revient sans cesse à son art de la
          décoration méticuleuse. Une forte présence de l'ornementation primitive confère à l'œuvre une facette tribale
          d'une part et une touche féminine d'autre part, englobant entre autres la broderie, l'enfilage de perles et le
          tissage. L'envie d'embellir de Ben-Nun porte en elle une strate archétypale, parfois mythique, qui lui permet
          de s'exprimer de manière authentique. </h5>



      </div>
    </div>


    <div class="item5">


    <?php include("footer.php"); ?>




    </div>



  </body>

</div>

</html>
