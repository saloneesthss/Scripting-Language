function createPgph() {
    const para = document.createElement("p");
    para.textContent = "You clicked the external button!";
    document.body.appendChild(para);
}
const button3 = document.querySelector(".external");
button3.addEventListener("click", createPgph);