const cookieButton = document.querySelector("#cookieButton");



cookieButton.addEventListener("click", () => {
    document.querySelector("#cookieContainer").computedStyleMap.display = "none";
    setCookie("cookie", true); 
});