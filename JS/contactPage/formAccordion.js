const accordionContents = document.getElementById("accordionContents");
const accordionToggleButton = document.getElementById("accRevealButton");
const accordionTitle = document.getElementById("accTitle");

function toggleAccordion() {
    accordionContents.classList.toggle("active");
}

accordionToggleButton.addEventListener("click", toggleAccordion);

accordionTitle.addEventListener("click", toggleAccordion);

