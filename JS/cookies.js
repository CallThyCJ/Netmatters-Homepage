const cookieButton = document.querySelector("#cookieAccept");
const cookieContainer = document.querySelector("#cookieContainer");
let cookieMessageDisplayed = true;

setCookie = (cName, cValue) => {
    document.cookie = cName + "=" + cValue + "; path=/";
} 


getCookie = (cName) => {
    const name = cName + "=";
    const cookieDecoded = decodeURIComponent(document.cookie);
    const cookieArray = cookieDecoded.split("; ");
    let value;
    cookieArray.forEach(val => {
        if(val.indexOf(name) === 0) value = val.substring(name.length);
    })

    return value;
}


cookieButton.addEventListener("click", () => {
    cookieContainer.style.display = "none";
    cookieMessageDisplayed = false;
    overlay.style.display = "none";
    overlay.style.opacity = "0";
    setCookie("cookie", true); 
    console.log("cookie accepted");
});

cookieMessage = () => {
    if(!getCookie("cookie")) {
        cookieContainer.style.display = "flex";
        overlay.style.display = "block";
        overlay.style.opacity = "1";
        cookieMessageDisplayed = true;
        console.log("no cookie");
    } else {
        cookieMessageDisplayed = false;
        console.log("cookie already set");
    }
}

window.addEventListener("load", cookieMessage);

