function getAllUrlParams(url) {

  // get query string from url (optional) or window
  var queryString = url ? url.split('?')[1] : window.location.search.slice(1);

  // we'll store the parameters here
  var obj = {};

  // if query string exists
  if (queryString) {

    // stuff after # is not part of query string, so get rid of it
    queryString = queryString.split('#')[0];

    // split our query string into its component parts
    var arr = queryString.split('&');

    for (var i = 0; i < arr.length; i++) {
      // separate the keys and the values
      var a = arr[i].split('=');

      // set parameter name and value (use 'true' if empty)
      var paramName = a[0];
      var paramValue = typeof (a[1]) === 'undefined' ? true : a[1];

      // (optional) keep case consistent
      paramName = paramName.toLowerCase();
      if (typeof paramValue === 'string') paramValue = paramValue.toLowerCase();

      // if the paramName ends with square brackets, e.g. colors[] or colors[2]
      if (paramName.match(/\[(\d+)?\]$/)) {

        // create key if it doesn't exist
        var key = paramName.replace(/\[(\d+)?\]/, '');
        if (!obj[key]) obj[key] = [];

        // if it's an indexed array e.g. colors[2]
        if (paramName.match(/\[\d+\]$/)) {
          // get the index value and add the entry at the appropriate position
          var index = /\[(\d+)\]/.exec(paramName)[1];
          obj[key][index] = paramValue;
        } else {
          // otherwise add the value to the end of the array
          obj[key].push(paramValue);
        }
      } else {
        // we're dealing with a string
        if (!obj[paramName]) {
          // if it doesn't exist, create property
          obj[paramName] = paramValue;
        } else if (obj[paramName] && typeof obj[paramName] === 'string'){
          // if property does exist and it's a string, convert it to an array
          obj[paramName] = [obj[paramName]];
          obj[paramName].push(paramValue);
        } else {
          // otherwise add the property
          obj[paramName].push(paramValue);
        }
      }
    }
  }

  return obj;
}
async function getData(url) {
    return (await axios.get(url)).data;
 }
  async function getProvinces() {
    const api = 'https://provinces.open-api.vn/api/';
    const data = await getData(api)
    .then((result) => {
      renderPronvinces(result);
    })
    
 
 
  }  
  
async function renderPronvinces (data) {
const all_location=document.getElementById('location');

 let searchLocation= trueTypeOf(getAllUrlParams()["location%5b%5d"])=="string"?[getAllUrlParams()["location%5b%5d"]]: getAllUrlParams()["location%5b%5d"];
 const htmls= data.map((item,index) => {
    return `<option 
    ${searchLocation ? searchLocation.map(value => {
      if(value==item.code){
        return `selected`
      }
    }).join("") : "" }

    value="${item.code}">${item.name}</option>`;
  }).join("")
   all_location.innerHTML=htmls;
  
}
const trueTypeOf = (obj) => Object.prototype.toString.call(obj).slice(8, -1).toLowerCase()
function start () {
    getProvinces();
}
start();

// function checkChecked(){

//     if(trueTypeOf(searchLocation)=="string"){
//       if(searchLocation==item.code){
//         return `selected`
//        }
//        return ;
//     }
//     else{
//       for (let i = 0; i < searchLocation.length; i++) {
//         const element=searchLocation[i]
//          if(element==item.code){
//           return `selected`
//          }
//          else{
//            return ``
//          }
//     }
  
  
//   }
// }
// `${checkChecked()}`