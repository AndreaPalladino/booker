let button = document.querySelector('#btn');
let letter = document.querySelector('.class');
let subtitle = document.querySelector('#subtitle');
let sfondo = document.querySelector('#sfondo');

function changeText() {

    

    if (button.value == "Turn-on the Lights") {
        btn.value = "Turn-off the Lights";
        btn.innerHTML = "Turn-off the Lights";
    }
    else {
        btn.value = "Turn-on the Lights";
        btn.innerHTML = "Turn-on the Lights";
    }

}

button.addEventListener('click', ()=>{
    letter.classList.toggle('class2');
    subtitle.classList.toggle('class3');
    sfondo.classList.toggle('mastheadAcceso');
    changeText();
})