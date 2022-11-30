// async function loadInfoUser() {
//     const apiInfoUser="http://localhost//itjobs/jobseekers/my_profile/infoUser";
//     const data = await getData(apiInfoUser);
//     displayInfoUser(data);
    
// }
async function displayWorkplace(){
    const url=window.location.href;
    const resume_id=url.split("/")[9];
    const params = new URLSearchParams();

    params.append('resume_id',resume_id);
 const data=await axios.post('http://localhost//itjobs/jobseekers/myattach/data_resume',params)
 .then(async (result) => {
     const workplace=document.querySelector(".workplace");
    const {provinces,districts,address} =result.data;
    const dataProvinces = await getData(`https://provinces.open-api.vn/api/p/${provinces}`);
    const dataDistricts = await getData(`https://provinces.open-api.vn/api/d/${districts}`);
    const { name: nameProvinces } = dataProvinces;
    const { name: nameDistricts } = dataDistricts;
  
    workplace.textContent = `${nameDistricts}/${nameProvinces}`;

 })
}
async function displayInfoUser() {
    // const {firstname, lastname } = data;
    const {provinces,districts,address} = await getData('http://localhost//itjobs/jobseekers/my_profile/addressUser');
    const provincesUser = document.querySelector('.provinces');
    const districtsUser = document.querySelector('.districts');

    const address2 =  document.querySelector('.address2');
    
    if (provinces && districts) {
      const dataProvinces = await getData(`https://provinces.open-api.vn/api/p/${provinces}`);
      const dataDistricts = await getData(`https://provinces.open-api.vn/api/d/${districts}`);
  
      const { name: nameProvinces } = dataProvinces;
      const { name: nameDistricts } = dataDistricts;
        
      provincesUser.textContent = nameProvinces;
      districtsUser.textContent = nameDistricts;
    //   addressUser.textContent = `${address},${nameDistricts},${nameProvinces}`;
  
      address2.textContent = `${address},${nameDistricts},${nameProvinces}`;
  
      // nameUser.textContent = firstname;
  
      // input_lastname.value = lastname;
      // input_firstname.value = firstname;
    } else {
      address2.textContent = '';
    }
  }
  
  function start(){
//   loadInfoUser()
  displayInfoUser();
  displayWorkplace()
  }
  start()