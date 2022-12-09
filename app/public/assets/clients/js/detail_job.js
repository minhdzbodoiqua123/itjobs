const btnApplyClick=document.querySelectorAll(".btnApplyClick");
const report_job=document.querySelector('.report-job');
report_job.addEventListener('click', function (){
  
})
const WEB_ROOT="http://localhost//itjobs";
btnApplyClick.forEach(item => {
    item.addEventListener("click",function() {
        const id=this.getAttribute("data-id")
        window.location.href=`${WEB_ROOT}/jobseekers/jobs/apply/${id}`;

    })
})

const $ = document.querySelector.bind(document);
const addressCompany=$(".addressCompany");

const query = window.location.href;


async function displayInfoUser() {
    const param=query.split("/")
    const id=  param[param.length-1]

    const {provinces} = await getData('http://localhost//itjobs/Alljob/address_company/'+id);
 
    if (provinces) {
      const dataProvinces = await getData(`https://provinces.open-api.vn/api/p/${provinces}`);
        
      const { name: nameProvinces } = dataProvinces;

    
      addressCompany.textContent = nameProvinces
        

    } 
  }
  displayInfoUser()