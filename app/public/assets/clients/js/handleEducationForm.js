


function handleFormEducation(){
    const box_edit_degree=document.querySelector('.box-edit-degree');
    const highest_degree=document.querySelector('.highest-degree');
    const  link_highest_degree=document.querySelector('.link-highest-degree');
    link_highest_degree.addEventListener('click',function(){
        box_edit_degree.classList.add('active')
        highest_degree.classList.add('active')

    })
}

 async function getData(url) {
    return (await axios.get(url)).data;
  }


async function show_frmEducation(id){
    if(id==0){
        document.body.insertAdjacentHTML("beforeBegin",await insertFrmEducation(id))
    }
    else{
        document.body.insertAdjacentHTML("beforeBegin",await updateFrmEducation(id))
    }
       
    
   
 


    const myModal=document.getElementById("myModal");
    new bootstrap.Modal(myModal).show();
}

 async function deleteEducation(id){

    const eduList=document.querySelector(`#eduList_${id}`);
    modalAlert.fire(ConfigAlert("Bạn có muốn xóa kinh nghiệm này không ?")).then(async result => {
    if (result.isConfirmed) {
       const deleteItem=await axios.post(`http://localhost//itjobs/jobseekers/my_profile/delete_education/${id}`);
       eduList.remove();
       window.location.reload();
    }
 })
}

async function insertFrmEducation(id){
    const currentYear = (new Date()).getFullYear();
    const range = (start, stop, step) => Array.from({ length: (stop - start) / step + 1}, (_, i) => start + (i * step));
    const arrYears=range(currentYear, currentYear - 50, -1);
    const arrMonths=[1,2,3,4,5,6,7,8,9,10,11,12];

 const data_degree=await getData("http://localhost//itjobs/jobseekers/my_profile/data_degree");

    return `  <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="myModal"    tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog">
       <div class="modal-content">
          <div class="modal-header">
             <h2 class="modal-title">Quá Trình Học Tập</h2>
             <button type="button" class="btn-close close_form_rexp" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <form name="education-form" id="education-form" method="post" action="my_profile/insertEducationForm">
          <input type="hidden" name="redu_id" id="redu_id" value="0">
          <div class="form-group row">
            <div class="col-lg-4">
              <label for="">Trường / khóa học<span>*</span></label>
            </div>
            <div class="col-lg-8">
              <div class="input-group">
                <input type="text" name="redu_name" id="redu_name" value="" maxlength="200">
              </div>
              <div class="form-error"><span class="err_redu_name" style="display:block"></span></div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-4">
              <label for="">Bằng cấp<span>*</span></label>
            </div>
            <div class="col-lg-8">
              <div class="select-group">
                <select name="redu_degree" id="redu_degree">
                <option value="">Chọn</option>
         ${data_degree.map(item=>` <option value="${item.id}">${item.degree_name}</option>`).join("")}    
                </select>
              </div>
              <div class="form-error"><span class="err_redu_degree" style="display:block"></span></div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-4">
              <label for="">Tốt nghiệp</label>
            </div>
            <div class="col-lg-8">
              <div class="select-graduating">
                <div class="select-group">
                  <select name="redu_month" id="redu_month">
                    <option value="">Tháng</option>
         ${arrMonths.map(item=>`<option value="${item}">${item}</option>`).join("")}      
                  </select>
                </div>
                <div class="select-group">
                  <select name="redu_year" id="redu_year">
                    <option value="">Năm</option>
                    ${arrYears.map(item=>`<option  value="${item}">${item}</option>`).join("")}                 
                  </select>
                </div>
              </div>
              <div class="form-error"><span class="err_redu_month" style="display:block"></span></div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-4">
              <label for="">Mô tả chi tiết</label>
            </div>
            <div class="col-lg-8">
              <div class="textarea-group">
                <textarea name="redu_desc" id="redu_desc" placeholder="Vui lòng nhập tối đa không quá 4.000 ký tự" maxlength="40000"></textarea>
              </div>
              <div class="form-error"><span class="err_redu_desc" style="display:block"></span></div>
            </div>
          </div>
          <div class="form-group form-button">
            <div class="button-save button-center">
              <button class="btn-gradient" type="submit" >Lưu Lại</button>
            </div>
          </div>
        </form>
          
          </div>
       </div>
    </div>
  </div>`;
}


async function updateFrmEducation(id){
      const currentYear = (new Date()).getFullYear();
    const range = (start, stop, step) => Array.from({ length: (stop - start) / step + 1}, (_, i) => start + (i * step));
    const arrYears=range(currentYear, currentYear - 50, -1);
    const arrMonths=[1,2,3,4,5,6,7,8,9,10,11,12];

 const data_degree=await getData("http://localhost//itjobs/jobseekers/my_profile/data_degree");
 const [{redu_name,start_date,end_date,detail_desc,degree_id}]=await getData(`http://localhost//itjobs/jobseekers/my_profile/getSeekerEducation/${id}`);

    return `  <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="myModal"    tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog">
       <div class="modal-content">
          <div class="modal-header">
             <h2 class="modal-title">Quá Trình Học Tập</h2>
             <button type="button" class="btn-close close_form_rexp" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <form name="education-form" id="education-form"method="post" action="my_profile/updateEducationForm">
          <input type="hidden" name="redu_id" id="redu_id" value="${id}">
          <div class="form-group row">
            <div class="col-lg-4">
              <label for="">Trường / khóa học<span>*</span></label>
            </div>
            <div class="col-lg-8">
              <div class="input-group">
                <input type="text" name="redu_name" id="redu_name" value="${redu_name}" maxlength="200">
              </div>
              <div class="form-error"><span class="err_redu_name" style="display:block"></span></div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-4">
              <label for="">Bằng cấp<span>*</span></label>
            </div>
            <div class="col-lg-8">
              <div class="select-group">
                <select name="redu_degree" id="redu_degree">
                <option value="">Chọn</option>
         ${data_degree.map(item=>` <option ${+degree_id==item.id ? "selected" :""} value="${item.id}">${item.degree_name}</option>`).join("")}    
                </select>
              </div>
              <div class="form-error"><span class="err_redu_degree" style="display:block"></span></div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-4">
              <label for="">Tốt nghiệp</label>
            </div>
            <div class="col-lg-8">
              <div class="select-graduating">
                <div class="select-group">
                  <select name="redu_month" id="redu_month">
                    <option value="">Tháng</option>
         ${arrMonths.map(item=>`<option ${+start_date==item ? "selected" :""}  value="${item}">${item}</option>`).join("")}      
                  </select>
                </div>
                <div class="select-group">
                  <select name="redu_year" id="redu_year">
                    <option value="">Năm</option>
                    ${arrYears.map(item=>`<option  ${+end_date==item ? "selected" :""}  value="${item}">${item}</option>`).join("")}                 
                  </select>
                </div>
              </div>
              <div class="form-error"><span class="err_redu_month" style="display:block"></span></div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-4">
              <label for="">Mô tả chi tiết</label>
            </div>
            <div class="col-lg-8">
              <div class="textarea-group">
                <textarea name="redu_desc" id="redu_desc" placeholder="Vui lòng nhập tối đa không quá 4.000 ký tự" maxlength="40000">${detail_desc}</textarea>
              </div>
              <div class="form-error"><span class="err_redu_desc" style="display:block"></span></div>
            </div>
          </div>
          <div class="form-group form-button">
            <div class="button-save button-center">
              <button class="btn-gradient" type="submmit" >Lưu Lại</button>
            </div>
          </div>
        </form>
          
          </div>
       </div>
    </div>
  </div>`;

  }






function start(){
 handleFormEducation()
}
start()