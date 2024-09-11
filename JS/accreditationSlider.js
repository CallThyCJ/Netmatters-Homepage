class carousel {
    element = null;
    items = [];
    size = 10;
    gap = 22;
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
        await this.setMinItems();

        this.item.width = await this.getSize();
        this.element.style.height = this.items[0].clientWidth + "px";
        
        await this.clone("prev");
        await this.build();

        setInterval(() => this.next(), 2000); 
    }

    async setMinItems() {
        const minItems = this.size + 2;

        if (this.items.length < minItems) {
            let itemsLength = this.items.length;
            for(let i = 0; i < this.itemsLength; i++) {
                let clone = this.items[i].cloneNode(true);
                this.element.append(clone);
            }
        }

        if (this.items.length < minItems) {
            await this.setMinItems();
        }
    }

    async getSize() {
        let width = this.element.clientWidth;
        width = width / this.size - this.gap;

        return width;
    }

    async build() {
        // let left = this.item.width * -1;
        let left = 0;
        for(let i = 0; i < this.items.length; i++) {
            // this.items[i].style.width = this.item.width + "px";
            this.items[i].style.left = left + "px";
            left = left + this.items[i].clientWidth;
            // left = left + this.item.width;
            if (i > 0) {
                left = left + this.gap;
            }
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