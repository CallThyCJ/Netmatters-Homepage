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

const handleLocalStorage = () => {
    const isLocalCookieAccepted = localStorage.getItem("cookieAccepted");

    if (isLocalCookieAccepted) {
        cookieContainer.style.display = "none";
        overlay.style.display = "none";
        cookieMessageDisplayed = false;
        console.log("Cookie already set in localStorage");
    } else {
            cookieContainer.style.display = "flex";
            overlay.style.display = "block";
            console.log("No local cookie found");
        }
    };

const cookieMessage = () => {
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

const hideCookieMessageIfLocal = () => {
    if (window.location.protocol === 'file:' || window.location.hostname === 'localhost') {
        handleLocalStorage();
    } else {
        cookieMessage();
    }
};

hideCookieMessageIfLocal();

cookieButton.addEventListener("click", () => {
    cookieContainer.style.display = "none";
    cookieMessageDisplayed = false;
    overlay.style.display = "none";
    overlay.style.opacity = "0";
    setCookie("cookie", true); 
    if (window.location.protocol === 'file:' || window.location.hostname === 'localhost') {
        localStorage.setItem("cookieAccepted", "true");
        console.log("Cookie accepted and stored in localStorage");
    } else {
        setCookie("cookie", true);
        console.log("Cookie accepted and stored in cookies");
    }
});



// window.addEventListener("load", cookieMessage);

