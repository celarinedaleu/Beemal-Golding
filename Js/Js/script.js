var contactBtn = document.getElementById("contactBtn");
var contactForm = document.getElementById("contactForm");
var closeBtn = document.getElementsByClassName("close")[0];

// Afficher le formulaire pop-up
contactBtn.addEventListener("click", function() {
  contactForm.style.display = "block";
});

// Masquer le formulaire pop-up en cliquant sur la croix
closeBtn.addEventListener("click", function() {
  contactForm.style.display = "none";
});

// Masquer le formulaire pop-up en cliquant en dehors de celui-ci
window.addEventListener("click", function(event) {
  if (event.target == contactForm) {
    contactForm.style.display = "none";
  }
});
