var togle = document.getElementById("toggle");
var nav = document.getElementById("nav");

togle.addEventListener("click", () => {
  nav.classList.toggle("sideblack");
  nav.style.transition = "0.5s";
});


