const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const salary_from = document.getElementById('salary_from');

const salary_to = document.getElementById('salary_to');

const addressUser = $('.addressUser');
const provincesUser = $('.provincesUser');
const districtsUser = $('.districtsUser');
const btn_infoUser = $('.btn-infoUser');

const select_provinces = $("select[name='slcity']");

const select_district = $("select[name='sldistrict']");
const input_lastname = $("input[name='lastname']");
const input_firstname = $("input[name='firstname']");
const location_id = $("select[name='location_id']");

const fileInput = $('input[name="file-input"]');
const img_mem_avatar = document.getElementById('img_mem_avatar');

const apiInfoUser = 'http://localhost//itjobs/jobseekers/my_profile/infoUser';

const not_experience=$("input[name='not_experience']")
const yearOfExperience=$("input[name='yearOfExperience']")







  


async function loadInfoUser() {
  const data = await getData(apiInfoUser);
  displayInfoUser(data);
  
}

async function displayInfoUser(data) {
  const {  firstname, lastname } = data;
  const {provinces,districts,address} = await getData('http://localhost//itjobs/jobseekers/my_profile/addressUser');

  const nameUser = $('.nameUser');
  const address2 = $('.address2 span');

  if (provinces && districts) {
    const dataProvinces = await getData(`https://provinces.open-api.vn/api/p/${provinces}`);
    const dataDistricts = await getData(`https://provinces.open-api.vn/api/d/${districts}`);

    const { name: nameProvinces } = dataProvinces;
    const { name: nameDistricts } = dataDistricts;

    provincesUser.textContent = nameProvinces;
    districtsUser.textContent = nameDistricts;
    addressUser.textContent = `${address},${nameDistricts},${nameProvinces}`;

    address2.textContent = `${address},${nameDistricts},${nameProvinces}`;

    nameUser.textContent = firstname;

    input_lastname.value = lastname;
    input_firstname.value = firstname;
  } else {
    address2.textContent = '';
  }
}

async function getData(url) {
  return (await axios.get(url)).data;
}

function addCommas(str) {
  return str
    .replace(/^0+/, '')
    .replace(/\D/g, '')
    .replace(/\B(?=(\d{3})+(?!\d))/g, ',');
}
salary_from.addEventListener('keyup', function (event) {
  const value = this.value;
  this.value = addCommas(value);
  this.setAttribute('value', this.value);
});
salary_to.addEventListener('keyup', function (event) {
  const value = this.value;
  this.value = addCommas(value);
  this.setAttribute('value', this.value);
});

async function getProvinces() {
  const api = 'https://provinces.open-api.vn/api/';
  const data = await getData(api);
  
  displayProvinces(data);
  desiredForm(data);
}

async function displayProvinces(data) {
  const apiAddressUser = 'http://localhost//itjobs/jobseekers/my_profile/addressUser';
  try {
    const dataInfoUser = await getData(apiAddressUser);
    const { provinces,address } = dataInfoUser;

    let htmls = ``;
    if (provinces) {
      htmls += `<option value="" >Chọn </option>`;
    } else {
      htmls = `<option value="" selected>Chọn </option>`;
    }
    data.forEach((item) => {
      htmls += `<option ${+provinces == item.code ? 'selected' : ''} 
         value="${item.code}">${item.name}</option>`;
    });
  
    select_provinces.innerHTML = htmls;
    $("input[name='address']").value=address
    if (provinces) {
      displayDistrictsForUser(await getDistrict(provinces));
    }
  } catch (error) {
    
  }

 
}

async function displayDistrictsForUser(data) {
  const dataInfoUser = await getData("http://localhost//itjobs/jobseekers/my_profile/addressUser");
  const { districts } = dataInfoUser;
 
  let htmls = ``;
  if (districts) {
    htmls += `<option value="" >Chọn </option>`;
  } else {
    htmls = `<option value="" selected>Chọn </option>`;
  }
  data.forEach((item) => {
    htmls += `<option ${+districts == item.code ? 'selected' : ''} 
     value="${item.code}">${item.name}</option>`;
  });
  select_district.innerHTML = htmls;
}

function displayDistrict(data) {
  let htmls = `<option value="" selected style="display:none;">Chọn </option>`;
  data.forEach((item) => {
    htmls += `<option value="${item.code}">${item.name}</option>`;
  });
  select_district.innerHTML = htmls;
}

async function displayJobInfo() {
  const api = `http://localhost//itjobs/jobseekers/my_profile/desiredWork`;
  const workplace=$(".workplace")
  try {
    const desiredWork = await getData(api);
    const { provinces } = desiredWork;
    const dataProvinces=await getData(`https://provinces.open-api.vn/api/p/${provinces}`);
  if(provinces){
  
    const { name } = dataProvinces;
    workplace.textContent = name;
  }
  } catch (error) {
    console.log(error);
  }

  
 
}

