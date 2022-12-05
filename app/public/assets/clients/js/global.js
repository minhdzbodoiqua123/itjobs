function showMyJob(){
    const collapse=document.querySelector(".collapse");
    const list_unstyled=document.querySelector(".list-unstyled.collapse")
    if(collapse && list_unstyled){
      collapse.addEventListener('click', function(){
        this.classList.toggle("active");
        list_unstyled.classList.toggle("active");
      
      
      })
    }

}
    
showMyJob()