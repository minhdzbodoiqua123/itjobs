

const $=document.querySelector.bind(document)
const $$=document.querySelectorAll.bind(document)

const salary_from=document.getElementById("salary_from")

const salary_to=document.getElementById("salary_to")

const addressUser=$(".addressUser")
const provincesUser=$(".provincesUser")
const districtsUser=$('.districtsUser')
const btn_infoUser=$(".btn-infoUser")

const select_provinces=$("select[name='slcity']")


const select_district=$("select[name='sldistrict']")
const input_lastname=$("input[name='lastname']")
const input_firstname=$("input[name='firstname']")
const location_id=$("select[name='location_id']")
const apiInfoUser="http://localhost//itjobs/jobseekers/my_profile/infoUser";
// select_provinces.addEventListener("change", function(e){
//   const id=this.value;
//   const formData=new FormData();
//   formData.append("id",id);
//   axios.post("checkouts/dataDistricts",formData)

//       displayDistrict(result.data)  
  
  
// })

async function loadInfoUser(){
  const data=await getData(apiInfoUser);
  return data;
}


async function displayInfoUser(data){
  console.log(data);
    const {provinces,districts,address,firstname,lastname}=data

    const nameUser=$(".nameUser")
    if(provinces && districts){
      const dataProvinces=await getData(`https://provinces.open-api.vn/api/p/${provinces}`);
      const dataDistricts=await getData(`https://provinces.open-api.vn/api/d/${districts}`);
    
      const {name:nameProvinces}=dataProvinces
      const {name:nameDistricts}=dataDistricts
    
      provincesUser.textContent=nameProvinces;
      districtsUser.textContent=nameDistricts;
      addressUser.textContent=`${address},${nameDistricts},${nameProvinces}`;
      nameUser.textContent=firstname;

      console.log(firstname);
      input_lastname.value=lastname
      input_firstname.value=firstname

    }
}

async function getData(url) {
  return (await axios.get(url)).data;
}


function addCommas(str){
  return str.replace(/^0+/, '').replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
salary_from.addEventListener("keyup",function (event){
     
  const value=this.value;
  this.value=addCommas(value)
  this.setAttribute('value', this.value);
  })
  salary_to.addEventListener("keyup",function (event){
    const value=this.value;
    this.value=addCommas(value)
    this.setAttribute('value', this.value);
    })

async function getProvinces() {
  const api="https://provinces.open-api.vn/api/";
  const data=await getData(api)

  return data;
  
}



 async function displayProvinces(data){
 
    const apiInfoUser="http://localhost//itjobs/jobseekers/my_profile/infoUser";
  const dataInfoUser=await getData(apiInfoUser);

    const {provinces} =dataInfoUser
   
    let htmls=``;
    if(provinces){
      htmls+=`<option value="" >Chọn </option>`
    }
    else{
       htmls=`<option value="" selected>Chọn </option>`;
    }
    data.forEach(item=>{
      htmls+=`<option ${+provinces==item.code?'selected' : ''} 
       value="${item.code}">${item.name}</option>`;
  })

select_provinces.innerHTML = htmls; 

if(provinces){
  
  displayDistrictsForUser(await getDistrict(provinces))
}
}

async function displayDistrictsForUser(data){
  
  const dataInfoUser=await getData(apiInfoUser);
  const {districts} =dataInfoUser
  let htmls=``;
  if(districts){
    htmls+=`<option value="" >Chọn </option>`
  }
  else{
     htmls=`<option value="" selected>Chọn </option>`;
  }
  data.forEach(item=>{
    htmls+=`<option ${+districts==item.code?'selected' : ''} 
     value="${item.code}">${item.name}</option>`;
})
select_district.innerHTML = htmls; 

}



function displayDistrict(data){

  let htmls=`<option value="" selected style="display:none;">Chọn </option>`;
  data.forEach(item=>{
    htmls+=`<option value="${item.code}">${item.name}</option>`;
})
select_district.innerHTML = htmls; 
}
     
async function displayJobInfo(){
  const api=`http://localhost//itjobs/jobseekers/my_profile/seeker_job_information`;
  const seeker_job_information=await getData(api)
  const workplace=$(".workplace")
  const {provinces} =seeker_job_information
  const dataProvinces=await getData(`https://provinces.open-api.vn/api/p/${provinces}`);
  const {name}=dataProvinces
  workplace.textContent=name
}

async function start() {
  displayProvinces(await getProvinces())
  displayInfoUser(await loadInfoUser()) 
  displayJobInfo()
  desiredForm(await getProvinces());
}


start();

async function getDistrict(code) {
  const api=`https://provinces.open-api.vn/api/p/${code}?depth=2`;
  const data=await getData(api)

  return data.districts;
  
}
async function desiredForm(data){
  const api=`http://localhost//itjobs/jobseekers/my_profile/seeker_job_information`;
  const seeker_job_information=await getData(api)
 const {provinces} =seeker_job_information
  let htmls=`<option value="" selected style="display:none;">Chọn </option>`;
  data.forEach(item=>{
    htmls+=`<option ${+provinces==item.code?'selected' : ''}  value="${item.code}">${item.name}</option>`;
})  
  location_id.innerHTML=htmls
} 

select_provinces.addEventListener('change',async function() { 
  const code=this.value;  
  
  displayDistrict(await getDistrict(code))

})



    btn_infoUser.onclick=async () => {
   
      displayInfoUser(await loadInfoUser())
   
    }
    window.onload = function () {
      //personalInfoForm
      var personalInfoForm = document.getElementById("personalInfoForm");
    
      var pristine = new Pristine(personalInfoForm);
      
      var mobile = document.getElementById("mobile");
      var slcity = document.getElementById("slcity");
      

      pristine.addValidator(mobile, function(value) {
      
          const  regex=/(84|0[3|5|7|8|9])+([0-9]{8})\b/;
          if (regex.test(value)){
              return true;
          }
          return false;
      }, "Vui lòng nhập đúng định dạng số điện thoại", 5, false);

      pristine.addValidator(slcity, function(value) {
       
  
        if (value.length > 0) {
            return true;
        }
        return false;
    }, "Không được để trống", 5, false);



     personalInfoForm.addEventListener('submit', function (e) {
         e.preventDefault();
         var valid = pristine.validate();
         if (valid) {
          e.target.submit();
        } else {
          // alert("Form is invalid");
        }
   
      });
    
      let desiredForm=document.getElementById("desired-form");
      let pristine2 = new Pristine(desiredForm);

    


      let select_level_id=document.getElementById("level_id");
      let select_location_id_3=document.getElementById("select_location_id_3");
  
    pristine2.addValidator(select_level_id, function(value) {
      if (value.length > 0) {
          return true;
      }
      return false;
  }, "Không được để trống", 5, false);

  
  pristine2.addValidator(select_location_id_3, function(value) {
      
    if (value.length > 0) {
        return true;
    }
    return false;

}, "Không được để trống", 2, false);


  desiredForm.addEventListener('submit', function (e) {
    e.preventDefault();
    var valid = pristine2.validate();
    if (valid) {
     e.target.submit(); 
   } else {
     // alert("Form is invalid");
   }

 });


    };



flatpickr(".date_month",  { dateFormat: 'd/m/Y',maxDate:"31.12.2017",allowInput:true});