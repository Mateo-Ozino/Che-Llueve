let cruz = document.getElementsByClassName('boton-cerrar');
let info = document.getElementsByClassName('boton-info');

for (let i = 0; i < 41; i++){
    info[i].addEventListener('click', displayCruz);
    function displayCruz(){
        cruz[i].style = 'display: block';
    }
}

for (let i = 0; i < 41; i++){
    cruz[i].addEventListener('click', cerrar)
    function cerrar(){
        cruz[i].style = 'display: none';
    }
}








