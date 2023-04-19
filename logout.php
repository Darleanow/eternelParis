<?php
// Log out the user by removing the user_id cookie

setcookie("user_id", "", time() - 3600, "/");
header("Location: EspaceConnexion.php");
exit;
?>