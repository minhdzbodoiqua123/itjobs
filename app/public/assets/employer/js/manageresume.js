async function showClassifiedResume(job_id,user_account_id){
    document.body.insertAdjacentHTML("beforeBegin",await update_resume_status(job_id,user_account_id))
    const myModal=document.getElementById("myModal");
    new bootstrap.Modal(myModal).show();
   
}

async function getData(url) {
   return (await axios.get(url)).data;
 }

async  function update_resume_status(job_id,user_account_id){
    
   const data_resume_status =await getData("http://localhost//itjobs/employer/hrcentral/Manageresume/resume_status");

   const data_resume_type=await getData("http://localhost//itjobs/employer/hrcentral/Manageresume/resume_type");
  const {resume_status_id,resume_type_id}=await getData(`http://localhost//itjobs/employer/hrcentral/Manageresume/getResume/${job_id}/${user_account_id}`);

  
   
    return `  <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="myModal"    tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered ">
       <div class="modal-content">
       <div style="width:500px;"class="jobs-posting-modal jobs-posting-9-modal fancybox-content" id="jobs-posting-9-modal" style="">
       <div style="padding:10px 0;"class="modal-header">
          <h2 class="title">Xếp loại hồ sơ  </h2>
          <button type="button" class="btn-close close_form_rexp" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
          <form id="frmResumeForClassified" name="frmResumeForClassified" action="http://localhost//itjobs/employer/hrcentral/Manageresume/updateResumeStatus" method="post">
          <input type="hidden" name="job_id"value="${job_id}">
          <input type="hidden" name="user_account_id"value="${user_account_id}">
             <div class="form-wrap">
                <p>Thực hiện xếp loại cho hồ sơ</p>
                <div class="row">
                   <div class="col-12">
                      <div class="form-group form-select">
                         <label>Trạng thái</label>
                         <select name="resume_status" id="resume_status">
                            <option value="-1">Chọn</option>
                            ${data_resume_status.map(item=>`                            <option ${+resume_status_id==item.id ? "selected" :""} value="${item.id}">${item.resume_name_status}</option>`).join("")}
                         
                                
                         </select>
                      </div>
                   </div>
                   <div class="col-12">
                      <div class="form-group form-select">
                         <label>Xếp loại</label>
                         <select class="width_150" name="resume_type" id="resume_type">
                            <option value="-1">Chọn</option>
                            ${data_resume_type.map(item=>`                            <option ${+resume_type_id==item.id ? "selected" :""} value="${item.id}">${item.resume_type}</option>`).join("")}
                                
                         </select>
                      </div>
                   </div>
                </div>
                <input type="hidden" name="strFolderId" id="strFolderId" value="369242CE">
                <input type="hidden" name="strResumeId" id="strResumeId" value="35BFE874">
                <div class="form-group form-submit">
                   <button class="btn-gradient btn-submit" id="saveClassified_resume_btn" type="submit">Lưu</button>
                </div>
             </div>
          </form>
       </div>
       <button type="button" data-fancybox-close="" class="fancybox-button fancybox-close-small" title="Close">
          <svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24">
             <path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path>
          </svg>
       </button>
    </div>
       </div>
    </div>
  </div>`;

  }


async function showResumeForInvite(){
   document.body.insertAdjacentHTML("beforeBegin",form_send_email())
   const sendMail=document.getElementById("sendMail");
   new bootstrap.Modal(sendMail).show();
}
function form_send_email(){
 
   return `  <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="sendMail"    tabindex="-1" aria-modal="true" role="dialog">
   <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">
      <div style="width:500px;"class="jobs-posting-modal jobs-posting-9-modal fancybox-content" id="jobs-posting-9-modal" style="">
      <div style="padding:10px 0;"class="modal-header">
         <h2 class="title">Gửi thông báo đến ứng viên</h2>
         <button type="button" class="btn-close close_form_rexp" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" name="frmResumeForInvite" id="frmResumeForInvite" >
      <div class="form-wrap"> 
          <div class="row">
              <div class="col-12" style="margin:0;">
                  <div class="form-group form-radio">
                      
                      <div class="group">
                          
                          
                      </div>
                        
                  </div>
                  <div class="form-group form-radio">
                      
                      <div class="">
                          <h3 >Gửi đến email</h3>
                          <input style="margin:10px 0;"type="text" name="f_email" id="f_email" placeholder="Vui lòng nhập email!">
                      </div>
                      
                    
                  </div>
                    <span class="error error_f_email" id="show_alert_email_invite"></span>
              </div>
              <div class="col-12">
                  <div class="form-group form-text">
                      <label>Tiêu đề <font style="color: red">*</font></label>
                      <input type="text" name="f_title" id="f_title" placeholder="Nhập nội dung">

                      <span class="error error_f_title"></span>

                      <span class="noted">Tối đa 70 kí tự</span>
                  </div>
              </div>
              <div class="col-12">
                  <div class="form-group form-textarea">
                      <label>Nội dung <font style="color: red">*</font></label>
                      <textarea placeholder="Nhập nội dung" name="f_content" id="f_content"></textarea>


                      <span class="error error_f_content"></span>

                      <span class="noted">Lớn hơn 10 và nhỏ hơn 3.000 kí tự</span>
                  </div>
              </div>
          </div>
          <div class="form-group form-submit">
             
              <button class="btn-gradient btn-submit" id="resume_detail_invite_mail" type="button" onclick="sendInviteLetter();">Gửi</button>
          </div>
      </div>
  </form>
  
  
  
  </div>
      <button type="button" data-fancybox-close="" class="fancybox-button fancybox-close-small" title="Close">
         <svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24">
            <path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path>
         </svg>
      </button>
   </div>
      </div>
   </div>
 </div>`;
}
async function sendInviteLetter(){
   const f_mail=document.querySelector("input[name='f_email']");
   console.log(f_mail);
   const f_content=document.querySelector("textarea[name='f_content']");
   const f_title=document.querySelector("input[name='f_title']");
   const data={
      f_mail:f_mail.value,
      f_content:f_content.value,
      f_title:f_title.value,
   };

   const params = new URLSearchParams(data);
   axios.post("http://localhost//itjobs/employer/hrcentral/manageresume/sendMail",params)
  let sendMail=bootstrap.Modal.getOrCreateInstance(document.getElementById('sendMail'));
   sendMail.hide();
    document.body.insertAdjacentHTML("beforeBegin", showSuccessMessage())
    const showSuccess=document.getElementById("showSuccess");
    new bootstrap.Modal(showSuccess).show();
    showSuccess.remove();
}
function showSuccessMessage(){
   return `
   <div class="modal fade"  id="showSuccess"  tabindex="-1" aria-modal="true" role="dialog">
   <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">
      <div style="width:500px;" class="jobs-posting-modal modal-noti-emp success-modal fancybox-content" style="">
      <div class="modal-head"><img src="	https://static.careerbuilder.vn/themes/employer/img/icon-success.png" alt="icon-modal"></div>
      <div class="modal-body">
         <p class="title">Thông báo</p>
         <p>Gửi mail thành công</p>
         <div data-bs-dismiss="modal" class="button closeFormSuccess"><a class="btn-gradient" href="javascript:void(0);">Đóng</a></div>
      </div>
      <button type="button" class="fancybox-button  fancybox-close-small" title="Close">
         <svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24">
            <path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path>
         </svg>
      </button>
   </div>

      </div>
   </div>
 </div>
`
}
document.addEventListener('click', function (e) {
   if(e.target.closest(".closeFormSuccess")){
   const showSuccess=document.getElementById("showSuccess");
   showSuccess.remove();

   }
 
 })