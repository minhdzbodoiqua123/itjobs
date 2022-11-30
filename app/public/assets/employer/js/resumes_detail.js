const $ = document.querySelector.bind(document);
const query = window.location.href;

async function displayInfoUser() {
    const param=query.split("/")
    const user_id=  param[param.length-2]
    const resume_id=  param[param.length-1]


    const {provinces,districts,address} = await getData('http://localhost//itjobs/jobseekers/my_profile/addressUserById/'+user_id);
    const data = await getData('http://localhost//itjobs/jobseekers/my_profile/addressWish/'+resume_id);
    const addressUser = $('.address');
    const provincesUser=$(".provinces");
    const districtsUser=$(".districts");
    const addressWish=$(".addressWish")
    if (provinces && districts) {
      const dataProvinces = await getData(`https://provinces.open-api.vn/api/p/${provinces}`);
      const dataDistricts = await getData(`https://provinces.open-api.vn/api/d/${districts}`);
      const provincesWish = await getData(`https://provinces.open-api.vn/api/p/${data.provinces}`);
      const districtsWish= await getData(`https://provinces.open-api.vn/api/d/${data.districts}`);
      const { name: nameProvinces } = dataProvinces;
      const { name: nameDistricts } = dataDistricts;

      addressUser.textContent = `${address},${nameDistricts},${nameProvinces}`;
      provincesUser.textContent = nameProvinces
      districtsUser.textContent = nameDistricts
      addressWish.textContent = `${districtsWish.name},${provincesWish.name}`;
  

    } 
  }
  displayInfoUser()