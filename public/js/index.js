const navButton = document.getElementById("checkBtn");
const menu = document.getElementById("menu");
const closeMenu = document.getElementById("closeMenu");

navButton.addEventListener("click", () => {
  menu.classList.add("show");
});

closeMenu.addEventListener("click", () => {
  menu.classList.remove("show");
});
