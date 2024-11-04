function hideNewsCard() {
    const newsContainer = document.querySelector(".newsContainer");
    const newsCards = document.querySelectorAll(".newsItem");
    const newsContainerWidth = newsContainer.offsetWidth;
    const newsContainerStyles = window.getComputedStyle(newsContainer);
    const gapSize = newsContainerStyles.getPropertyValue("gap") || "0px";
    const gapInt = parseFloat(gapSize);
    let totalCardsWidth = 0;

    // Calculate the total width of all cards including gaps
    newsCards.forEach((card, index) => {
        const cardWidth = card.offsetWidth;
        totalCardsWidth += cardWidth;
        if (index < newsCards.length - 1) {
            totalCardsWidth += gapInt;
        }
    });

    // Hide cards if total width exceeds container width
    let currentWidth = 0;
    newsCards.forEach((card, index) => {
        const cardWidth = card.offsetWidth;
        if (newsContainerWidth >= 1170) {
            card.style.display = "block";
            currentWidth += cardWidth;
        } else if (newsContainerWidth < 1170 && newsContainerWidth >= 940) {
            card.style.display = "block";
            currentWidth += cardWidth;
            if (index === 2) {
                card.style.display = "none";
            }
        } else if (newsContainerWidth < 720) {
            card.style.display = "block";
            currentWidth += cardWidth;  
        } else if (currentWidth + cardWidth > newsContainerWidth) {
            card.style.display = "none";
        } else {
            card.style.display = "block";
            currentWidth += cardWidth;
            if (index < newsCards.length - 1) {
                currentWidth += gapInt;
            }
        }
    });
}

window.addEventListener("load", hideNewsCard);
window.addEventListener("resize", hideNewsCard);