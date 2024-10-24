function hideNewsCard() {
    const newsContainer = document.querySelector(".newsContainer");
    const newsCards = document.querySelectorAll(".newsItem")
    const newsContainerWidth = newsContainer.offsetWidth;
    let totalCardsWidth = 0;
    
    newsCards.forEach(card => {
        const cardWidth = card.offsetWidth;

        if (totalCardsWidth + cardWidth > newsContainerWidth) {
            card.style.display = "none"; 
        } else {
            const newsContainerStyles = window.getComputedStyle(newsContainer);
            const gapSize = newsContainerStyles.getPropertyValue("gap");
            const gapInt = parseFloat(gapSize);

            totalCardsWidth += cardWidth + gapInt;
        }
    })
}

window.addEventListener("load", hideNewsCard);