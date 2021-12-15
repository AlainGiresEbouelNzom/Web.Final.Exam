const accueil = document.querySelector(".btn");
const btn2 = document.getElementById(".btn");

/*const act = () => {
  var monobjet_json = sessionStorage.getItem("objet");
  var monobjet2 = JSON.parse(monobjet_json);
  // Affichage dans la console
  alert(monobjet2.name);
};*/

const showActivity = (ev) => {
  var monobjet_json = sessionStorage.getItem("objet");
var monobjet2 = JSON.parse(monobjet_json);
// Affichage dans la console
alert(monobjet2.name +"\n"  + monobjet2.description);
}
accueil.addEventListener("click", () => {
  accueil.classList.add("btn-click");
  //document.getElementById("send").addEventListener("click", showActivity);
  alert("hello")
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
