var tabContent = document.querySelectorAll(".tab-content");
var tabs = document.querySelectorAll(".tab-btn");

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