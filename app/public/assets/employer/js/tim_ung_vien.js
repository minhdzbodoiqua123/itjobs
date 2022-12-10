async function getData(url) {
    return (await axios.get(url)).data;
 }
async function renderDataResume(data_provinces,data)
{
    // for (let i = 0; i < data.length; i++) {
    // var result = doSearch(data_provinces,data[i].provinces);
    // }
   const result=document.querySelectorAll('.location');
   const arr=[]
   result.forEach(element => {
      const pronvinces_id=element.getAttribute('data-provinces')
      data.forEach((item) => {
         if(+pronvinces_id==+item.provinces){
            data_provinces.map(provinces=>{
               if(+provinces.code==+item.provinces){
                  element.innerHTML=provinces.name; 
               }
            })
         }
      
      })
         
     })
       
    


  
  
//    const value=[...new Set(arr)];

//    result.forEach((element,index) => {
//       const value_id=element.getAttribute("data-provinces")
//       if(+value_id==+value[index]){
//          const test=""
//          data_provinces.forEach(provinces=>{
//             if(+provinces.code==value_id){
//          element.innerHTML=provinces.name;
              
//             }
         
//         })
//       }
      

// });
   


}

async function callApiDataResume(){
   const data=await getData("http://localhost//itjobs/employer/tim_ung_vien/data_resume");
   const apiProvinces = 'https://provinces.open-api.vn/api/p';
   const data_provinces = await getData(apiProvinces);
   renderDataResume(data_provinces,data)
   // checkEmptyData(data)

}





async function handleSearchResume(){
   const form = document.getElementById('frm_search');
   const keyword=document.querySelector("input[name='keyword']");
   const urgentjob=document.querySelector("select[name='urgentjob']");
   const apiProvinces = 'https://provinces.open-api.vn/api/p';
   const data_provinces = await getData(apiProvinces);
   

   form.addEventListener('submit', async (e) => {
   //    e.preventDefault()
   //    const formData = new FormData(form);
   //    const list_industries = formData.getAll('list_industries');
   //    const list_location = formData.getAll('list_location');
   //    const bodyFormData = new FormData();
   //    list_industries.forEach((item) => {
   //       bodyFormData.append('list_industries[]', item);
   //   });
   //   list_location.forEach((item) => {
   //    bodyFormData.append('list_location[]', item);
   // });
   // bodyFormData.append('keyword', `${keyword.value}`);
   // bodyFormData.append('urgentjob', `${urgentjob.value}`);


   //        const postData=await axios.post("http://localhost//itjobs/employer/tim_ung_vien/handleSearch",bodyFormData)
   //        .then((result) => {
   //          renderDataResume(data_provinces,result.data)
   //          checkEmptyData(result.data)
   //        })

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
// function checkEmptyData(data){
//    const result=document.querySelector('.box-resume-search-search-result');

//    const htmls = `<div class="search-result-top">
//    <div class="top">
//       <p class="success">
//                               <strong> Không tìm thấy hồ sơ phù hợp với tiêu chí của quý khách.</strong> 
// <br>
// <br>Gợi ý:
// <br>. Vui lòng kiểm tra lại từ khóa đã nhập hoặc thử tìm với từ khóa khác.
// <br>. Thử tìm với các tiêu chí khác như ngành, nơi làm việc, kinh nghiệm,…
//                         </p>
//                                              <a href="javascript:void(0);" class="created-alerts">Tạo thông báo email với tiêu chí tìm kiếm này</a>
//                                     </div>
//                <div class="bottom">
//                         <div class="keyword" autocomplete="off">
//             <p>
//                <strong>Từ khóa: </strong>
//                <span>minh dep trai</span>
//             </p>
//          </div>        
//    </div>
// </div>`;

// if (data.length === 0) {
//    result.innerHTML = htmls;
// }
// }
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