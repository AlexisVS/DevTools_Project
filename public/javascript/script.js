let headerMenuIcon = document.getElementById("headerMenuIcon");
let headerMenuCross = document.getElementById("headerMenuCross");

let toggleMenu = () => {
  let headerMenu = document.getElementById("headerMenu");
  headerMenu.classList.toggle("is-showed--flex");
};

headerMenuIcon.addEventListener("click", toggleMenu);
headerMenuCross.addEventListener("click", toggleMenu);
