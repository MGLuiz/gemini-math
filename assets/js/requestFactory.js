export async function imgRequest(imgUrl, ansType){
    
    let data = {
        imageUrl: imgUrl,
        answerType: ansType
    }

    let response = await fetch('/solveImage', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify(data)
    });
    
    return await response.json();
}