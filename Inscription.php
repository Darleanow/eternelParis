

<html>
<link rel="stylesheet" href="CSS/Inscription.css">
<head>

  
  <nav>
    <ul class="menuheader"> <!-- Menu Header-->
      <li><a href="LOGO" class="LOGO">
           
      </a></li>
      <?php include("header.php"); ?>

    </ul>
</nav>
  <meta charset="UTF-8">
   
</head>
<center>
  
  <body>
    <h2><i> <mark> Inscrivez vous dès maintenant </mark> </i></h2> 
    <form class="form card" method="post">
        <div class="card_header">
          
          <legend> <strong> <mark> Créez votre compte </mark> </strong>  </legend>
        </div>
        <div class="field">
          <label for="name">Nom et prénom</label>
          <input id="name" placeholder="Eternel" type="text" name="name" class="input">
        </div>
        <div class="field">
          <label for="mail ">Email</label>
          <input id="mail" placeholder="nom@gmail.com" type="text" name="mail" class="input"> 
          <label for="password"> <mark> Créez votre mot de passe </mark> </label>
          <input id="password" placeholder="Créez votre mot de passe" type="password" name="user_password" class="input">
          <input type="checkbox" id="newsletter" name="abonnement" value="newsletter">
            <label for="newsletter"> <mark> Souhaitez-vous vous abonner à la newsletter ? </mark></label>
        </div>
        <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST["name"];
                $email = $_POST["mail"];
                $password = $_POST["user_password"];
                $newsletter = isset($_POST["abonnement"]) ? 1 : 0;

                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                $users = json_decode(file_get_contents("./JSON/users.json"), true);

                $user_exists = false;
                foreach ($users as $user) {
                    if ($user["email"] == $email) {
                        $user_exists = true;
                        break;
                    }
                }

                if (!$user_exists) {
                    $users[] = [
                        "id" => count($users) + 1,
                        "name" => $name,
                        "email" => $email,
                        "password" => $hashed_password,
                        "newsletter" => $newsletter
                    ];

                    file_put_contents("./JSON/users.json", json_encode($users));
                    header("Location: EspaceConnexion.php");
                } else {
                    echo "<p style='color:red;'>Error: User with this email already exists.</p>";
                }
            }
            ?>
          <button class="boutton" type="submit"> S'inscrire</button>
          
      </form>
</body>
</center>

<!-- Création de la page du bas -->
<?php include("footer.php"); ?>
