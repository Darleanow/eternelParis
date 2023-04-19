
/*La première fonction, augmenterQuantite(id), permet d'augmenter la quantité d'un produit sélectionné */

function augmenterQuantite(id) {
    var quantiteElement = document.getElementById("quantite" + id);
    var quantite = parseInt(quantiteElement.innerText);
    var stockElement = document.getElementById("stock" + id);/* Elle utilise les identifiants issus des balises html "quantite" et "stock" associés à l'ID du produit pour récupérer et mettre à jour leur valeur. */ 
  
    var stock = parseInt(stockElement.innerText);
           if (stock > 0) {
    quantiteElement.innerText = quantite +1;/* Si le stock est supérieur à 0, la quantité est augmentée de 1 et le stock est diminué de 1.*/
    stockElement.innerText = stock -1;      }
  }
  

  /* La deuxième fonction, diminuerQuantite(id), permet de diminuer la quantité d'un produit sélectionné en par l'appui d'un bouton en html en reprenant le même principe */
  function diminuerQuantite(id) {
    var quantiteElement = document.getElementById("quantite" + id);
    var quantite = parseInt(quantiteElement.innerText);
    var stockElement = document.getElementById("stock" + id);
    var stock = parseInt(stockElement.innerText);
    if (quantite > 0) {
      quantiteElement.innerText = quantite -1;
      stockElement.innerText = stock +1 ;

    }
  }

  /* La troisième fonction, toggleVisibility(n), permet de basculer la visibilité d'un élément HTML en modifiant sa propriété CSS display */
  function toggleVisibility(n) {
    var element = document.getElementById("d"+n);
    if (element.style.display === "none") {
      element.style.display = "block";/* Elle utilise l'identifiant d associé à l'élément à cacher ou à afficher pour récupérer cet élément. Si l'élément est actuellement masqué (c'est-à-dire que sa propriété display est égale à "none"), il sera affiché en lui attribuant une valeur de "block" à sa propriété display.*/
    } else {
      element.style.display = "none"; /* Si l'élément est actuellement visible (c'est-à-dire que sa propriété display est différente de "none"), il sera masqué en attribuant une valeur "none" à sa propriété display.*/
    }
  }
  
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.grid-container .product-container > div').forEach((productDiv) => {
      const productIndex = productDiv.getAttribute('data-product-index');
      const product = products[productIndex];
      const imgElement = productDiv.querySelector('img');
      if (imgElement && product.image) {
        imgElement.src = product.image;
      }
    });
  });

  function addToBasket(index) {
    let email = userEmail; // Get the user's email from the variable
    let product = products; // Get the list of products in the current category
  
    let basket = JSON.parse(localStorage.getItem("basket")) || {}; // Retrieve the basket from localStorage or create a new one
    let item = product[index];
    let quantity = parseInt(document.getElementById("quantite" + index).textContent, 10);
  
    if (!basket[email]) {
      basket[email] = [];
    }
  
    let existingItem = basket[email].find((i) => i.id === item.id);
  
    if (existingItem) {
      existingItem.quantity += quantity;
    } else {
      basket[email].push({
        id: item.id,
        name: item.name,
        price: item.price,
        quantity: quantity,
      });
    }
  
    localStorage.setItem("basket", JSON.stringify(basket)); // Save the basket back to localStorage
  }
  