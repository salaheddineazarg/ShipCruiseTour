var section =document.getElementById("counter")
var counter = document.querySelectorAll(".num");


    window.onscroll= function (){
      
  if(window.scrollY >= section.offsetTop){
    
    counter.forEach((element)=>{
          const count = parseInt(element.getAttribute("data-val"));
          
           let startCount = setInterval(function(){
              let start = parseInt(element.textContent);
             
              element.textContent++;
              start++;
              if( start > count ){
                  element.textContent = count
                  clearInterval(startCount);
              }
            }, 5000/count);
          })

   

  }
}
