'use strict';

let form = document.querySelector('form');
function responseHandler(serverAnswer) {
    let newArea = document.querySelector('.newArea');
    let newText = document.createElement('p');
    newText.innerHTML = `${serverAnswer}<br>`;
    newArea.append(newText);
}

form.addEventListener('submit', async (event)=>{
    event.preventDefault();
    const response = await fetch('handler.php',
        {
            method: 'POST',
            body: new FormData(form)
        });
    const answer = await response.text();
    responseHandler(answer)
});