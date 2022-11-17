
window.onload=function(){
    const btn = document.querySelector(".btn");
    btn.addEventListener("click", myFunction);
    
}

function myFunction() {
    const sec = document.querySelector(".sec");
    const btn = document.querySelector(".btn");
    let width = screen.width;
        
    console.log("clicked")
    console.log(sec.classList.contains("expanded"))
    if (sec.classList.contains("expanded")) {
        sec.classList.remove("expanded");
        btn.classList.remove("clicked");
    } else {
        sec.classList.add("expanded");
        btn.classList.add("clicked");
    }
}

