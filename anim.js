const accueil = document.querySelector(".btn");
const btn2 = document.getElementById(".btn");

accueil.addEventListener("click", () => {
  accueil.classList.add("btn-click");
});

btn2.addEventListener("click", () => {
  response.classList.add("question");
  // response.style.background = "green";
  response.style.visibility = "visible";
  response.style.transform = "translateX(0)";
});
bnt1.addEventListener("click", () => {
  response.classList.add("show-response");
  response.style.background = "green";
  //response.style.visibility = "visible";
});
