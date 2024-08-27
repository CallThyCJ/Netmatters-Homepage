const button = document.querySelector("#burgerMenuButton");
const sideMenu = document.querySelector(".sideMenuContainer");
const overlay = document.querySelector("#overlay");
let sideMenuOpen = false;

button.addEventListener("click", function() {
    if (sideMenuOpen === false) {
        sideMenu.classList.add("sideMenuShow");
        sideMenu.classList.remove("sideMenuHide");
        overlay.style.display = "block";
        setTimeout(() => overlay.style.opacity = "1", 10);
        sideMenuOpen = true;
    } else {
        sideMenu.classList.add("sideMenuHide");
        sideMenu.classList.remove("sideMenuShow");
        overlay.style.opacity = "0";
        setTimeout(() => overlay.style.display = "none", 400);
        sideMenuOpen = false;
    }
});

overlay.addEventListener("click", function () {
    if (sideMenuOpen === true) {
        sideMenu.classList.add("sideMenuHide");
        sideMenu.classList.remove("sideMenuShow");
        overlay.style.opacity = "0";
        setTimeout(() => overlay.style.display = "none", 400);
        sideMenuOpen = false;
    }
});