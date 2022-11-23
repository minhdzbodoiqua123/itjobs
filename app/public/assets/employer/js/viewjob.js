const $ = document.querySelector.bind(document);

async function getContactInfo(){
    const apiInfoUser=`${baseURL}/employer/hrcentral/viewjob/contact_info`;
    const data=await getData(apiInfoUser);
    return data;
  }
  

async function getData(url) {
    return (await axios.get(url)).data;
}

async function displayContactInfo(data){
    let company_name=$(".company_name")
    let contact_name=$(".contact_name")
    let contact_email=$(".contact_email")
    let address=$(".address")
   
    const dataProvinces = await getData(`https://provinces.open-api.vn/api/p/${data.provinces}`);
    const dataDistricts = await getData(`https://provinces.open-api.vn/api/d/${data.districts}`);
    const { name: nameProvinces } = dataProvinces;
    const { name: nameDistricts } = dataDistricts;
    
    company_name.textContent=`Công ty:${data.company_name} `;
    contact_name.textContent=`Người liên hệ:${data.contact_name}`;
    contact_email.textContent=`Email:${data.email}`;
    address.textContent=`Địa chỉ liên hệ:${data.address},${nameDistricts},${nameProvinces}`
   

 


}

async function start() {
displayContactInfo(await getContactInfo());    
}

start();