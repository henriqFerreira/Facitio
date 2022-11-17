const tabContent = document.querySelectorAll(".tab-content");
const tabs = document.querySelectorAll(".tab-btn");
const fileInput = document.querySelector(".fileInput");
const filePlaceholder = document.querySelector(".profile-photo-upload");

fileInput.addEventListener("change", (e) => {
    const file = e.target.files[0];
    let fileReader = new FileReader();
    fileReader.readAsDataURL(file);
    fileReader.onload = () => {
        filePlaceholder.setAttribute('style', `background-image: url('${fileReader.result}')`);
    }
})

function openTab(evt, tabName) {
    tabContent.forEach(tabC => {
        tabC.style.display = "none";
    });

    tabs.forEach(tab => {
        tab.classList.contains("active-tab") &&
            tab.classList.remove("active-tab");
    })

    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.classList.add("active-tab");
}

document.getElementById("defaultOpen").click();