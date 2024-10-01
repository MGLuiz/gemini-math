import { initSupMenu } from './supMenu.js';
import { switchAnswerInit } from './switch.js';
import { initImageInput } from './imageInput.js';

document.addEventListener("DOMContentLoaded", () => {
    initSupMenu();
    switchAnswerInit();
    initImageInput();
});