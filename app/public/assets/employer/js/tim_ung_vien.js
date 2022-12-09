async function getData(url) {
    return (await axios.get(url)).data;
 }
async function renderDataResume(data_provinces,data)
{
  
    // for (let i = 0; i < data.length; i++) {
    // var result = doSearch(data_provinces,data[i].provinces);
    // }
   const result=document.querySelector('.box-resume-search-search-result');

  
    const htmls=data.map((item) => {
        return `
        <div class="main-jobs-posting">
        <div class="heading-jobs-posting">
           <div class="left-heading">
              <p class="name">Xem:</p>
              <ul class="list-check">
                 <li class="view-posting-detail"><a href="javascript:;">Chi tiết</a></li>
                 <li class="view-posting-summary active"><a href="javascript:void(0)">Tóm tắt</a></li>
              </ul>
           </div>
           <div class="right-heading">
              <div class="to-display">
                 <p class="name">Sắp xếp</p>
                 <div class="form-sort">
                    <select id="box_sort_change" onchange="changesort('https://careerbuilder.vn/vi/tim-ung-vien/tu-khoa/Nh%C3%A2n+vi%C3%AAn+b%C3%A1n+h%C3%A0ng+thu+ng%C3%A2n');">
                       <option value="phh">Phù hợp</option>
                       <option value="kng" >Kinh nghiệm</option>
                       <option value="lng" >Mức lương</option>
                       <option value="date"  selected="selected">Ngày truy cập</option>
                    </select>
                 </div>
                 <p class="name-display">
                    Hiển thị <strong>1 - 20 </strong> trong <strong>104,874</strong> hồ sơ
                 </p>
              </div>
           </div>
        </div>
        <div class="boding-jobs-posting">
           <div class="table table-jobs-posting">
              <table>
                 <thead>
                    <tr>
                       <th width="38%">Ứng Viên</th>
                       <th width="10%">
                          <a href="https://careerbuilder.vn/vi/tim-ung-vien/tu-khoa/Nh%C3%A2n+vi%C3%AAn+b%C3%A1n+h%C3%A0ng+thu+ng%C3%A2n/sort/kng_desc">
                          Kinh nghiệm
                          </a>
                       </th>
                       <th width="20%">
                          <a href="https://careerbuilder.vn/vi/tim-ung-vien/tu-khoa/Nh%C3%A2n+vi%C3%AAn+b%C3%A1n+h%C3%A0ng+thu+ng%C3%A2n/sort/lng_desc">
                          Lương
                          </a>
                       </th>
                       <th width="10%">Nơi làm việc</th>
                    
                       <th width="32%">Thao tác</th>
                    </tr>
                 </thead>
                 <tbody class="data_resume">
                 <tr>
                 <td>
                    <div class="title">
                       <div class="job-name">
                          <a class="job-title" href="https://careerbuilder.vn/vi/employers/popup/resumeinfo/35A4E900/35A4E900/nhan-vien-tham-dinh/361DF78D.html?&highlight=Nh%C3%A2n+vi%C3%AAn+b%C3%A1n+h%C3%A0ng+thu+ng%C3%A2n" target="_blank" title="Nhân viên Thẩm định">
                          <b>${item.resume_title}</b>
                          </a>
                          <p class="status viewed chkBuy" data-idcheck="361DF78D">
                             <em class="material-icons">visibility </em> Đã xem&nbsp;
                          </p>
                         
                       </div>
                       <div class="status">
                       </div>
                       <a class="name" href="https://careerbuilder.vn/vi/employers/popup/resumeinfo/35A4E900/35A4E900/nhan-vien-tham-dinh/361DF78D.html?&highlight=Nh%C3%A2n+vi%C3%AAn+b%C3%A1n+h%C3%A0ng+thu+ng%C3%A2n">
                     ${item.lastname} ${item.firstname}
                       </a>
                       <a class="attach-button" href="javascript:;">
                       </a>
                       <ul class="info-list">
                          <li>
                             <p> <strong>Học vấn: </strong>${item.degree_name}</p>
                          </li>
                          <li>
                             <p> <strong>Cấp bậc: </strong>${item.position}</p>
                          </li>
                       </ul>
                    </div>
                  
                 </td>
                 <td>
                    <p>${item.year_of_experience} năm</p>
                 </td>
                 <td>
                    <p>
                    ${item.min_salary}-${item.max_salary} VND
         
                    </p>
                 </td>
                 <td class="location">
                 ${data_provinces.map(provinces=>{
                     if(provinces.code==item.provinces){
                         return provinces.name
         
                     }
                 }).join("")}
                 </td>
                
                 <td>
                    <ul class="list-manipulation">
                   
                       
                       <li><a href="javascript:void(0)" onclick="showFoldersSelected('361DF78D');" class="btn-save-folder" href="javascript:void(0)" title="Lưu vào thư mục"><em class="material-icons">folder_shared </em></a></li>
                       
                    </ul>
                 </td>
              </tr>
               
                 </tbody>
              </table>
           </div>
           <div class="main-pagination">
              <div class="main-pagination">
                 <ul class="pagination">
                    <li class="PagerOtherPageCells active"><a href="javascript:void(0);">1</a></li>
                    <li class="PagerOtherPageCells"><a href='https://careerbuilder.vn/vi/tim-ung-vien/tu-khoa/Nh%C3%A2n+vi%C3%AAn+b%C3%A1n+h%C3%A0ng+thu+ng%C3%A2n/sort/date_desc/page/2'>2</a></li>
                    <li class="PagerOtherPageCells"><a href='https://careerbuilder.vn/vi/tim-ung-vien/tu-khoa/Nh%C3%A2n+vi%C3%AAn+b%C3%A1n+h%C3%A0ng+thu+ng%C3%A2n/sort/date_desc/page/3'>3</a></li>
                    <li class="PagerOtherPageCells"><a href='https://careerbuilder.vn/vi/tim-ung-vien/tu-khoa/Nh%C3%A2n+vi%C3%AAn+b%C3%A1n+h%C3%A0ng+thu+ng%C3%A2n/sort/date_desc/page/4'>4</a></li>
                    <li class="PagerOtherPageCells"><a href='https://careerbuilder.vn/vi/tim-ung-vien/tu-khoa/Nh%C3%A2n+vi%C3%AAn+b%C3%A1n+h%C3%A0ng+thu+ng%C3%A2n/sort/date_desc/page/5'>5</a></li>
                    <li class="PagerOtherPageCells"><a class="LastPage" href='https://careerbuilder.vn/vi/tim-ung-vien/tu-khoa/Nh%C3%A2n+vi%C3%AAn+b%C3%A1n+h%C3%A0ng+thu+ng%C3%A2n/sort/date_desc/page/2'><em class="mdi mdi-chevron-right"></em></a></li>
                 </ul>
              </div>
           </div>
           <div class="main-button-sticky">
              <div class="button-prev disabled"><em class="mdi mdi-chevron-left"></em></div>
              <div class="button-next"><em class="mdi mdi-chevron-right"></em></div>
           </div>
        </div>
     </div>
        
        
        
        `
        
    })

    result.innerHTML=htmls.join("");

}

