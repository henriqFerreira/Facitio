const prevBtns = document.querySelectorAll(".prevBtn");
const nextBtns = document.querySelectorAll(".nextBtn");
const formSteps = document.querySelectorAll(".form-step");

console.log(prevBtns);
console.log(nextBtns);
console.log(formSteps);

let formStepsNum = 0;

nextBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
        formStepsNum++;
        updateFormSteps();
    });
});

function updateFormSteps() {
    formSteps.forEach(formStep => {
        formStep.classList.contains("active-step") && 
            formStep.classList.remove("active-step");
    })

    formSteps[formStepsNum].classList.add("active-step");
}
