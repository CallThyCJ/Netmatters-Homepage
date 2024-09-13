const header = document.getElementById("mainHeader");
const navBar = document.querySelector(".mainNavBar");
const navBarPos = document.querySelector(".mainNavBarPosition");
let lastScroll = 0;
const scrollLimit = 217;

window.addEventListener("scroll", () => {
    const currentScroll = window.scrollY;

    if (currentScroll <= 0) {
        header.classList.remove("scrollUp", "scrollDown");
        navBar.classList.remove("scrollUpNavBar", "scrollDownNavBar");
        navBarPos.classList.add("mainNavBarPosition");
    } else if (currentScroll > scrollLimit && currentScroll > lastScroll && cookieMessageDisplayed === false && !header.classList.contains("scrollDown")) {
        navBarPos.classList.remove("mainNavBarPosition");
        header.classList.remove("scrollUp");
        header.classList.add("scrollDown");
        navBar.classList.remove("scrollUpNavBar");
        navBar.classList.add("scrollDownNavBar");
    } else if (currentScroll < lastScroll && header.classList.contains("scrollDown")) {
        header.classList.remove("scrollDown");
        header.classList.add("scrollUp");
        navBar.classList.remove("scrollDownNavBar");
        navBar.classList.add("scrollUpNavBar");
    }    

    lastScroll = currentScroll;

});

function navBarMove() {
if (sideMenuOpen === true) {
    const scrollUp = document.querySelector(".scrollUp");
    const scrollUpNavBar = document.querySelector(".scrollUpNavBar");

    scrollUp.style.left = "-350px";
    scrollUpNavBar.style.left = "-350px";
    console.log("I AM BEING CALLED");
}
}

function navBarMoveBack() {
    if (sideMenuOpen === false) {
        const scrollUp = document.querySelector(".scrollUp");
        const scrollUpNavBar = document.querySelector(".scrollUpNavBar");
        scrollUp.style.left = "0";
        scrollUpNavBar.style.left = "0";
        console.log("MOVE BACK");
    } 
}