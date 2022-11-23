const $=document.querySelector.bind(document);

const location_company=$("select[name='location_id']");
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

location_company.addEventListener('change', async function () {
  const code = this.value;

  displayDistrict(await getDistrict(code));
});



async function getData(url) {
    return (await axios.get(url)).data;
  }
  

async function loadProvinces(){
  const dataPronvinces = await getData("https://provinces.open-api.vn/api/p");
  let htmls = `<option value="" selected style="display:none;">Chọn </option>`;

  dataPronvinces.forEach((item) => {
    htmls += `<option value="${item.code}">${item.name}</option>`;
  });
  
  location_company.innerHTML = htmls;
}

function start() {
    loadProvinces()
}

start();

window.onload = function () {
    //personalInfoForm
    var frmRegister = document.getElementById('frmRegister');

    Pristine.addValidator("select", function(value) {
        return  value.length>0    
     }, "Không được để trống", 5, false);
   
    var pristine = new Pristine(frmRegister);
  
   
   
   
    frmRegister.addEventListener('submit', function (e) {
      e.preventDefault();
      var valid = pristine.validate();
      if (valid) {
        e.target.submit();
      } else {
        // alert("Form is invalid");
      }
    });
  };
  