import { initSupMenu } from './supMenu.js';
import { switchAnswerInit } from './switch.js';
import { initImageInput, initImgGeminiApiRequestSender } from './imageInput.js';
import { initTextInput } from './textInput.js';

document.addEventListener("DOMContentLoaded", () => {
    initSupMenu();
    switchAnswerInit();

    switch (window.location.pathname){
        case "/":
            initImageInput();
            initImgGeminiApiRequestSender();
            break;

        case "/solveText":
            initTextInput();
            break;
    }
    
});