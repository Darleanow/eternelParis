// Get the modal elements
const panierModal = document.getElementById("panierModal");
const logoutModal = document.getElementById("logoutModal");

// Get the close elements
const panierClose = panierModal.querySelector(".close");
const logoutClose = logoutModal.querySelector(".close");

// Open the Logout modal
function openLogout() {
  logoutModal.style.display = "block";
}

// Open the Panier modal
function openPanier() {
    // Update the content of the panierModal here, before opening it.
    loadBasketItems();
    panierModal.style.display = "block";
  }

  function loadBasketItems() {
    const basket = JSON.parse(localStorage.getItem("basket")) || {};
    const items = basket[userEmail] || [];
    const modalContent = panierModal.querySelector(".modal-content");
    const itemListHtml = `
      <div class="basket-item basket-header">
        <div class="item-name">Item name</div>
        <div class="item-quantity">Quantity</div>
        <div class="item-price">Price/u</div>
        <div class="item-remove">Remove</div>
      </div>
    ` + items
      .map(
        (item, index) => `
          <div class="basket-item" data-item-index="${index}">
            <div class="item-name">${item.name}</div>
            <div class="item-quantity">${item.quantity}</div>
            <div class="item-price">${item.price}</div>
            <div class="item-remove">
              <button onclick="openRemoveDialog(${index})">Remove</button>
              <div class="remove-dialog" id="remove-dialog-${index}">
                <button onclick="decreaseQuantity(${index})">-</button>
                <div class="item-quantity-edit">${item.quantity}</div>
                <button onclick="increaseQuantity(${index})">+</button>
                <button onclick="saveQuantity(${index})">&#10003;</button>
              </div>
            </div>
          </div>
        `
      )
      .join("");
    if (items.length === 0) {
      modalContent.innerHTML = `
        <span class="close">&times;</span>
        <h1>Panier</h1>
        <p>Votre panier est vide pour le moment.</p>
      `;
    } else {
      modalContent.innerHTML = `
        <span class="close">&times;</span>
        <h1>Panier</h1>
        <div class="basket-items">${itemListHtml}</div>
      `;
    }
  }
  

  function openRemoveDialog(index) {
    const removeDialog = document.getElementById(`remove-dialog-${index}`);
    removeDialog.style.display = "flex";
  }
  
  function closeRemoveDialog(index) {
    const removeDialog = document.getElementById(`remove-dialog-${index}`);
    removeDialog.style.display = "none";
  }
  
  function decreaseQuantity(index) {
    const itemDiv = document.querySelector(`.basket-item[data-item-index="${index}"]`);
    const quantityDiv = itemDiv.querySelector('.item-quantity-edit');
    let quantity = parseInt(quantityDiv.textContent);
    if (quantity > 1) {
      quantity--;
      quantityDiv.textContent = quantity;
    }
  }
  
  function increaseQuantity(index) {
    const itemDiv = document.querySelector(`.basket-item[data-item-index="${index}"]`);
    const quantityDiv = itemDiv.querySelector('.item-quantity-edit');
    let quantity = parseInt(quantityDiv.textContent);
    quantity++;
    quantityDiv.textContent = quantity;
  }

  function saveQuantity(index) {
    const itemDiv = document.querySelector(`.basket-item[data-item-index="${index}"]`);
    const quantityDiv = itemDiv.querySelector('.item-quantity');
    const removeDialog = document.getElementById(`remove-dialog-${index}`);
    const newQuantity = parseInt(removeDialog.querySelector('.new-quantity').value);
    
    if (isNaN(newQuantity) || newQuantity < 1) {
      alert('Quantity must be a positive integer.');
    } else {
      const basket = JSON.parse(localStorage.getItem("basket")) || {};
      const items = basket[userEmail] || [];
      items[index].quantity = newQuantity;
      localStorage.setItem("basket", JSON.stringify(basket));
      quantityDiv.innerText = newQuantity;
      closeRemoveDialog(index);
    }
  }
  

// Close the modals
function closeModal(modal) {
  modal.style.display = "none";
}

// Event listeners for close buttons
panierClose.addEventListener("click", () => closeModal(panierModal));
logoutClose.addEventListener("click", () => closeModal(logoutModal));

// Event listener for the logout confirmation
document.getElementById("confirmLogout").addEventListener("click", () => {
  location.href = "../logout.php";
});

// Close modals when clicking outside of them
window.addEventListener("click", (event) => {
  if (event.target == panierModal) closeModal(panierModal);
  if (event.target == logoutModal) closeModal(logoutModal);
});
