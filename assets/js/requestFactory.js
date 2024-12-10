export async function imgRequest(imgUrl, ansType){
    
    let data = {
        imageUrl: imgUrl,
        answerType: ansType
    }

    let response = await fetch('/solveImageApi', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify(data)
    });
    
    return await response.json();
}

export async function textRequest(text, ansType){

    let data = {
        text: text,
        answerType: ansType
    }

    let response = await fetch('/solveTextApi', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify(data)
    });

    return await response.json();
}