async function getData(url) {
    return (await axios.get(url)).data;
 }
async function renderDataResume(data_provinces,data)
{
    console.log(data);
    // for (let i = 0; i < data.length; i++) {
    // var result = doSearch(data_provinces,data[i].provinces);
    // }
   
    const data_resume=document.querySelector('.data_resume');
  
    
   console.log(data.length);
    const htmls=data.map((item) => {
        return `<tr>
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
              <li>
                 <a class="btn-add-tag" href="javascript:void(0);" onclick="return addResumeTag(7933581)" title="Thêm tag">
                 <em class="material-icons">local_offer</em>
                 </a>
              </li>
              <li><a class="btn-popup-flipview" title="Xem hồ sơ dạng Flipview" href="javascript:void(0)" onclick="windowFlipView('dHUta2hvYS9OaCVDMyVBMm4rdmklQzMlQUFuK2IlQzMlQTFuK2glQzMlQTBuZyt0aHUrbmclQzMlQTJuL3NvcnQvZGF0ZV9kZXNj',0, 3);"><em class="material-icons">import_contacts </em></a></li>
              <li><a href="javascript:void(0)" onclick="showFoldersSelected('361DF78D');" class="btn-save-folder" href="javascript:void(0)" title="Lưu vào thư mục"><em class="material-icons">folder_shared </em></a></li>
              <li><a href="https://careerbuilder.vn/vi/tim-ung-vien/tu-khoa/nhan vien tham dinh/noi-lam-viec/da-nang" title="Xem hồ sơ tương tự"> <em class="material-icons">account_box </em></a></li>
              <li><a class="btn-delete" href="javascript:void(0)" onclick="return addResumeHidden(1, 7933581);" title="Ẩn hồ sơ"> <em class="material-icons">cancel </em></a></li>
           </ul>
        </td>
     </tr>`
        
    })

    data_resume.innerHTML=htmls.join("")
}

async function callApiDataResume(){
   const data=await getData("http://localhost//itjobs/employer/tim_ung_vien/data_resume");
   const apiProvinces = 'https://provinces.open-api.vn/api/p';
   const data_provinces = await getData(apiProvinces);
   renderDataResume(data_provinces,data)
}


function getAllUrlParams(url) {

   // get query string from url (optional) or window
   var queryString = url ? url.split('?')[1] : window.location.search.slice(1);
 
   // we'll store the parameters here
   var obj = {};
 
   // if query string exists
   if (queryString) {
 
     // stuff after # is not part of query string, so get rid of it
     queryString = queryString.split('#')[0];
 
     // split our query string into its component parts
     var arr = queryString.split('&');
 
     for (var i = 0; i < arr.length; i++) {
       // separate the keys and the values
       var a = arr[i].split('=');
 
       // set parameter name and value (use 'true' if empty)
       var paramName = a[0];
       var paramValue = typeof (a[1]) === 'undefined' ? true : a[1];
 
       // (optional) keep case consistent
       paramName = paramName.toLowerCase();
       if (typeof paramValue === 'string') paramValue = paramValue.toLowerCase();
 
       // if the paramName ends with square brackets, e.g. colors[] or colors[2]
       if (paramName.match(/\[(\d+)?\]$/)) {
 
         // create key if it doesn't exist
         var key = paramName.replace(/\[(\d+)?\]/, '');
         if (!obj[key]) obj[key] = [];
 
         // if it's an indexed array e.g. colors[2]
         if (paramName.match(/\[\d+\]$/)) {
           // get the index value and add the entry at the appropriate position
           var index = /\[(\d+)\]/.exec(paramName)[1];
           obj[key][index] = paramValue;
         } else {
           // otherwise add the value to the end of the array
           obj[key].push(paramValue);
         }
       } else {
         // we're dealing with a string
         if (!obj[paramName]) {
           // if it doesn't exist, create property
           obj[paramName] = paramValue;
         } else if (obj[paramName] && typeof obj[paramName] === 'string'){
           // if property does exist and it's a string, convert it to an array
           obj[paramName] = [obj[paramName]];
           obj[paramName].push(paramValue);
         } else {
           // otherwise add the property
           obj[paramName].push(paramValue);
         }
       }
     }
   }
 
   return obj;
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
            console.log(result.data);
            renderDataResume(data_provinces,result.data)
          })

  })
   
 




   // if(window.location.search){
  
   //    .then((result) => {
   //      console.log(result);
   //    })
      
   // }
  

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