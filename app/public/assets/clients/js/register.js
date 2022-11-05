window.onload = function () {
    
 
  
      var form = document.getElementById("frmRegister");
   

      var pristine = new Pristine(form);




      form.addEventListener('submit', function (e) {
         e.preventDefault();
       

         var valid = pristine.validate();
        
        if (valid) {
          e.target.submit();
        } else {
          // alert("Form is invalid");
        }
   
      });
   
   };