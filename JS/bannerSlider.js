const bannerImages = document.querySelectorAll(".bannerImage");
let bannerImageIndex = 0;
let intervalID = null;
const bannerInfo = document.querySelectorAll(".bannerInfo");


document.addEventListener("DOMContentLoaded", initializeImage);

function initializeImage() {
    bannerImages[bannerImageIndex].classList.add("displayItem");
    bannerInfo[bannerImageIndex].style.display = "flex";
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
    
    bannerImages[bannerImageIndex].classList.add("displayItem");
    bannerInfo[bannerImageIndex].style.display = "flex";

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