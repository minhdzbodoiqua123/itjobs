 const modalAlert = Swal.mixin({
   customClass: {
     confirmButton: "btn btn-success",
     cancelButton: "btn btn-danger",
     actions: "custome-actions",
   },
   buttonsStyling: false,
 });


function ConfigAlert(text){
return  {
 title: "Cảnh báo",
 text: text,
 icon: "warning",
 showCancelButton: true,
 confirmButtonText: "Đồng ý",
 cancelButtonText: "Hủy bỏ",
 reverseButtons: true,
};
}




async function getData(url) {
    return (await axios.get(url)).data;
  }

//load thông tin form kinh nghiệm việc Làm
async function show_frmExperience(id){

    document.body.insertAdjacentHTML("beforeBegin",await update_resume_experience(id))
    const myModal=document.getElementById("myModal");
    new bootstrap.Modal(myModal).show();
   

} 


 function deleteExperience(id){
   console.log(id);
   const expList=document.querySelector(`#expList_${id}`);
   modalAlert.fire(ConfigAlert("Bạn có muốn xóa kinh nghiệm này không ?")).then(async result => {
   if (result.isConfirmed) {
      const deleteItem=await axios.post(`http://localhost//itjobs/jobseekers/my_profile/delete_resume_experience/${id}`);
      expList.remove();
      window.location.reload();
   }

})

}
// function deleteExperience(){

//    // const expList=document.querySelector(`#expList_${id}`);
//    modalAlert.fire(ConfigAlert("Bạn có muốn xóa kinh nghiệm này không ?")).then(async result => {
//    if (result.isConfirmed) {
//       document.getElementById("delete_resume_experience").submit();
//    }

// })

