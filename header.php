<link rel="stylesheet" href="CSS/basketLogoutProps.css">
<?php
$menuItems = [
    ["Index.php", "ACCUEIL"],
    ["produits.php?categories=ArtConcret", "ART CONCRET"],
    ["produits.php?categories=Virtualart", "ART VIRTUEL"],
    ["produits.php?categories=Coverart", "COVER ART"],
    ["Formulairevrai.php", "CONTACT"]
];

if (isset($_COOKIE["user_id"])) {
  $menuItems = [
    ["Index.php", "ACCUEIL"],
    ["produits.php?categories=ArtConcret", "ART CONCRET"],
    ["produits.php?categories=Virtualart", "ART VIRTUEL"],
    ["produits.php?categories=Coverart", "COVER ART"],
    ["Formulairevrai.php", "CONTACT"],
    ["myAccount.php", "MON COMPTE"],
    ["#", "PANIER", "openPanier()"],
    ["#", "SE DÉCONNECTER", "openLogout()"]
  ];
} else {
    $menuItems[] = ["EspaceConnexion.php", "CONNEXION"];
}

foreach ($menuItems as $item) {
  if (isset($item[2])) {
    echo '<li><a href="' . $item[0] . '" onclick="' . $item[2] . '"><p><mark>' . $item[1] . '</mark></p></a></li>';
  } else {
    echo '<li><a href="' . $item[0] . '"><p><mark>' . $item[1] . '</mark></p></a></li>';
  }
}
?>

<!-- Panier Modal -->
<div id="panierModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h1>Panier</h1>
    <p>Votre panier est vide pour le moment.</p>
  </div>
</div>

<!-- Logout Modal -->
<div id="logoutModal" class="modal">
  <div class="modal-content">
    
    <h2>Se déconnecter</h2>
    <p>Êtes-vous sûr de vouloir vous déconnecter ?</p>
    <button id="confirmLogout">Oui</button>
    <button id="cancelLogout" class="close">&times;Non</button>
  </div>
</div>

<script src="./JS/basketLogout.js"></script>