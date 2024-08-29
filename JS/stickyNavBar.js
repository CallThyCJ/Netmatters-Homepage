const header = document.getElementById("mainHeader");
const navBar = document.querySelector(".mainNavBar");
let lastScroll = 0;

window.addEventListener("scroll", () => {
    const currentScroll = window.scrollY;

    if (currentScroll <= 0) {
        header.classList.remove("scrollUp");
        navBar.classList.remove("scrollUp")
    }

    if (currentScroll > lastScroll && !header.classList.contains("scrollDown")) {
        header.classList.remove("scrollUp");
        header.classList.add("scrollDown");
        navBar.classList.remove("scrollUp");
        navBar.classList.add("scrollDown");
    }

    if (currentScroll < lastScroll && header.classList.contains("scrollDown")) {
        header.classList.remove("scrollDown");
        header.classList.add("scrollUp");
        navBar.classList.remove("scrollDown");
        navBar.classList.add("scrollUp");
    }    

    lastScroll = currentScroll;

});