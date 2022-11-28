const $ = document.querySelector.bind(document);
const query = window.location.href;

async function displayInfoUser() {
    const param=query.split("/")
    const id=  param[param.length-1]


    const {provinces,districts,address} = await getData('http://localhost//itjobs/jobseekers/my_profile/addressUserById/'+id);
    const addressUser = $('.address');
    const provincesUser=$(".provinces");
    const districtsUser=$(".districts");
    if (provinces && districts) {
      const dataProvinces = await getData(`https://provinces.open-api.vn/api/p/${provinces}`);
      const dataDistricts = await getData(`https://provinces.open-api.vn/api/d/${districts}`);
  
      const { name: nameProvinces } = dataProvinces;
      const { name: nameDistricts } = dataDistricts;

      addressUser.textContent = `${address},${nameDistricts},${nameProvinces}`;
      provincesUser.textContent = nameProvinces
      districtsUser.textContent = nameDistricts
  

    } 
  }
  displayInfoUser()