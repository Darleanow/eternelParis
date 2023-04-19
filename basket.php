<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <script>
      function displayBasket() {
        let email = "<?php echo $_COOKIE['user_email']; ?>";
        let basket = JSON.parse(localStorage.getItem("basket")) || {};
        let userBasket = basket[email] || [];
        let basketHTML = '';

        if (userBasket.length > 0) {
          userBasket.forEach(item => {
            basketHTML += `
              <div>
                <img src="${item.image}" alt="${item.name}" />
                <h3>${item.name}</h3>
                <p>Quantité: ${item.quantity}</p>
                <p>Prix total: ${item.price * item.quantity}€</p>
              </div>
            `;
          });
        } else {
          basketHTML = '<p>Votre panier est vide pour le moment.</p>';
        }

        document.getElementById("basketItems").innerHTML = basketHTML;
      }

      window.addEventListener("DOMContentLoaded", displayBasket);
    </script>
</head>
<body>
    <h1>Panier</h1>
    <div id="basketItems"></div>
</body>
</html>
