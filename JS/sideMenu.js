const button = document.querySelector("#burgerMenuButton");
const sideMenu = document.querySelector(".sideMenuContainer");
const mobileSideMenu = document.querySelector("#mobileSideMenuContainer");
const overlay = document.querySelector("#overlay");
const menuIcon = document.querySelector("#menuIcon");
const body = document.querySelector("body");
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
        if (window.getComputedStyle(sideMenu).display === "flex") {
            sideMenu.classList.add("sideMenuShow");
            sideMenu.classList.remove("sideMenuHide");
        } else {
            mobileSideMenu.classList.add("sideMenuShow");
            mobileSideMenu.classList.remove("sideMenuHide");
        } 
        overlay.style.display = "block";
        setTimeout(() => overlay.style.opacity = "1", 10);
        if (window.getComputedStyle(sideMenu).display === "flex") {
            body.style.right = "350px";
        } else {
            body.style.right = "275px";
        }
        sideMenuOpen = true;
    } else {
        menuIcon.style.animation = "spin 4s linear infinite";
        menuIcon.style.opacity = "0";
        setTimeout(() => {
            menuIcon.classList.replace("fa-x", "fa-bars");
            menuIcon.style.opacity = "1";
            menuIcon.style.animation = "none";
        }, 200);
        if (window.getComputedStyle(sideMenu).display === "flex") {
            sideMenu.classList.add("sideMenuHide");
            sideMenu.classList.remove("sideMenuShow");
        } else {
            mobileSideMenu.classList.add("sideMenuHide");
            mobileSideMenu.classList.remove("sideMenuShow");
        }
        overlay.style.opacity = "0";
        setTimeout(() => overlay.style.display = "none", 400);
        body.style.right = "0";
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
        if (window.getComputedStyle(sideMenu).display === "flex") {
            sideMenu.classList.add("sideMenuHide");
            sideMenu.classList.remove("sideMenuShow");
        } else {
            mobileSideMenu.classList.add("sideMenuHide");
            mobileSideMenu.classList.remove("sideMenuShow");
        }
        overlay.style.opacity = "0";
        setTimeout(() => overlay.style.display = "none", 400);
        body.style.right = "0";
        sideMenuOpen = false;
    }
});