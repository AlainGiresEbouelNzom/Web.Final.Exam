//const accueil = document.querySelector(".play-pause-trash button");
const activity1 = document.getElementById("activity-1");
const activity2 = document.getElementById("activity-2");
const activity3 = document.getElementById("activity-3");
const activity4 = document.getElementById("activity-4");
const activity5 = document.getElementById("activity-5");
const activity6 = document.getElementById("activity-6");
const activity7= document.getElementById("activity-7");
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
const alltrash =  document.querySelectorAll(".trash");


activities = document.querySelectorAll(".activities");

/*alltrash.forEach(button => {
  button.addEventListener('click', () => {
   button.style.visibility = "hidden";

  });*/



trash1.addEventListener('click', ()=>{  
   activity1.style.visibility = "hidden";
})
trash2.addEventListener('click', ()=>{  
  activity2.style.visibility = "hidden";
})
trash3.addEventListener('click', ()=>{  
  activity3.style.visibility = "hidden";
})
trash4.addEventListener('click', ()=>{  
  activity4.style.visibility = "hidden";
})
trash5.addEventListener('click', ()=>{  
  activity5.style.visibility = "hidden";
})
trash6.addEventListener('click', ()=>{  
  activity6.style.visibility = "hidden";
})
trash7.addEventListener('click', ()=>{  
  activity7.style.visibility = "hidden";
})
trash8.addEventListener('click', ()=>{  
  activity8.style.visibility = "hidden";
})
trash9.addEventListener('click', ()=>{  
   activity9.style.visibility = "hidden";
})
trash10.addEventListener('click', ()=>{  
  activity10.style.visibility = "hidden";
})




//fetch("message.json").then(res=>res.json()).then(data=>console.log(data));

document.addEventListener("DOMContentLoaded", () => {
  activity1.style.visibility = "hidden";
})
  alert("Test en cours");
 /* activities.forEach(element => {
    element.classList.add(".activities-visibility")
    
  })
  
  
  //location.reload();

  
 
  //document.getElementById("send").addEventListener("click", showActivity);
});*/