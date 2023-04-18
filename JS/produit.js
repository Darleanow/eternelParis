
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
  
  let basket = {};

  function addToBasket(counter) {
    let quantityElement = document.getElementById('quantite' + counter);
    let quantity = parseInt(quantityElement.innerText);
  
    if (quantity > 0) {
      let productName = document.querySelector('.product-' + counter + ' .description-product-' + counter + ' h2').innerText;
  
      // Send the product and quantity to the server to store in the basket
      let xhr = new XMLHttpRequest();
      xhr.open('POST', 'basketUpdate.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.send('product=' + encodeURIComponent(productName) + '&quantity=' + encodeURIComponent(quantity));
  
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
          // Update the UI or display a message based on the server response
          console.log(xhr.responseText);
        }
      };
  
      // Reset the quantity to 0
      quantityElement.innerText = 0;
    } else {
      alert("Please select a quantity greater than 0.");
    }
  }
  
    