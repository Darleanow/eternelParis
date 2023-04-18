// Get the modal elements
const panierModal = document.getElementById("panierModal");
const logoutModal = document.getElementById("logoutModal");

// Get the close elements
const panierClose = panierModal.querySelector(".close");
const logoutClose = logoutModal.querySelector(".close");

// Open the Panier modal
function openPanier() {
  panierModal.style.display = "block";
}

// Open the Logout modal
function openLogout() {
  logoutModal.style.display = "block";
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
