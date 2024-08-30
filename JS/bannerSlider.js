const bannerImages = document.querySelectorAll(".bannerImage");
let bannerImageIndex = 0;
let intervalID = null;
const bannerInfo = document.querySelectorAll(".bannerInfo");
const buttons = document.querySelectorAll(".sliderButtonContainer button");
const buttonsIndex = Array.from(buttons).map((button, index) => index);


document.addEventListener("DOMContentLoaded", initializeImage);

function initializeImage() {
    bannerImages[bannerImageIndex].classList.add("displayItem");
    bannerInfo[bannerImageIndex].style.display = "flex";
    buttons[bannerImageIndex].classList.add("active");
    intervalID = setInterval(nextImage, 5000);
    

}

function showImages(index) {
    if(index >= bannerImages.length){
        bannerImageIndex = 0;
    } else if (index < 0) {
        bannerImageIndex = bannerImages.length -1;
    }

    bannerImages.forEach(image => {
        image.classList.remove("displayItem");
    });
    bannerInfo.forEach(info => {
        info.style.display = "none";
    });
    buttons.forEach(button => {
        button.classList.remove("active");
    });
    
    bannerImages[bannerImageIndex].classList.add("displayItem");
    bannerInfo[bannerImageIndex].style.display = "flex";
    buttons[bannerImageIndex].classList.add("active");
    buttons[bannerImageIndex].style.opacity = "100%";

}

function prevImage() {
    clearInterval(intervalID);
    bannerImageIndex--;
    showImages(bannerImageIndex);
}

function nextImage() {
    bannerImageIndex++;
    showImages(bannerImageIndex);
}

buttons.forEach((button, index) => {
    button.addEventListener("click", function() {
        bannerImageIndex = buttonsIndex[index];
        showImages(bannerImageIndex);
    });
});