const switchAnswer = document.querySelector('.switch input')

export function switchAnswerInit(){

    switchAnswer.addEventListener('change', () => {
        if (switchAnswer.checked){
            switchAnswer.setAttribute('value', 'detailed')
        }else{
            switchAnswer.setAttribute('value', 'quick')
        }
    })
}