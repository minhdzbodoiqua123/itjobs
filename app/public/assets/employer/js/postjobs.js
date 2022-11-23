// flatpickr('#JOB_LASTDATE', { dateFormat: 'd/m/Y', maxDate: '31.12.2017', allowInput: true });

const select_location=document.querySelector('.select_location');
const districts=document.querySelector("select[name='districts']");

async function getDistrict(code) {
  const api = `https://provinces.open-api.vn/api/p/${code}?depth=2`;
  const data = await getData(api);

  return data.districts;
}

function displayDistrict(data) {
  let htmls = `<option value="" selected style="display:none;">Chọn </option>`;
  data.forEach((item) => {
    htmls += `<option value="${item.code}">${item.name}</option>`;
  });
  districts.innerHTML = htmls;
}

select_location.addEventListener('change', async function () {
  const code = this.value;

  displayDistrict(await getDistrict(code));
});

async function getData(url) {
    return (await axios.get(url)).data;
  }
  

async function displayProvinces(){
  const dataPronvinces = await getData("https://provinces.open-api.vn/api/p");
  let htmls=`<option value="">Chọn</option>`;
 dataPronvinces.forEach(function(item){  
      htmls+=`<option value="${item.code}">${item.name}</option>`;
  });


  select_location.innerHTML = htmls;
}

function loadExperience(value){
  if(+value==2){
    const JOB_EXPERIENCE=document.querySelector('#JOB_EXPERIENCE');
    JOB_EXPERIENCE.setAttribute("style","display:block")
  }
  else{
    JOB_EXPERIENCE.setAttribute("style","display:none")
  }
}


function start() {
    displayProvinces()
}

start();

