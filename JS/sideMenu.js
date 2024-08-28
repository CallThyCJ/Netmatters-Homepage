const button = document.querySelector("#burgerMenuButton");
const sideMenu = document.querySelector(".sideMenuContainer");
const overlay = document.querySelector("#overlay");
const menuIcon = document.querySelector("#menuIcon");
let sideMenuOpen = false;

button.addEventListener("click", function() {
    if (sideMenuOpen === false) {
        menuIcon.style.animation = "spin 4s linear infinite";
        menuIcon.style.opacity = "0";
        setTimeout(() => {
            menuIcon.classList.replace("fa-bars", "fa-x");
            menuIcon.style.opacity = "1";
            menuIcon.style.animation = "none";
        }, 200);
        sideMenu.classList.add("sideMenuShow");
        sideMenu.classList.remove("sideMenuHide");
        overlay.style.display = "block";
        setTimeout(() => overlay.style.opacity = "1", 10);
        sideMenuOpen = true;
    } else {
        menuIcon.style.animation = "spin 4s linear infinite";
        menuIcon.style.opacity = "0";
        setTimeout(() => {
            menuIcon.classList.replace("fa-x", "fa-bars");
            menuIcon.style.opacity = "1";
            menuIcon.style.animation = "none";
        }, 200);
        sideMenu.classList.add("sideMenuHide");
        sideMenu.classList.remove("sideMenuShow");
        overlay.style.opacity = "0";
        setTimeout(() => overlay.style.display = "none", 400);
        sideMenuOpen = false;
    }
});

overlay.addEventListener("click", function () {
    if (sideMenuOpen === true) {
        menuIcon.style.animation = "spin 4s linear infinite";
        menuIcon.style.opacity = "0";
        setTimeout(() => {
            menuIcon.classList.replace("fa-x", "fa-bars");
            menuIcon.style.opacity = "1";
            menuIcon.style.animation = "none";
        }, 200);
        sideMenu.classList.add("sideMenuHide");
        sideMenu.classList.remove("sideMenuShow");
        overlay.style.opacity = "0";
        setTimeout(() => overlay.style.display = "none", 400);
        sideMenuOpen = false;
    }
});