// }



 async  function update_resume_experience(id){
    
    const currentYear = (new Date()).getFullYear();
    const range = (start, stop, step) => Array.from({ length: (stop - start) / step + 1}, (_, i) => start + (i * step));
    const arrYears=range(currentYear, currentYear - 50, -1);
    const arrMonths=[1,2,3,4,5,6,7,8,9,10,11,12];
    const job_type=await getData("http://localhost//itjobs/jobseekers/my_profile/job_type")
const data_resume_experience=await getData(`http://localhost//itjobs/jobseekers/my_profile/data_resume_experience/${id}`);
    console.log(data_resume_experience);
const [{rexp_title,rexp_workdesc,rexp_company,start_job,end_job,job_type_id,experCurrent}]=data_resume_experience
    
    const [rexp_month_start,rexp_year_start]=start_job.split("/");
    const [rexp_month_end,rexp_year_end]=end_job.split("/");
   
  

  
   
    return `  <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="myModal"    tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog">
       <div class="modal-content">
          <div class="modal-header">
             <h2 class="modal-title">Kinh Nghiệm Làm Việc</h2>
             <button type="button" class="btn-close close_form_rexp" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            
                 <form name="experience-form" id="experience-form" method="post"                  
                action="my_profile/update_resume_experience">
             <input type="hidden" value="${id}" name="rexp_id" id="rexp_id">
             <div class="form-group row">
                <div class="col-lg-3 col-xl-3">
                   <label for="">Vị trí / Chức danh<span>*</span></label>
                </div>
                <div class="col-lg-9 col-xl-9">
                   <div class="input-group">
                      <input type="text" value="${rexp_title}" class="form-control" name="rexp_title" maxlength="100">
                   </div>
               
                </div>
             </div>
             <div class="form-group row">
                <div class="col-lg-3 col-xl-3">
                   <label for="">Công ty<span>*</span></label>
                </div>
                <div class="col-lg-9 col-xl-9">
                   <div class="input-group">
                      <input type="text" value="${rexp_company}" class="form-control" name="rexp_company" maxlength="200">
                   </div>
                   <div class="form-error"><span class="err_rexp_company" style="display:none"></span></div>
                </div>
             </div>
             <div class="form-group row">
                <div class="col-lg-3 col-xl-3">
                   <label for="">Phương thức công việc</label>
                </div>
                <div class="col-lg-9 col-xl-9">
                   <div class="select-group">
                      <select name="rexp_worktype">
                         <option value="">Chọn</option>
                         ${job_type.map(item=>`<option ${job_type_id==item.id ? 'selected' : ''}  value="${item?.id}">${item?.job_type}</option>`)}
                    
                      </select>
                   </div>
                </div>
             </div>
             <div class="form-group row">
                <div class="col-lg-3 col-xl-3">
                   <label for="">Thời gian làm việc</label>
                </div>
                <div class="col-lg-9 col-xl-9">
                   <div class="form-work-time">
                      <div class="start-date">
                         <div class="select-group">
                         <select name="rexp_month_start">
                         <option value="">Tháng</option>
                         ${arrMonths.map(item=>`<option  ${rexp_month_start==item ? 'selected' : ''} value="${item}">${item}</option>`).join("")}
         
           
                      </select>
                         </div>
                         <div class="select-group">
                         <select name="rexp_year_start">
                         <option value="">Năm</option>
                         ${arrYears.map(item=>`<option  ${+rexp_year_start==item ? 'selected' : ''} value="${item}">${item}</option>`).join("")}
                      </select>
                         </div>
                      </div>
                      <div class="to"><span>Đến </span></div>
                      <div class="end-date">
                         <div class="select-group">
                            <select 
                             ${+experCurrent==1 ? 'disabled' : ''}
                              name="rexp_month_end">
                            <option
                           
                            value="">Tháng</option>
                            ${arrMonths.map(item=>`<option
                   
                              ${+rexp_month_end==item ? 'selected' : ''} 
                              value="${item}">${item}          
                                </option>`).join("")}
                        
                            </select>
                         </div>
                         <div class="select-group">
                         <select  
                         ${+experCurrent==1 ? 'disabled' : ''} 
                          name="rexp_year_end">
                         <option value="">Năm</option>
                         ${arrYears.map(item=>`<option  
                           ${+rexp_year_end==item ? 'selected' : ''} 
                           value="${item}">${item}                
                            </option>`).join("")}
         
                      </select>
                         </div>
                      </div>
                      <div class="no-date">
                         <div class="form-group form-checkbox mt-1 work-time-now">
                            <input type="checkbox" ${+experCurrent==1 ? 'checked' : ''} name="cboExperCurrent" id="cboExperCurrent" value="1">
                            <label for="cboExperCurrent">Hiện nay</label>
                         </div>
                      </div>
                   </div>
                   <div class="form-error">
                      <span class="err_rexp_month_start" style="display:none"></span>
                      <span class="err_rexp_year_start" style="display:none"></span>
                      <span class="err_cboExperCurrent" style="display:none"></span>
                   </div>
                </div>
             </div>
             <div class="form-group row">
                <div class="col-lg-3 col-xl-3">
                   <label for="">Mô tả công việc</label>
                </div>
                <div class="col-lg-9 col-xl-9">
                   <div class="textarea-group">
                      <textarea name="rexp_workdesc" rows="3" class="form-control" placeholder="Vui lòng nhập tối đa không quá 4.000 ký tự" maxlength="4000">${rexp_workdesc}</textarea>
                   </div>
                   <div class="form-error">
                      <span class="err_rexp_workdesc" style="display:none"></span>
                   </div>
                </div>
             </div>
             <div class="form-group form-button">
                <div class="button-save button-center">
                   <button class="btn-gradient" type="submit">Lưu Lại</button>
                </div>
             </div>
           </form>
          </div>
       </div>
    </div>
  </div>`;

  }


  



  function handleCboExperCurrent(e){
  
    const rexp_month_end=$("select[name='rexp_month_end']")
    const rexp_year_end=$("select[name='rexp_year_end']")
    if(e.target.checked){
      
    
      rexp_month_end.setAttribute('disabled','')
      rexp_year_end.setAttribute('disabled','')  
      rexp_month_end.value=""
      rexp_year_end.value=""
      
    }
    else{
      rexp_month_end.removeAttribute('disabled')
      rexp_year_end.removeAttribute('disabled')  
    
  
    }
  }

  document.addEventListener('click', function (e) {
    if(e.target.closest(".close_form_rexp")){
    const myModal=document.getElementById("myModal");
    myModal.remove();

    }
    else if(e.target.closest("#cboExperCurrent")){
      handleCboExperCurrent(e)
    }
    return false;
  })

  window.addEventListener('scroll',function() {
   //When scroll change, you save it on localStorage.
   localStorage.setItem('scrollPosition',window.scrollY);
},false);

window.addEventListener('load',function() {
   if(localStorage.getItem('scrollPosition') !== null)
      window.scrollTo(0, localStorage.getItem('scrollPosition'));
},false);

