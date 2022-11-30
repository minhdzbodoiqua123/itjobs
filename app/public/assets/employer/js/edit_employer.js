
const logo = document.querySelector('input[name="logo"]');
const image1 = document.querySelector('input[name="image1"]');
const image1_path = document.querySelector('#image1_path');


const logo_path = document.getElementById('logo_path');

logo.addEventListener('change', (e) => {
    const file = e.target.files[0];
    file.preview=URL.createObjectURL(file);
    logo_path.src = file.preview;
    logo_path.setAttribute('style', 'display:block;')
 
  });
  image1.addEventListener('change', (e) => {
    const file = e.target.files[0];
    file.preview=URL.createObjectURL(file);
    image1_path.src = file.preview;
    image1_path.setAttribute('style', 'display:block;')
 
  });