
document.getElementById("form").onsubmit = (e) =>{

    let name = document.getElementsByClassName("name");
    let message = document.getElementById("message")

   for(var i = 0 ; i< name.length ;i++){
    
      
       if ( name[i].value == ""){
     
         e.preventDefault();
           
         message.innerText="Please Fill All The Fields"
         message.style.color="red"
        
       
         alert("Please Check All The Inputs ")
          
       
 
        return false
       
       }
      
    
   }
 }
 