// flatpickr('#JOB_LASTDATE', { dateFormat: 'd/m/Y', maxDate: '31.12.2017', allowInput: true });

const select_location=document.querySelector('.select_location');
const districts=document.querySelector("select[name='districts']");

async function getDistrict(code,data_load) {
    let api = ``;

    if(Object.keys(data_load).length > 0) {
        const {provinces}=data_load
         api += `https://provinces.open-api.vn/api/p/${provinces}?depth=2`;
    }
    else{
        api+=`https://provinces.open-api.vn/api/p/${code}?depth=2`;
    }
  const data = await getData(api);

  return data.districts;
}

function displayDistrict(data,data_old={}) {
  let htmls = `<option value="" selected style="display:none;">Chọn </option>`;
  data.forEach((item) => {
    htmls += `<option ${data_old?.provinces==item.code?'selected':''} value="${item.code}">${item.name}</option>`;
  });
  districts.innerHTML = htmls;
}

select_location.addEventListener('change', async function () {
  const code = this.value;
  displayDistrict(await getDistrict(code,{}));
});

async function getData(url) {
    return (await axios.get(url)).data;
  }
  

async function displayProvinces(data){
    const {provinces,districts,address}=data
  const dataPronvinces = await getData("https://provinces.open-api.vn/api/p");
  let htmls=`<option value="">Chọn</option>`;
 dataPronvinces.forEach(function(item){  
      htmls+=`<option ${+provinces==item.code? 'selected':''} value="${item.code}">${item.name}</option>`;
  });


  select_location.innerHTML = htmls;
}

function loadExperience(){
  
    const JOB_ISEXPERIENCE=document.querySelector('#JOB_ISEXPERIENCE');
    if(+JOB_ISEXPERIENCE.value==2){
        const JOB_EXPERIENCE=document.querySelector('#JOB_EXPERIENCE');
        JOB_EXPERIENCE.setAttribute("style","display:block")
      }
    JOB_ISEXPERIENCE.addEventListener('change',(e)=>{
        const value=e.target.value
     
        if(+value==2){
            const JOB_EXPERIENCE=document.querySelector('#JOB_EXPERIENCE');
            JOB_EXPERIENCE.setAttribute("style","display:block")
          }
          else{
            JOB_EXPERIENCE.setAttribute("style","display:none")
          }
    })

}

async function loadAddressJob(){
    const queryString = window.location.href;
    const param=queryString.split("/")
    const job_id=  param[param.length-1];
    const formData=new FormData();
    formData.append("job_id",job_id)
    const work_location=document.querySelector('.work_location');
    const data_address=await axios.post("http://localhost//itjobs/employer/hrcentral/Posting/addressjob",formData)
    .then(async (result) => {
        work_location.value=result.data.address
    displayProvinces(result.data)
  displayDistrict(await getDistrict(result.provinces,result.data),result.data);
        
    }).catch((err) => {
        console.log(err);
    });
    

}

function start() {
    loadAddressJob()
    loadExperience()
}

start();

window.onload = function () {

  var form = document.getElementById("frmEditJob");

  // create the pristine instance
  var pristine = new Pristine(form);

  form.addEventListener('submit', function (e) {
     e.preventDefault();
     
     // check if the form is valid
     var valid = pristine.validate(); // returns true or false
      if(valid){
        e.target.submit();
      }
  });
};