const header = document.getElementById("mainHeader");
const navBar = document.querySelector(".mainNavBar");
const navBarPos = document.querySelector(".mainNavBarPosition");
const scrollUp = document.querySelector(".scrollUp");
const scrollUpNavBar = document.querySelector(".scrollUpNavBar");
const netmattersLogo = document.querySelector("#homeNetmattersLogo");
const contactButton = document.querySelector("#contact");
let lastScroll = 0;
const scrollLimit = 217;

window.addEventListener("scroll", () => {
    const currentScroll = window.scrollY;

    if (currentScroll <= 0) {
        header.classList.remove("scrollUp", "scrollDown");
        navBar.classList.remove("scrollUpNavBar", "scrollDownNavBar");
        navBarPos.classList.add("mainNavBarPosition");
    } else if (currentScroll > scrollLimit && currentScroll > lastScroll && cookieMessageDisplayed === false && !header.classList.contains("scrollDown")) {
        // navBarMoveBack();
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

// Logo home navigation

netmattersLogo.addEventListener("click", () => {
    const homePage = "https://netmatters.celestin-jacobs.netmatters-scs.co.uk/" 

    window.location.href = homePage;
});

contactButton.addEventListener("click", () => {
    window.location.href = "https://netmatters.celestin-jacobs.netmatters-scs.co.uk/PHP/Site%20Pages/contact-us.php";
});
