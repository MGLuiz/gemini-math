import { textRequest } from "./requestFactory.js";

const input = document.querySelector("#qst-input");
const output = document.querySelector("#question-output");
const sendBtn = document.querySelector("#send-text-btn");
const switchAnswer = document.querySelector('.switch input');

export function initTextInput(){

    sendBtn.addEventListener("click", (event) => {
        event.preventDefault();
        
        let response = textRequest(input.value, switchAnswer.value);
        response.then((r) => {

            if (typeof r.success !== 'undefined' && r.success){
                
                if (switchAnswer.value == 'quick'){
                    output.classList.add('quickShow');
                }
                if (switchAnswer.value == 'detailed'){
                    output.classList.add('detailedShow');
                }
                output.innerHTML = r.solution.replace("`", '');
            }else{
                output.classList.add('quickShow');
                output.innerHTML = `ERRO: ${r.message}`;
            }
        });
    });
}
