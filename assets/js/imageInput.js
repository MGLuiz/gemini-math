const imgInput = document.querySelector('#image-input');
const imgMimes = ["image/jpeg", "image/jpg", "image/png"];

const imgIcon = document.querySelector('.img-selector');
const sendIcon = document.querySelector('.send-icon');

export function initImageInput(){
    imgInput.addEventListener('change', (event) => {

        console.log(imgInput.files);
        if (imgInput.files.length > 0){

            if(!imgMimes.includes(imgInput.files[0].type)){
                alert("Formato de imagem não permitido! Formato: " + type);
                return;
            }

            imgIcon.setAttribute('src', URL.createObjectURL(imgInput.files[0]));
            sendIcon.classList.add('show');

        }
    })
}