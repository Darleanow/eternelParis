<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $product = $_POST['product'];
  $quantity = intval($_POST['quantity']);

  // Load the basket from the JSON file
  $basketFile = "JSON/basket.json";
  $basket = json_decode(file_get_contents($basketFile), true);

  // Update the basket
  if (isset($basket[$product])) {
    $basket[$product] += $quantity;
  } else {
    $basket[$product] = $quantity;
  }

  // Save the updated basket to the JSON file
  file_put_contents($basketFile, json_encode($basket, JSON_PRETTY_PRINT));

  echo "Product added to the basket.";
} else {
  echo "Invalid request.";
}
?>
