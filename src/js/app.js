document.addEventListener('DOMContentLoaded', function(){

    eventListeners();

    darkMode();
});

function darkMode(){
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches){
        document.body.classList.add('dark-mode');

    } else {
        document.body.classList.remove('dark-mode');
    }
    
    const preferenciaColor = window.matchMedia('(prefers-color-scheme: dark)');

    function aplicarTema(preferencia){
        if (preferencia.matches){
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
    }

    //aplicar al cargar 
    aplicarTema(preferenciaColor);

    //escuchar los cambios en la preferencia 
    preferenciaColor.addEventListener('change',(e) => aplicarTema(e));

    const botonDarkMode = document.querySelector('.dark-mode-boton');

    botonDarkMode.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode');
    })
}

function eventListeners(){
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive(){
    const navegacion = document.querySelector('.navegacion');

    if(navegacion.classList.contains('mostrar')){
        navegacion.classList.remove('mostrar');
    } else {
        navegacion.classList.add('mostrar');
    }
}