async function getDistrict(code) {
  const api = `https://provinces.open-api.vn/api/p/${code}?depth=2`;
  const data = await getData(api);

  return data.districts;
}
async function desiredForm(data) {

  const api = `http://localhost//itjobs/jobseekers/my_profile/desiredWork`;
  const seeker_job_information = await getData(api);
  const { provinces } = seeker_job_information;
  
  let htmls = `<option value="" selected style="display:none;">Chọn </option>`;
  data.forEach((item) => {
    htmls += `<option ${+provinces == item.code ? 'selected' : ''}  value="${item.code}">${item.name}</option>`;
  });
  location_id.innerHTML = htmls;
}


window.addEventListener('scroll',()=>{
   
    // const test=$(".main-widget .widget").filter(function(){
    //   return this.offsetTop <Window.top+100;
    // })
    // console.log(test);
})



function handleSetAticve(){
  const list_shortchut=$$(".list-shortchut li a");
const widget=$$(".widget");


list_shortchut.forEach(item=>{
  const href=item.getAttribute('data-href');
  item.addEventListener('click', () => {
    widget.forEach(item2=>{
      const id=item2.getAttribute("id");
       if(href==id){
        $(".list-shortchut li a.active").classList.remove("active");
        item.classList.add("active")
        const position=getOffset(item2);
    
        window.scrollTo(0, position);
   
        
      } 
    })
  })
 

})
}

function getOffset(el) {
  const rect = el.getBoundingClientRect();
  return  rect.top + window.scrollY -100
}




async function start() {
  handleSetAticve()
  getProvinces()
  loadInfoUser()
  displayJobInfo();
  
  
}

start();



$("input[name='cboExperCurrent']").addEventListener("change", function (e){
  const rexp_month_end=$("select[name='rexp_month_end']")
  const rexp_year_end=$("select[name='rexp_year_end']")
  if(e.target.checked){
    
  
    rexp_month_end.setAttribute('disabled','')
    rexp_year_end.setAttribute('disabled','')  
    rexp_month_end.value=""
    rexp_year_end.value=""
    
  }
  else{
    rexp_month_end.removeAttribute('disabled')
    rexp_year_end.removeAttribute('disabled')  
  

  }
})


not_experience.addEventListener("change", function (e){
  

  if(e.target.checked){
    
  
    yearOfExperience.setAttribute('disabled','')

    yearOfExperience.value=0
   
    
  }
  else{
    yearOfExperience.removeAttribute('disabled')
    yearOfExperience.value=1


  }
})

if(not_experience.checked){
  
  yearOfExperience.setAttribute('disabled','')

  yearOfExperience.value=0
}




select_provinces.addEventListener('change', async function () {
  const code = this.value;

  displayDistrict(await getDistrict(code));
});

btn_infoUser.onclick = async () => {
  displayInfoUser(await loadInfoUser());
};
window.onload = function () {
  //personalInfoForm
  var personalInfoForm = document.getElementById('personalInfoForm');

  var pristine = new Pristine(personalInfoForm);

  var mobile = document.getElementById('mobile');
  var slcity = document.getElementById('slcity');

  pristine.addValidator(
    mobile,
    function (value) {
      const regex = /(84|0[3|5|7|8|9])+([0-9]{8})\b/;
      if (regex.test(value)) {
        return true;
      }
      return false;
    },
    'Vui lòng nhập đúng định dạng số điện thoại',
    5,
    false
  );

  pristine.addValidator(
    slcity,
    function (value) {
      if (value.length > 0) {
        return true;
      }
      return false;
    },
    'Không được để trống',
    5,
    false
  );

  personalInfoForm.addEventListener('submit', function (e) {
    e.preventDefault();
    var valid = pristine.validate();
    if (valid) {
      e.target.submit();
    } else {
      // alert("Form is invalid");
    }
  });

  let desiredForm = document.getElementById('desired-form');
  let pristine2 = new Pristine(desiredForm);

  let select_level_id = document.getElementById('level_id');
  let select_location_id_3 = document.getElementById('select_location_id_3');

  pristine2.addValidator(
    select_level_id,
    function (value) {
      if (value.length > 0) {
        return true;
      }
      return false;
    },
    'Không được để trống',
    5,
    false
  );

  pristine2.addValidator(
    select_location_id_3,
    function (value) {
      if (value.length > 0) {
        return true;
      }
      return false;
    },
    'Không được để trống',
    2,
    false
  );

  desiredForm.addEventListener('submit', function (e) {
    e.preventDefault();
    var valid = pristine2.validate();
    if (valid) {
      e.target.submit();
    } else {
      // alert("Form is invalid");
    }
  });
};

fileInput.addEventListener('change', (e) => {
  const file = e.target.files[0];
  const reader = new FileReader();

  reader.addEventListener(
    'load',
    () => {
      let img = reader.result;

      img_mem_avatar.src = img;
    },
    false
  );
  if (file) {
    reader.readAsDataURL(file);
  }
});

flatpickr('.date_month', { dateFormat: 'd/m/Y', maxDate: '31.12.2017', allowInput: true });


