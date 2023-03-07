var prevScrollpos = window.pageYOffset;
window.addEventListener("scroll", function () {
  var currentScrollPos = window.pageYOffset;
  
  var nav = document.getElementById("nav")
  var as = document.getElementsByClassName("nav-link");
 
  
  if(nav.offsetWidth >= 970  ){
  
  if (prevScrollpos < currentScrollPos) {
    
    nav.style.backgroundColor = "white";
    nav.style.padding = "22px";
    nav.style.position = "fixed";
    

    for (let i = 0; i < as.length; i++) {

      as[i].classList.replace("text-light", "text-dark");
    }
    nav.style.transition = "0.4s";

  } 
  else if (prevScrollpos == 0) {


    nav.style.backgroundColor = "transparent";

    nav.style.padding = "0px";
    nav.style.position = "fixed";

  

    for (let i = 0; i < as.length; i++) {

      as[i].classList.replace("text-dark", "text-light");
    }

         nav.style.transition = "0.5s";

}
  }
  else if(nav.offsetWidth < 970)
  {

    nav.style.position = "absolute";
  }

 
});