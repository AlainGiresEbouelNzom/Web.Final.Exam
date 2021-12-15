const accueil = document.querySelector(".btn");
const btn2 = document.getElementById("home");

let activities = [];
// example {id:1592304983049, title: 'Deadpool', year: 2015}
const addActivity = (ev) => {
  // ev.preventDefault(); //to stop the form submitting
  let activity = {
    name: document.getElementById("name").value,
    description: document.getElementById("description").value,
    imageAdress: document.getElementById("image-adress").value,
    statut: document.getElementById("activity-statut").value,
  };

  activities.push(activity);
  document.forms[0].reset(); // to clear the form for the next entries
  //document.querySelector('form').reset();

  //for display purposes only
  console.warn("added", { activities });
  let pre = document.querySelector("#msg pre");
  //pre.textContent = "\n" + JSON.stringify(activities, "\t", 2);
  pre = JSON.stringify(activities);

  //saving to localStorage
  //localStorage.setItem("ActivityList", JSON.stringify(activities));
  localStorage.setItem("activitiesList", pre);

  var monobjet = {
    propriete1: "valeur1",
    propriete2: "valeur2",
  };
  var monobjet_json = JSON.stringify(activity);
  sessionStorage.setItem("objet", monobjet_json);

  // alert(pre[0].name);
};
const showActivity = (ev) => {
  alert("hello");
  var monobjet_json = sessionStorage.getItem("objet");
  var monobjet2 = JSON.parse(monobjet_json);
  // Affichage dans la console
  alert(monobjet2.name + "\n" + monobjet2.description);
 
  
};
accueil.addEventListener("click", showActivity, () => {
  accueil.classList.add("btn-click");
  // document.getElementById("btn").addEventListener("click", showActivity);
});

document.addEventListener("DOMContentLoaded", () => {
  document.getElementById("send").addEventListener("click", addActivity);
  document.getElementById("send").addEventListener("click", showActivity);
});
document.addEventListener("DOMContentLoaded", () => {
  document.getElementById("insc").addEventListener("click", addActivity);
  document.getElementById("insc").addEventListener("click", showActivity);
});
