import { chatRequest } from "./requestFactory.js";

const sendBtn = document.querySelector("#send-text-btn");
const msg = document.querySelector("#prompt");
const userPP = "https://cdn-icons-png.flaticon.com/512/5951/5951752.png";
const chat = document.querySelector("#question-output");

export function initVRTeacher(){

    sendBtn.addEventListener("click", (event) => {
        event.preventDefault();
        if (msg.value != ""){

            let userMsgElement = createMsgElement("user-msg", userPP, "User profile picture", msg.value)
            chat.appendChild(userMsgElement);
            
            let response = chatRequest(msg.value);
            response.then((r) => {
                
                let teachMsg = r.message;
                teachMsg = teachMsg.replace("`", '');
                teachMsg = teachMsg.replace("\n", "<br><br>");
                let teachMsgElement = createMsgElement("teacher-msg", "/favicon.png", "Math Teacher profile picture", teachMsg);
                chat.appendChild(teachMsgElement);
            });
        }
        msg.value = "";
    });

    window.addEventListener("keydown", (e) => {
        if (e.code == "Enter"){
            sendBtn.click();
        }
    });
}

function createMsgElement(className, imgSrc, alt, msg){
    let msgElement = document.createElement("div");

    msgElement.innerHTML = `<div class="${className}">
                                <div class="pp"><img src="${imgSrc}" alt="${alt}"></div>
                                <div class="msg-box">
                                    <p>${msg}</p>
                                </div>
                            </div>`;
    return msgElement;
}