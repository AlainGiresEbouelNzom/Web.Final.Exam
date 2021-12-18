//const accueil = document.querySelector(".play-pause-trash button");
const activity1 = document.getElementById("activity-1");
const activity2 = document.getElementById("activity-2");
const activity3 = document.getElementById("activity-3");
const activity4 = document.getElementById("activity-4");
const activity5 = document.getElementById("activity-5");
const activity6 = document.getElementById("activity-6");
const activity7 = document.getElementById("activity-7");
const activity8 = document.getElementById("activity-8");
const activity9 = document.getElementById("activity-9");
const activity10 = document.getElementById("activity-10");

const trash1 = document.getElementById("trash1");
const trash2 = document.getElementById("trash2");
const trash3 = document.getElementById("trash3");
const trash4 = document.getElementById("trash4");
const trash5 = document.getElementById("trash5");
const trash6 = document.getElementById("trash6");
const trash7 = document.getElementById("trash7");
const trash8 = document.getElementById("trash8");
const trash9 = document.getElementById("trash9");
const trash10 = document.getElementById("trash10");
const alltrash = document.querySelectorAll(".trash");

activities = document.querySelectorAll(".activities");

function search_activity() {
  let input = document.getElementById("searchbar").value;
  input = input.toLowerCase();
  let x = document.getElementsByClassName("activities");

  for (i = 0; i < x.length; i++) {
    if (!x[i].innerHTML.toLowerCase().includes(input)) {
      x[i].style.display = "none";
    } else {
      x[i].style.display = "list-item";
    }
  }
}
function display_activity() {
  let input = "empty";
  input = input.toLowerCase();
  let x = document.getElementsByClassName("activities");
  let y = document.getElementsByClassName("active");

  for (i = 0; i < x.length; i++) {
    
    if(y[i].textContent.includes("empty")) {
      x[i].style.display = "none";
    } else {
      x[i].style.display = "list-item";
    }
  }
  
}


trash1.addEventListener("click", () => {
  var res = confirm("Êtes-vous sûr de vouloir supprimer?");
  if(res){
    activity1.style.display = "none";
  }
});
trash2.addEventListener("click", () => {
  var res = confirm("Êtes-vous sûr de vouloir supprimer?");
  if(res){
    activity2.style.display = "none";
  }
});
trash3.addEventListener("click", () => {
  var res = confirm("Êtes-vous sûr de vouloir supprimer?");
  if(res){
    activity3.style.display = "none";
  }
});
trash4.addEventListener("click", () => {
  var res = confirm("Êtes-vous sûr de vouloir supprimer?");
  if(res){
    activity4.style.display = "none";
  }
});
trash5.addEventListener("click", () => {
  var res = confirm("Êtes-vous sûr de vouloir supprimer?");
  if(res){
    activity5.style.display = "none";
  }
});
trash6.addEventListener("click", () => {
  var res = confirm("Êtes-vous sûr de vouloir supprimer?");
  if(res){
    activity6.style.display = "none";
  }
});
trash7.addEventListener("click", () => {
  var res = confirm("Êtes-vous sûr de vouloir supprimer?");
  if(res){
    activity8.style.display = "none";
  }
});
trash8.addEventListener("click", () => {
  var res = confirm("Êtes-vous sûr de vouloir supprimer?");
  if(res){
    activity8.style.display = "none";
  }
});
trash9.addEventListener("click", () => {
  var res = confirm("Êtes-vous sûr de vouloir supprimer?");
  if(res){
    activity9.style.display = "none";
  }
});
trash10.addEventListener("click", () => {
  var res = confirm("Êtes-vous sûr de vouloir supprimer?");
  if(res){
    activity10.style.display = "none";
  }
});

let y = document.getElementsByClassName("activities");
document.addEventListener("DOMContentLoaded", display_activity(), () => { 
});
