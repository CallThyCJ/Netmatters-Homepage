const button = document.querySelector("#burgerMenuButton");
const sideMenu = document.querySelector(".sideMenuContainer");
const mobileSideMenu = document.querySelector("#mobileSideMenuContainer");
const overlay = document.querySelector("#overlay");
const menuIcon = document.querySelector("#hamburgerLine");
const body = document.querySelector("body");
const masterNavBar = document.querySelector("#masterNavBar");
let sideMenuOpen = false;

button.addEventListener("click", function() {
    if (sideMenuOpen === false) {
        menuIcon.classList.toggle("hamburgerActive");

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
            header.classList.add("sideMenuActive");
            masterNavBar.classList.add("sideMenuActive2");
            setTimeout(() => {
                masterNavBar.style.transition = "none";
                header.style.transition = "none";
            }, 500);
        } else {
            body.style.right = "275px";
            header.classList.add("sideMenuActive");
            masterNavBar.classList.add("sideMenuActive2");
            setTimeout(() => {
                masterNavBar.style.transition = "none";
                header.style.transition = "none";
            }, 500);
        }
        sideMenuOpen = true;
    } else {
        if (window.getComputedStyle(sideMenu).display === "flex") {
            sideMenu.classList.add("sideMenuHide");
            sideMenu.classList.remove("sideMenuShow");
        } else {
            mobileSideMenu.classList.add("sideMenuHide");
            mobileSideMenu.classList.remove("sideMenuShow");
        }
        overlay.style.opacity = "0";
        setTimeout(() => overlay.style.display = "none", 400);
        masterNavBar.style.transition = "left 0.5s ease";
        header.style.transition = "left 0.5s ease";
        body.style.right = "0";
        header.classList.remove("sideMenuActive");
        masterNavBar.classList.remove("sideMenuActive2");
        sideMenuOpen = false;
    }
});

overlay.addEventListener("click", function () {
    if (sideMenuOpen === true) {
        menuIcon.classList.toggle("hamburgerActive");
        
        if (window.getComputedStyle(sideMenu).display === "flex") {
            sideMenu.classList.add("sideMenuHide");
            sideMenu.classList.remove("sideMenuShow");
        } else {
            mobileSideMenu.classList.add("sideMenuHide");
            mobileSideMenu.classList.remove("sideMenuShow");
        }
        overlay.style.opacity = "0";
        setTimeout(() => overlay.style.display = "none", 400);
        masterNavBar.style.transition = "left 0.5s ease";
        header.style.transition = "left 0.5s ease";
        body.style.right = "0";
        header.classList.remove("sideMenuActive");
        masterNavBar.classList.remove("sideMenuActive2");
        sideMenuOpen = false;
    }
});