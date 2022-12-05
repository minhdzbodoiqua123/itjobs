

async function getData(url) {
    return (await axios.get(url)).data;
  }
  async function loadInfoUser(){
    const apiInfoUser="http://localhost//itjobs/jobseekers/my_profile/infoUser";
    const data=await getData(apiInfoUser);
    return data;
  }
  
  async function displayInfo(data){
    const nameUser=document.querySelector(".nameUser")
    nameUser.textContent=data.firstname
}
 async  function start(){
    displayInfo(await loadInfoUser())
  }
 
  start();
  
