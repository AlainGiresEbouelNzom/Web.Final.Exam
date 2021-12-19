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
const activity11 = document.getElementById("activity-11");
const activity12 = document.getElementById("activity-12");
const activity13 = document.getElementById("activity-13");
const activity14 = document.getElementById("activity-14");
const activity15 = document.getElementById("activity-15");
const activity16 = document.getElementById("activity-16");
const activity17 = document.getElementById("activity-17");
const activity18 = document.getElementById("activity-18");
const activity19 = document.getElementById("activity-19");
const activity20 = document.getElementById("activity-20");

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
const trash11 = document.getElementById("trash11");
const trash12 = document.getElementById("trash12");
const trash13 = document.getElementById("trash13");
const trash14 = document.getElementById("trash14");
const trash15 = document.getElementById("trash15");
const trash16 = document.getElementById("trash16");
const trash17 = document.getElementById("trash17");
const trash18 = document.getElementById("trash18");
const trash19 = document.getElementById("trash19");
const trash20 = document.getElementById("trash20");
const alltrash = document.querySelectorAll(".trash");

activities = document.querySelectorAll(".activities");

function search_activity() {
  let input = document.getElementById("searchbar").value;  ;
  input = input.toLowerCase();
  let x = document.getElementsByClassName("activities");

  for (i = 0; i < x.length; i++) {
    if (!x[i].innerHTML.toLowerCase().includes(input)) {
      x[i].style.display = "none";

    } else {
      x[i].style.display = "list-item";          
    }     
  }  
  if(input == "")
  location.reload();
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
    activity7.style.display = "none";
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

trash11.addEventListener("click", () => {
  var res = confirm("Êtes-vous sûr de vouloir supprimer?");
  if(res){
    activity11.style.display = "none";   
  }
});
trash12.addEventListener("click", () => {
  var res = confirm("Êtes-vous sûr de vouloir supprimer?");
  if(res){
    activity12.style.display = "none";
  }
});
trash13.addEventListener("click", () => {
  var res = confirm("Êtes-vous sûr de vouloir supprimer?");
  if(res){
    activity13.style.display = "none";
  }
});
trash14.addEventListener("click", () => {
  var res = confirm("Êtes-vous sûr de vouloir supprimer?");
  if(res){
    activity14.style.display = "none";
  }
});
trash15.addEventListener("click", () => {
  var res = confirm("Êtes-vous sûr de vouloir supprimer?");
  if(res){
    activity15.style.display = "none";
  }
});
trash16.addEventListener("click", () => {
  var res = confirm("Êtes-vous sûr de vouloir supprimer?");
  if(res){
    activity16.style.display = "none";
  }
});
trash17.addEventListener("click", () => {
  var res = confirm("Êtes-vous sûr de vouloir supprimer?");
  if(res){
    activity17.style.display = "none";
  }
});
trash18.addEventListener("click", () => {
  var res = confirm("Êtes-vous sûr de vouloir supprimer?");
  if(res){
    activity18.style.display = "none";
  }
});
trash19.addEventListener("click", () => {
  var res = confirm("Êtes-vous sûr de vouloir supprimer?");
  if(res){
    activity19.style.display = "none";
  }
});
trash20.addEventListener("click", () => {
  var res = confirm("Êtes-vous sûr de vouloir supprimer?");
  if(res){
    activity20.style.display = "none";
  }
});

let y = document.getElementsByClassName("activities");
document.addEventListener("DOMContentLoaded", display_activity(), () => { 
});
