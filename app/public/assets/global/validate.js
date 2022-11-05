window.onload = function () {
    Pristine.addValidator("my-range", function(value, param1, param2) {
      
        return parseInt(param1) <= value && value <= parseInt(param2)
        
      }, "The value (${0}) must be between ${1} and ${2}", 5, false);  
 };