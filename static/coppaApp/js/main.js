// PARA LA VISTA DEL MAIN
    //---------FUNCION PARA DESPLEGAR EL LA VISTA DE ALIADOS ESTREGICOS------------
    document.getElementById('enlace').addEventListener('click', function(event) {
        event.preventDefault(); // Evita que el enlace cambie de página

        var elemento = document.getElementById(this.getAttribute('href').substring(1)); // Obtiene el elemento al que se va a hacer scroll
        var posicion = elemento.offsetTop - window.innerHeight / 5 ; // Calcula la posición de desplazamiento para centrar el elemento
        const content = document.getElementById('content');
        window.scrollTo({
            top: posicion,
            behavior: 'smooth' // Desplazamiento suave
        });
        content.classList.toggle('show');
    });
