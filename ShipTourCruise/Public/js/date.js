window.addEventListener("load",()=>{


var today  = new Date().toISOString().split('T');
console.log(today)
let inputDate = document.getElementById("dateInput");

 inputDate.setAttribute("min",today)

})