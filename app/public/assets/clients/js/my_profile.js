const input_text=document.querySelectorAll("input[type='text']")
const select_provinces=document.querySelector("select[name='slcity']")
const select_district=document.querySelector("select[name='sldistrict']")
// select_provinces.addEventListener("change", function(e){
//   const id=this.value;
//   const formData=new FormData();
//   formData.append("id",id);
//   axios.post("checkouts/dataDistricts",formData)

//       displayDistrict(result.data)  
  
  
// })



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



  function displayProvinces(data){
  let htmls=`<option value="#" selected style="display:none;">Chọn </option>`;
  data.forEach(item=>{
    htmls+=`<option value="${item.code}">${item.name}</option>`;
})
select_provinces.innerHTML = htmls; 

}
function displayDistrict(data){
  console.log(data);
  let htmls=`<option value="#" selected style="display:none;">Chọn </option>`;
  data.forEach(item=>{
    htmls+=`<option value="${item.code}">${item.name}</option>`;
})
select_district.innerHTML = htmls; 

}
     

async function start() {
  displayProvinces(await getProvinces())
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

input_text.forEach(item=>{

  item.addEventListener("keyup",function (event){
     
  const value=this.value;
  this.value=addCommas(value)
  this.setAttribute('value', this.value);
  })
})



flatpickr(".date_month",  { dateFormat: 'd/m/Y',maxDate:"31.12.2017"});