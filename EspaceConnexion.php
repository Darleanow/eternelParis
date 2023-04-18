<html>

    <link rel="stylesheet" href="CSS/EspaceConnexion.css">
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
                  <li><a href="Index.php">ACCUEIL</a></li>
                  <li><a href="<?php echo 'produits.php?categories=ArtConcret';?>" class="lien" id="Artmatériel">ART CONCRET</a></li>
                  <li><a href="<?php echo 'produits.php?categories=Virtualart';?>" class="lien">ART VIRTUEL</a></li>
                  <li><a href="<?php echo 'produits.php?categories=Coverart';?>" class="lien">COVER ART</a></li>
                  <li><a href="EspaceConnexion.php">CONTACT</a></li>
                </ul>
                </li>
        
        
        
        </div>
        <div class="connexion">
          
            <form class="form card" method="post">
              <div class="card_header">
                <svg height="24" width="24" viewBox="0 0 25 25">
                  <path d="M0 v24H0z" fill="none"></path>
                  <path d="M4 15h2v5h12V4H6v5H4V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6zm6-4V8l5 4-5 4v-3H2v-2h8z" fill="currentColor"></path>
                </svg>
                <h1 class="form_heading">  Se connecter </h1>
              </div>
              
              <div class="field">
    <label for="email">  Votre Email </label>
    <input id="email" type="email" name="email" placeholder="Eternel@gmail.com" required="" class="input">
</div>
<div class="field">
    <label for="password">Mot de passe</label>
    <input id="password" placeholder="entrez votre mot de passe" type="password" name="password" class="input">
</div>
<div class="field">
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $users = json_decode(file_get_contents("./JSON/users.json"), true);

    $authenticated_user = null;
    foreach ($users as $user) {
        if ($user["email"] == $email && password_verify($password, $user["password"])) {
            $authenticated_user = $user;
            break;
        }
    }

    if ($authenticated_user) {
        setcookie("user_id", $authenticated_user["id"], time() + (86400 * 30), "/");
        header("Location: Index.php");
    } else {
        echo "<p style='color:red;'>Invalid email or password</p><br>";
    }
}
?>
    <button class="button">Se connecter</button> <br>
    <h4>  Vous êtes nouveau? Cliquez <a class="button" href="Inscription.php">ici</a></h4>

</div>
</form>

</div>

</div>

</div>
<div class="basdepage">

<?php include("footer.php"); ?>

</div>

</div>
</html>