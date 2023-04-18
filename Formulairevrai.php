<html>

    <link rel="stylesheet" href="CSS/formulairevrai.css">
    <div class="gridpage">
        <head>
          <div class="headermenugrid">
            <nav>
                <ul class="menuheader"> <!-- Menu Header-->
        
                    <li><a href="Index.html" class="LOGO">
                   
                    </a></li>
        
                    <?php include("header.php"); ?>

        
        
                </ul>
            </nav>
         
        </div>
  </div>
    
      </head>
    <div class="bodycontent">
   <div class="gridbody" >
        <div class="menu-accordeon">
            
            <ul id="menu-accordeon">
                <li><a href="#"> MENU </a>
                  <ul>
                    <li><a href="Index.html">ACCUEIL</a></li>
                    <li><a href="Artmatériel.html">ART CONCRET</a></li>
                    <li><a href="Artvirtuel.html">ART VIRTUEL</a></li>
                    <li><a href="CoverArt.html">COVER ART</a></li>
                    <li><a href="Formulairevrai.html">CONTACT</a></li>
                  </ul>
                </li>
        
        
        
        </div>
        <div class="formulaire">
          <div class="blanc">
            <h2><i>  Vous cherchez à nous contacter? </i> </h2>
<p>  Veuillez remplir le formulaire. Les champs marqués par   <em>*</em>  sont <em>obligatoires</em> </p> 
            <form>
    
                <fieldset>
                  <legend> Contactez-nous</legend>
                  <label for="nom">Nom <em>*</em></label>                 <!--//placeholder: indication grisée -->
                    <!--//required: il faut renseigner le champs sinon la validation est bloquée
                    //autofocus: le curseur est positionné dans cette case au chargement de la page
                  // type="tel": bascule le clavier sur un smartphone
                    // pattern: expression régulière à vérifier pour pouvoir valider
                  // type="number": bascule le clavier sur un smartphone-->
                  <input id="nom" name="name" placeholder="Bâ Amadou" autofocus="" required="" maxlenght="20" pattern="[a-zA-Z]*.[a-zA-Z]+$"> <br>
                  <label for="telephone">Téléphone</label>
                  <input id="telephone" name="tel" placeholder="06 65 20 47 88" required="" pattern="06[0-9]{8}"><br>
                  <label for="email">Email <em>*</em></label>
                  <input id="email" name="email" placeholder="prenom.nom@Eternel.com" required="" pattern="[a-zA-Z]*.[a-zA-Z]*@\w+([\.-]!\w+)*(\.\w{2,3})+$"><br>
                  <label for="metier">Votre métier, par catégories <em> * </em></label>
                  <select name="metier" class="select-metier" required="">
                    <option value="métier">--Catégorie socioprofessionnelle--</option>
                    <option value="Agriculteurs-exploitants">Agriculteurs exploitants / Agricultrices exploitantes</option>
                    <option value="commerçantes-et-chefs-entreprise ">commerçants / commerçantes et chefs / cheffes d'entreprise</option>
                    <option value="Cadres">Cadres et professions intellectuelles supérieures</option>
                    <option value="Professions-intermédiaires">Professions intermédiaires</option>
                    <option value="Employes-Employees">Employés / Employées</option>
                    <option value="Ouvriers-Ouvrieres">Ouvriers / Ouvrières</option>
                  </select>      
                   
                </fieldset>
              
                <fieldset>
                  <legend> Informations personnelles</legend>
                    <!-- <label for="age">Votre âge<em>*</em></label>
                    
                    <input id="age" type="number" placeholder="18" pattern="[0-9]{2}\w(age>18)+$" required=""> <br><br>
                    -->
                    <label for="start">Date de naissance <em>*</em></label>
            
                      <input type="date" id="start" name="age"
                        value="2023-02-08"
                        min="1916-05-16" max="2005-02-08" required="">
            
                    <label for="sexe">Sexe</label>
            
                    <select id="sexe">
                      <option name="sexe">--Sexe--</option>
                      <option value="Femme">Femme</option>
                      <option value="Homme">Homme</option>
                      <option value="Autre">Autre</option>
                    </select><br>
                    <label for="comments">Quelle est votre question? <br> nous tacherons de vous répondre au plus vite </label>
                    <textarea id="comments" name="comments"></textarea>
                    <label for="reponse"> Pour une réponse plus rapide, j'accepte de recevoir une réponse en anglais </label> 
                    <select id="reponse"> 
                      <option value="nom" name="non"> Non </option>
                      <option value="oui" name="reponse"> Oui </option>
                    </select>
                </fieldset>
                
             
              
                  <input type="submit" value="Send Email" onclick="sendEmail()"/>
              </form>

        </div>

      </div>



   </div>

  







   </div>
   <div class="basdepage">
   <?php include("footer.php"); ?>

    




</div>

    </div>
</html>