async function callApiDataResume(){
   const data=await getData("http://localhost//itjobs/employer/tim_ung_vien/data_resume");
   const apiProvinces = 'https://provinces.open-api.vn/api/p';
   const data_provinces = await getData(apiProvinces);
   renderDataResume(data_provinces,data)
   checkEmptyData(data)

}





async function handleSearchResume(){
   const form = document.getElementById('frm_search');
   const keyword=document.querySelector("input[name='keyword']");
   const urgentjob=document.querySelector("select[name='urgentjob']");
   const apiProvinces = 'https://provinces.open-api.vn/api/p';
   const data_provinces = await getData(apiProvinces);
   

   form.addEventListener('submit', async (e) => {
      e.preventDefault()
      const formData = new FormData(form);
      const list_industries = formData.getAll('list_industries');
      const list_location = formData.getAll('list_location');
      const bodyFormData = new FormData();
      list_industries.forEach((item) => {
         bodyFormData.append('list_industries[]', item);
     });
     list_location.forEach((item) => {
      bodyFormData.append('list_location[]', item);
   });
   bodyFormData.append('keyword', `${keyword.value}`);
   bodyFormData.append('urgentjob', `${urgentjob.value}`);


          const postData=await axios.post("http://localhost//itjobs/employer/tim_ung_vien/handleSearch",bodyFormData)
          .then((result) => {
            renderDataResume(data_provinces,result.data)
            checkEmptyData(result.data)
          })

  })
   


  

}



// var doSearch = function(array, targetValue) {

//     var min = 0;
//     var max = array.length - 1;
//     var guess;
//     while(min <= max) {
//         guess = Math.floor((max + min) / 2);
//         if (array[guess].code === +targetValue) {
//             return guess;
//         }
//         else if (array[guess].code < +targetValue) {
//             min = guess + 1;
//         }
//         else {
//             max = guess - 1;
//         }

//     }

//     return -1;
// };
function checkEmptyData(data){
   const result=document.querySelector('.box-resume-search-search-result');

   const htmls = `<div class="search-result-top">
   <div class="top">
      <p class="success">
                              <strong> Không tìm thấy hồ sơ phù hợp với tiêu chí của quý khách.</strong> 
<br>
<br>Gợi ý:
<br>. Vui lòng kiểm tra lại từ khóa đã nhập hoặc thử tìm với từ khóa khác.
<br>. Thử tìm với các tiêu chí khác như ngành, nơi làm việc, kinh nghiệm,…
                        </p>
                                             <a href="javascript:void(0);" class="created-alerts">Tạo thông báo email với tiêu chí tìm kiếm này</a>
                                    </div>
               <div class="bottom">
                        <div class="keyword" autocomplete="off">
            <p>
               <strong>Từ khóa: </strong>
               <span>minh dep trai</span>
            </p>
         </div>        
   </div>
</div>`;

if (data.length === 0) {
   result.innerHTML = htmls;
}
}
function getMultiSelectValues(selectId) {
   // get the options of select field which will be HTMLCollection
   // remember HtmlCollection and not an array. You can always enhance the code by
   // verifying if the provided select is valid or not
    var options = document.getElementById(selectId).options; 
      var values = [];
      
     // since options are HtmlCollection, we convert it into array to use map function on it
      Array.from(options).map(function(option) {
          option.selected ? values.push(option.value) : null
      })
  
      return values;
  }
 function start () {
    callApiDataResume()
    handleSearchResume()
 }
 start()