<?php
// Check if the user is logged in. If not, redirect to the login page.
if (!isset($_COOKIE["user_id"])) {
    header("Location: EspaceConnexion.php");
    exit;
}

// Load user data from the JSON file
$users = json_decode(file_get_contents("./JSON/users.json"), true);
$currentUser = null;
foreach ($users as $user) {
    if ($user["id"] == $_COOKIE["user_id"]) {
        $currentUser = $user;
        break;
    }
}
?>

<!DOCTYPE html>
<html class="biggrid">
<head>
    <link rel="stylesheet" href="CSS/Index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Compte</title>
</head>
<header class="biggrid-itemun">

    <nav>
        <ul class="menuheader"> <!-- Menu Header-->

            <li><a href="Index.html" class="LOGO">
           
            </a></li>

            <?php include("header.php"); ?>

        </ul>
    </nav>

</header>
<body>
    <h1>Mon Compte</h1>
    <?php if ($currentUser): ?>
        <p>Nom: <?= $currentUser["name"] ?></p>
        <p>Email: <?= $currentUser["email"] ?></p>
    <?php endif; ?>
</body>
</html>
<div class="basdepage">
   <?php include("footer.php"); ?>
</div>