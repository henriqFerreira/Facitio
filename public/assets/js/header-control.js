const header = document.querySelector(".header");
const btn = document.querySelector(".header-ctg-btn");
const ctg = document.querySelector(".header-ctg-sec");
const dropdownBtn = document.querySelector(".dropdown-btn");
const dropdown = document.querySelector(".dropdown");

window.addEventListener("scroll", () => {
    setTimeout(() => {
        if (window.pageYOffset >= 50) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled")
        }
    }, 200);
});

dropdownBtn.addEventListener("click", () => {

    if (dropdown.classList.contains("dropdown-expanded")) {
        dropdown.classList.remove("dropdown-expanded");
    } else {
        dropdown.classList.add("dropdown-expanded");
    }
});

btn.addEventListener("click", () => {
    console.log(ctg.classList.contains("expanded"));
    if (ctg.classList.contains("expanded")) {
        ctg.classList.remove("expanded");
        btn.classList.remove("clicked");
        if (window.pageYOffset < 50)
            header.classList.remove("scrolled")
    } else {
        ctg.classList.add("expanded");
        btn.classList.add("clicked");
        header.classList.add("scrolled")
    }
});