import {modalAlert,ConfigAlert} from "./alert.js"

async function getData(url) {
    return (await axios.get(url)).data;
  }
  
const btn_recruit=document.querySelectorAll('.btn_recruit');
async function notification(){
 
    btn_recruit.forEach(item=>{
      item.addEventListener('click',async function(){
        const id=   this.getAttribute("data-id");
        const {created_date,end_date,job_title}=await getData("http://localhost//itjobs/employer/postjobs/infoJobPost2/"+id);
     
        modalAlert.fire(ConfigAlert("XÁC NHẬN THÔNG TIN ĐĂNG TUYỂN DỤNG","","",
       `<div style='text-align:left;margin-bottom:15px;'>Chức danh:<b style='color:red'>${job_title}</b>  </div>
 <div style='display:flex;justify-content: space-between;'><div><b>Ngày đăng:</b>${created_date}</div> <div><b>Ngày hết hạn:</b>${end_date}</div></div>`
     

        )).then(result =>{
            if(result.isConfirmed){
                axios.post("http://localhost//itjobs/employer/postjobs/post_success/"+id);
                location.reload();  
            }
        })
      })
    })
   
}
notification();