const tabContent = document.querySelectorAll(".tab-content");
const tabs = document.querySelectorAll(".tab-btn");
const fileInput = document.querySelector(".fileInput");
const filePlaceholder = document.querySelector(".profile-photo-upload");
const newServiceFileInput = document.querySelector(".newServiceFileInput");
const newServiceFilePlaceholder = document.querySelector(".new-service-photo");
const modal = document.querySelector(".services-modal");

newServiceFileInput.addEventListener("change", (e) => {
    const file = e.target.files[0];
    let fileReader = new FileReader();
    fileReader.readAsDataURL(file);
    fileReader.onload = () => {
        newServiceFilePlaceholder.setAttribute('style', `background-image: url('${fileReader.result}')`);
    }
})

fileInput.addEventListener("change", (e) => {
    const file = e.target.files[0];
    let fileReader = new FileReader();
    fileReader.readAsDataURL(file);
    fileReader.onload = () => {
        filePlaceholder.setAttribute('style', `background-image: url('${fileReader.result}')`);
    }
})

function closeModal() {
    modal.classList.remove('modal-open');
}

function openModal() {
    modal.classList.add('modal-open');
}

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