import {modalAlert,ConfigAlert} from "./alert.js"

const btn_save_resume=document.querySelectorAll('.btn-save-folder');
btn_save_resume.forEach(element => {
    element.addEventListener("click",function(e) {
        const resume_id=this.getAttribute("data-id-resume")
        modalAlert.fire(ConfigAlert("BẠN CÓ MUỐN LƯU HỒ SƠ NÀY KHÔNG","","",
        ``
      
 
         )).then(result =>{
             if(result.isConfirmed){
                //  axios.post("http://localhost//itjobs/employer/postjobs/post_success/"+id);
                 location.reload();  
             }
         })
    })
    
});
