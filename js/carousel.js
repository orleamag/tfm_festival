let carousel = document.querySelector(".carousel");
let carouselInner = document.querySelector(".carousel__inner");

let pressed = false;
let startX;
let x;

carousel.addEventListener("mousedown", (e) => {
    pressed = true;
    startX = e.offsetX - carouselInner.offsetLeft;
    carousel.style.cursor = "grabbing";
});

carousel.addEventListener("mouseenter", () => {
    carousel.style.cursor = "grab";
});

carousel.addEventListener("mouseup", () => {
    carousel.style.cursor = "grab";
    pressed = false;
});

carousel.addEventListener("mousemove", (e) => {
    if (!pressed) return;
    e.preventDefault();

    x = e.offsetX;

    carouselInner.style.left = `${x - startX}px`;
    checkBoundary();
});

const checkBoundary = () => {
    let outer = carousel.getBoundingClientRect();
    let inner = carouselInner.getBoundingClientRect();

    if (parseInt(carouselInner.style.left) > 0) {
        carouselInner.style.left = "0px";
    }

    if (inner.right < outer.right) {
        carouselInner.style.left = `-${inner.width - outer.width}px`;
    }
};
