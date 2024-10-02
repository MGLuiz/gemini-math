import { initSupMenu } from './supMenu.js';
import { switchAnswerInit } from './switch.js';
import { initImageInput, initImgGeminiApiRequestSender } from './imageInput.js';

document.addEventListener("DOMContentLoaded", () => {
    initSupMenu();
    switchAnswerInit();
    initImageInput();
    initImgGeminiApiRequestSender();
});