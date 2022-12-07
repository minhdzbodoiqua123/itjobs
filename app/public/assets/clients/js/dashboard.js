async function downloadCvAttach(resume_id){
    const params = new URLSearchParams();

    params.append('resume_id',resume_id);

    const cv=await axios.post('http://localhost//itjobs/jobseekers/myattach/data_resume',params)
    const config = { responseType: 'blob' };
    const filePdf=await axios.get(`http://localhost/itjobs/app/library/pdfjs/web/images/${cv.data.file_location}`,config)
    const data=await filePdf.data;
         var a = document.createElement('a');
        var url = window.URL.createObjectURL(data);
        a.href = url;
        a.download = `${cv.data.file_location}`;
        document.body.append(a);
        a.click();
        a.remove();
        window.URL.revokeObjectURL(url);
       
}


function handleSwtichStatus(){
    const buttonSwitch=document.querySelectorAll('.switch-status a');
    buttonSwitch.forEach(element => {
        element.addEventListener('click',async function(){
            const value=this.getAttribute('data-type');
            const resume_id=this.parentElement.getAttribute('data-id');
            document.body.insertAdjacentHTML("beforeBegin",await FormSwitchStatus(resume_id))
            const formData = new FormData();
            formData.append('resume_active', `${value}`);
            formData.append('resume_id', `${resume_id}`);


            const ModalSwitchStatus=document.getElementById("ModalSwitchStatus");
         
            new bootstrap.Modal(ModalSwitchStatus).show();
            document.getElementById('popup_ok').addEventListener('click',async () =>{
 const post_data=await axios.post("http://localhost//itjobs/employer/hrcentral/manageresume/SwitchResumeStatus",formData);
                location.reload();
            })
            deleteModal()
        //    switch (value) {
        //     case 2:
        // document.body.insertAdjacentHTML("beforeBegin",await insertFrmEducation(id))
                
        //         break;
        //    case 3:
        //     document.body.insertAdjacentHTML("beforeBegin",await insertFrmEducation(id))

        //    break;
        //     default:
        //         document.body.insertAdjacentHTML("beforeBegin",await insertFrmEducation(id))

        //         break;
        //    }
            

        })
    });
}

async function getData(url) {
    return (await axios.get(url)).data;
  }

async function FormSwitchStatus(resume_id){
    const data_resume=await getData("http://localhost//itjobs/jobseekers/dashboard/DataResume");
    const {resume_title}=data_resume.find(resume =>resume.id==resume_id);


    return `  <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="ModalSwitchStatus"   tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog">
       <div class="modal-content">
          <div class="modal-header">
             <h2 class="modal-title" style="text-align:center">Vui lòng thao tác đầy đủ để hoàn thành</h2>
             <button type="button" class="btn-close close_FormSwitchStatus" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <div id="popup_content" class="confirm">
          <div id="popup_message">Bạn có thực sự muốn chọn Hồ sơ  <strong>"${resume_title}"</strong> làm Hồ sơ mặc định cho Nhà tuyển dụng tìm kiếm hay không?</div>
          <div id="popup_panel">
          <input type="button" value="Chọn mặc định" id="popup_ok" style="height: auto">
           <input type="button" value="Không chọn mặc định" data-bs-dismiss="modal" id="popup_cancel" style="height: auto">
          
          </div>
       </div>
          
          </div>
       </div>
    </div>
  </div>`;
}

function deleteModal(){
const close_FormSwitchStatus=document.querySelector('.close_FormSwitchStatus');
const ModalSwitchStatus=document.getElementById("ModalSwitchStatus");

close_FormSwitchStatus.onclick=function(){
    ModalSwitchStatus.remove()
}
popup_cancel.onclick=function(){
    ModalSwitchStatus.remove()
}
}
function start() {
    handleSwtichStatus()
  

}
start()