import { initSupMenu } from './supMenu.js';
import { switchAnswerInit } from './switch.js';
import { initImageInput, initImgGeminiApiRequestSender } from './imageInput.js';
import { initTextInput } from './textInput.js';
import { initVRTeacher } from './VRTeacher.js';

document.addEventListener("DOMContentLoaded", () => {
    initSupMenu();
    
    switch (window.location.pathname){
        case "/":
            initImageInput();
            initImgGeminiApiRequestSender();
            switchAnswerInit();
        break;
            
        case "/solveText":
            initTextInput();
            switchAnswerInit();
        break;

        case "/vrteacher":
            initVRTeacher();
        break;
    }
    
});