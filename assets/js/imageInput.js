import { imgRequest } from "./requestFactory.js";

const imgInput = document.querySelector('#image-input');
const imgMimes = ["image/jpeg", "image/jpg", "image/png"];
const dragArea = document.querySelector('.drag-area');

const imgIcon = document.querySelector('.img-selector');
const sendIcon = document.querySelector('.send-icon');

export function initImageInput(){
    initDragnAndDropImageInput()
    imgInput.addEventListener('change', (event) => {

        if (imgInput.files.length > 0){

            if(!imgMimes.includes(imgInput.files[0].type)){
                alert("Formato de imagem não permitido! Formato: " + type);
                return;
            }

            imgIcon.setAttribute('src', URL.createObjectURL(imgInput.files[0]));
            sendIcon.classList.add('show');

        }
    });
}

function initDragnAndDropImageInput(){
    dragArea.addEventListener('dragover', (e) => {
        e.preventDefault();
        dragArea.classList.add('dragover');
        console.log("over");
    });

    dragArea.ondragleave = (e) => {
        dragArea.classList.remove('dragover');
    }

    dragArea.addEventListener('drop', (e) => {
        e.preventDefault();
        dragArea.classList.remove('dragover');
        
        imgInput.files = e.dataTransfer.files;
        imgIcon.setAttribute('src', URL.createObjectURL(imgInput.files[0]));
        sendIcon.classList.add('show');
    })
}

// --------------------------------------------------------------------------------

const outputTA = document.querySelector('#question-output');
const sendImgBtn = document.querySelector('#send-btn');
const switchAnswer = document.querySelector('.switch input')

export function initImgGeminiApiRequestSender(){

    sendImgBtn.addEventListener('click', (event) => {
        event.preventDefault();

        let reader = new FileReader();
        reader.onload = (event) => {
            let response = imgRequest(reader.result, switchAnswer.value);
            response.then((r) => {

                if (r.success){
                    
                    if (switchAnswer.value == 'quick'){
                        outputTA.classList.add('quickShow');
                    }
                    if (switchAnswer.value == 'detailed'){
                        outputTA.classList.add('detailedShow');
                    }
                    
                    outputTA.innerHTML = r.solution.replace("`", '');
                }else{
                    outputTA.classList.add('quickShow');
                    outputTA.innerHTML = `ERRO: ${r.message}`;
                }
            });

        }
        reader.readAsDataURL(imgInput.files[0]);
    });


}
