let menuContent = document.getElementById("menu__content");
let menuImg = document.getElementById("menu__img");

function changeNav() {
  if (menuContent.style.display === "block") {
    menuContent.style.display = "none";
    menuImg.src = "./Resources/Menu.png";
    menuImg.classList.remove("menu__close");
  } else {
    menuContent.style.display = "block";
    menuImg.src = "./Resources/Menu-Close.png";
    menuImg.classList.add("menu__close");
  }
}

menuImg.addEventListener("click", function () {
  changeNav();
});
