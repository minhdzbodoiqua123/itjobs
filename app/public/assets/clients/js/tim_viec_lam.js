const listCountry=document.getElementById('listCountry');

async function getData(url) {
    return (await axios.get(url)).data;
 }
  async function getProvinces() {
    const api = 'https://provinces.open-api.vn/api/';
    const data = await getData(api);
    
    renderPronvinces(data);
 
  }  

async function renderPronvinces (data) {
    
    const htmls= data.map((item) => {
       return `
       <li><a href="javascript:;"onclick="redirectpage(${item.code})">Việc làm tại
       ${item.name}</a></li>
   `;
     }).join("")
     listCountry.innerHTML=htmls;
   }
   
   function start () {
    getProvinces();
}
start();
function redirectpage (code) {
   window.location.href=`http://localhost//itjobs/Alljob?keyword=&location%5B%5D=${code}`
}