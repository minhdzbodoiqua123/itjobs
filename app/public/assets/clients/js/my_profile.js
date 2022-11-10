flatpickr(".date_month",  { dateFormat: 'd/m/Y',maxDate:"31.12.2017"});
const input_text=document.querySelectorAll("input[type='text']")
input_text.forEach(item=>{

item.addEventListener("keyup",function (event){
   
const value=this.value;
this.value=addCommas(value)
this.setAttribute('value', this.value);
})
})
function addCommas(str){
  return str.replace(/^0+/, '').replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

