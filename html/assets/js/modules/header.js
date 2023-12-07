export function hamburger() {
    const button = document.querySelector(".hamburger"),
        nav = document.querySelector(".header__nav"),
        header = document.querySelector(".header");

    if (!button || !nav || !header) {
        return;
    }

    button.addEventListener("click", (e) => {
        button.classList.toggle("hamburger--active");
        nav.classList.toggle("header__nav--active");
        header.classList.toggle("header--menu");
    });
}
