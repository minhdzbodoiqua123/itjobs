flatpickr(".date_month",  { dateFormat: 'd/m/Y',maxDate:"31.12.2017"});
const apiInfoUser = 'http://localhost//itjobs/jobseekers/my_profile/infoUser';

const select_provinces = document.querySelector("select[name='slcity']");
const select_district = document.querySelector("select[name='sldistrict']");
const select_location_id_1 =document.querySelector("#select_location_id_1");
const select_district_id_1 =document.querySelector("#select_district_id_1");
const not_experience=document.querySelector("input[name='cboExper']")
const yearOfExperience=document.querySelector("input[name='yearOfExperience']")


not_experience.addEventListener("change", function (e){
  

  if(e.target.checked){
    
  
    yearOfExperience.setAttribute('disabled','')

    yearOfExperience.value=""
   
    
  }
  else{
    yearOfExperience.removeAttribute('disabled')
    yearOfExperience.value=1


  }
})


select_location_id_1.addEventListener('change', async function () {
  const code = this.value;
  displayDistrict2(await getDistrict(code));

});

async function displayProvinces2(data) {
  try {

                
    let htmls = `<option value="">Chọn</option>`;
   
    data.forEach((item) => {
      htmls += `<option 
         value="${item.code}">${item.name}</option>`;
    });
    console.log(select_location_id_1);
    select_location_id_1.innerHTML = htmls;
    
  } catch (error) {
    
  }

 
}
function displayDistrict2(data) {
  let htmls = `<option value=""selected style="display:none;">Chọn </option>`;
  data.forEach((item) => {
    htmls += `<option value="${item.code}">${item.name}</option>`;
  });
  select_district_id_1.innerHTML = htmls;
}







select_provinces.addEventListener('change', async function () {
    const code = this.value;
  
    displayDistrict(await getDistrict(code));
  });

  function displayDistrict(data) {
    let htmls = `<option value="" selected style="display:none;">Chọn </option>`;
    data.forEach((item) => {
      htmls += `<option value="${item.code}">${item.name}</option>`;
    });
    select_district.innerHTML = htmls;
  }
  
async function loadInfoUser() {
    const data = await getData(apiInfoUser);
    // displayInfoUser(data);
    
  }
//   async function displayInfoUser(data) {
//     const {  firstname, lastname } = data;
//     const {provinces,districts,address} = await getData('http://localhost//itjobs/jobseekers/my_profile/addressUser');
  
//     const nameUser = $('.nameUser');
//     const address2 = $('.address2 span');
  
//     if (provinces && districts) {
//       const dataProvinces = await getData(`https://provinces.open-api.vn/api/p/${provinces}`);
//       const dataDistricts = await getData(`https://provinces.open-api.vn/api/d/${districts}`);
  
//       const { name: nameProvinces } = dataProvinces;
//       const { name: nameDistricts } = dataDistricts;
  
//       provincesUser.textContent = nameProvinces;
//       districtsUser.textContent = nameDistricts;
//       addressUser.textContent = `${address},${nameDistricts},${nameProvinces}`;
  
//       address2.textContent = `${address},${nameDistricts},${nameProvinces}`;
  
//       nameUser.textContent = firstname;
  
//       input_lastname.value = lastname;
//       input_firstname.value = firstname;
//     } else {
//       address2.textContent = '';
//     }
//   }

  async function getProvinces() {
    const api = 'https://provinces.open-api.vn/api/';
    const data = await getData(api);
    
    displayProvinces(data);
    displayProvinces2(data);

  }
  async function getDistrict(code) {
    const api = `https://provinces.open-api.vn/api/p/${code}?depth=2`;
    const data = await getData(api);
  
    return data.districts;
  }
  
  async function displayProvinces(data) {
    const apiAddressUser = 'http://localhost//itjobs/jobseekers/my_profile/addressUser';
    try {
      const dataInfoUser = await getData(apiAddressUser);
      const { provinces,address } = dataInfoUser;
        console.log(address);
      let htmls = ``;
      if (provinces) {
        htmls += `<option value="" >Chọn </option>`;
      } else {
        htmls = `<option value="" selected>Chọn </option>`;
      }
      data.forEach((item) => {
        htmls += `<option ${+provinces == item.code ? 'selected' : ''} 
           value="${item.code}">${item.name}</option>`;
      });
    
      select_provinces.innerHTML = htmls;
      document.querySelector("input[name='address']").value=address
      if (provinces) {
        displayDistrictsForUser(await getDistrict(provinces));
      }
    } catch (error) {
      
    }
  
   
  }
  
  async function displayDistrictsForUser(data) {
    const dataInfoUser = await getData("http://localhost//itjobs/jobseekers/my_profile/addressUser");
    const { districts } = dataInfoUser;
   
    let htmls = ``;
    if (districts) {
      htmls += `<option value="" >Chọn </option>`;
    } else {
      htmls = `<option value="" selected>Chọn </option>`;
    }
    data.forEach((item) => {
      htmls += `<option ${+districts == item.code ? 'selected' : ''} 
       value="${item.code}">${item.name}</option>`;
    });
    select_district.innerHTML = htmls;
  }
  
async function start() {
    getProvinces()
    loadInfoUser()
    
    
  }
start();