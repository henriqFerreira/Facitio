const prevBtns = document.querySelectorAll(".prevBtn");
const nextBtns = document.querySelectorAll(".nextBtn");
const formSteps = document.querySelectorAll(".form-step");
const stepIcons = document.querySelectorAll(".step");
const fileInput = document.querySelector(".fileInput");
const filePlaceholder = document.querySelector(".profile-photo-upload");

let formStepsNum = 0;

fileInput.addEventListener("change", (e) => {
    const file = e.target.files[0];
    let fileReader = new FileReader();
    fileReader.readAsDataURL(file);
    fileReader.onload = () => {
        filePlaceholder.setAttribute('style', `background-image: url('${fileReader.result}')`);
    }
})

nextBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
        formStepsNum++;
        updateFormSteps();
    });
});

prevBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        formStepsNum--;
        updateFormSteps();
    });
});

function updateFormSteps() {
    formSteps.forEach(formStep => {
        formStep.classList.contains("active-step") && 
            formStep.classList.remove("active-step");
    });
    stepIcons.forEach(step => {
        step.classList.contains("active-step-icon") &&
            step.classList.remove("active-step-icon");
    });

    stepIcons[formStepsNum].classList.add("active-step-icon");
    formSteps[formStepsNum].classList.add("active-step");
}
