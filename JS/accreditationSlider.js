// document.addEventListener("DOMContentLoaded", function() {
//     const carousels = document.querySelectorAll(".accreditations");

//     carousels.forEach(carousel => {
//         const containerWidth = carousel.parentElement.offsetWidth; 
//         const totalCarouselWidth = carousel.scrollWidth;
//         let currentPosition = 0;

//     setInterval(() => {
//         currentPosition -= 1;
//         if  (Math.abs(currentPosition) >= totalCarouselWidth) {
//             currentPosition = containerWidth;
//         }
//         carousel.style.transform = `translateX(${currentPosition}px)`;
//     }, 16);
// });
// });

class carousel {
    element = null;
    items = [];
    size = 10;
    gap = 0;
    item = {
        width: 0,
        gap: 0,
        left: 0,
    };


    constructor(element, settings = {}) {
        this.element = element;
        this.items = element.getElementsByClassName("carouselItem");

        this.init();
    }

    async init() {
        this.item.width = await this.getSize();
        this.element.style.height = this.items[0].clientWidth + "px";
        
        await this.clone("prev");
        await this.build();

        setInterval(() => this.next(), 2000); 
    }

    async getSize() {
        let width = this.element.clientWidth;
        width = width / this.size;
        return width;
    }

    async build() {
        let left = this.item.width * -1;
        for(let i = 0; i < this.items.length; i++) {
            this.items[i].style.width = this.item.width + "px";
            this.items[i].style.left = left + "px";
            left = left + this.item.width;
        }
    }

    async clone(pos = "next") {
        let item = 0;
        if (pos === "next") {
            item = this.items[0];
        } else {
            item = this.items[this.items.length - 1];
        }

        let c = item.cloneNode(true);
        
        if(pos === "next") {
            this.element.append(c);
        } else {
            this.element.prepend(c);
        }

        item.remove();
    }

    async next () {
        await this.clone("next");
        await this.build();
    }
}


const element = document.getElementById("ourWorkaccreditations");
new carousel(element);