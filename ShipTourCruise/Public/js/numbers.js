var section =document.getElementById("counter")
var counter = document.querySelectorAll(".num");


    window.onscroll= function (){
       var test = section.offsetTop - 100
      console.log(test)
      setTimeout(console.log(window.scrollY),2000);

  if(test <= window.scrollY){

    
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
