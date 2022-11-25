
const baseURL="http://localhost//itjobs";
async function getData(url) {
    return (await axios.get(url)).data;
  }
  async function loadInfoUser(){
    const apiInfoUser=`${baseURL}/employer/hrcentral/accounts/edit_employer/`;
    const data=await getData(apiInfoUser);
    return data;
  }
  
  async function displayInfo(data){
    const {contact_name}=data
    const nameUser=document.querySelector(".employer_name")
     if(nameUser){
      nameUser.textContent=contact_name
     }
}
 async  function start(){
    displayInfo(await loadInfoUser())
  }
 
  start();