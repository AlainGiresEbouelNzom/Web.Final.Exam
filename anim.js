const accueil = document.querySelector(".play-pause-trash button");
const btn2 = document.getElementById("home");
const trash = document.getElementById("play-pause-trash button");
  

  // alert(pre[0].name);

  /*trash.addEventListener("click", ()=>{
    alert("Souhaitez-vous supprimer définitivement cette activité?");
  })*/


const showActivity = (ev) => {
  alert("hello");
  alert("Cette activité va être définitivement supprimer?");
};


numberButtons.forEach(button => {
  button.addEventListener('click', () => {
    calculator.appendNumber(button.innerText)
    calculator.updateDisplay()
  })
})

accueil.forEach(button=>{
  
})
accueil.addEventListener("click", showActivity, () => {
  accueil.classList.add("btn-click");
  // document.getElementById("btn").addEventListener("click", showActivity);
})


document.addEventListener("DOMContentLoaded", () => {
 
  document.getElementById("send").addEventListener("click", showActivity);
});
document.addEventListener("DOMContentLoaded", () => {
  
  document.getElementById("insc").addEventListener("click", showActivity);
});
