        
        let chambre = document.getElementById('chambre');
        let price = document.getElementById('price');
        let priceCruise = parseInt(document.getElementById("priceCruise").value);
        window.addEventListener("load",()=>{
            price.value=priceCruise+"$";
            console.log("sssssssssssss");

         
            chambre.addEventListener("change",()=>{
                 let chambreValue = parseInt(chambre.options[chambre.selectedIndex].dataset.val);
                   
            
                
                price.value=priceCruise+chambreValue+"$";
                
                
            })
    
        })
         
      