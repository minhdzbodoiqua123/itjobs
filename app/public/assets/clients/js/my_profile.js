

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

      input_lastname.value=lastname
      input_lastname.value=firstname

    }
}

async function getData(url) {
  return (await axios.get(url)).data;
}


function addCommas(str){
  return str.replace(/^0+/, '').replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}


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
     

async function start() {
  displayProvinces(await getProvinces())
  displayInfoUser(await loadInfoUser()) 
}


start();

async function getDistrict(code) {
  const api=`https://provinces.open-api.vn/api/p/${code}?depth=2`;
  const data=await getData(api)

  return data.districts;
  
}


select_provinces.addEventListener('change',async function() { 
  const code=this.value;  
  
  displayDistrict(await getDistrict(code))

})

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

    btn_infoUser.onclick=async () => {
   
      displayInfoUser(await loadInfoUser())
    }
    window.onload = function () {

      var form = document.getElementById("personalInfoForm");
    
      var pristine = new Pristine(form);
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

      form.addEventListener('submit', function (e) {
         e.preventDefault();
         var valid = pristine.validate();
         if (valid) {
          e.target.submit();
        } else {
          // alert("Form is invalid");
        }
   
      });
    
    
    };



flatpickr(".date_month",  { dateFormat: 'd/m/Y',maxDate:"31.12.2017",allowInput:true});