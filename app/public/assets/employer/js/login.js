window.onload = function () {

    var form = document.getElementById("frmLogin");

    // create the pristine instance
    var pristine = new Pristine(form);

    form.addEventListener('submit', function (e) {
       e.preventDefault();
       
       // check if the form is valid
       var valid = pristine.validate(); // returns true or false
        if(valid){
            e.target.submit()
        }
    });
};