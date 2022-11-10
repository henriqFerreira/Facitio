const header = document.querySelector(".header");
const btn = document.querySelector(".header-ctg-btn");
const ctg = document.querySelector(".header-ctg-sec");
console.log(header);

window.addEventListener("scroll", () => {
    setTimeout(() => {
        if (window.pageYOffset > 150) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled")
        }
    }, 500);
});

btn.addEventListener("click", () => {
    if (ctg.classList.contains("expanded")) {
        ctg.classList.remove("expanded");
    } else {
        ctg.classList.add("expanded");
    }
});