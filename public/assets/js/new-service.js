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

function closeModal() {
    modal.classList.remove('modal-open');
}

function openModal() {
    modal.classList.add('modal-open');
}