//PARA TODAS LAS VISTAS

    //---------FUNCION PARA ESCONDER LA FECHA AL SCROLEAR------------
    let lastScrollTop = 0;

    window.addEventListener("scroll", function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        let nav = document.getElementById("navbar");
        let barraFecha = document.getElementById("barraFecha");

        if (scrollTop > lastScrollTop) {
            // Si se ha hecho scroll hacia abajo
            barraFecha.classList.add("d-none");
            nav.classList.remove("mb-0");
            nav.classList.add("mb-5");
        } else {
            // Si se ha hecho scroll hacia arriba
            barraFecha.classList.remove("d-none");
            nav.classList.remove("mb-5");
            nav.classList.add("mb-0");
        }

        lastScrollTop = scrollTop;
    });

    // --------FUNCION PARA DESPLEGAR EL MENU RESPONSIVE -------------
    let btnMenuResponse = document.getElementById("barMenu")
    let menuResponse = document.getElementById("menuResponse")
    btnMenuResponse.addEventListener("click",function(){
        menuResponse.classList.toggle("showMenuResponse")
    })
    
    //-----------BARRAS BAJA DE LA CABECERA---------------
    // Seleccionar todos los enlaces de la barra de navegación
    const links = document.querySelectorAll('.navbar-nav .nav-link');

    // Añadir un controlador de eventos de clic a cada enlace
    links.forEach(link => {
        link.addEventListener('click', function() {
            // Quitar la clase "active" de todos los enlaces
            links.forEach(otherLink => {
                otherLink.classList.remove('active');
            });

            // Agregar la clase "active" al enlace que se ha hecho clic
            this.classList.add('active');

            // Quitar la clase "active" de todas las barras bajas
            const barrasBajas = document.querySelectorAll('.barra-baja');
            barrasBajas.forEach(barra => {
                barra.style.backgroundColor = 'transparent';
            });

            // Obtener el ID del enlace que se ha hecho clic
            const linkId = this.getAttribute('id');

            // Seleccionar la barra baja correspondiente y cambiar su color
            const barraBaja = document.querySelector(`#barra-baja-${linkId}`);
            barraBaja.style.backgroundColor = '#C0207B';
        });
    });
    //------------FECHA DE LA PAGINA----------
    // Obtener la fecha actual
    let fechaActual = new Date();

    // Formatear la fecha como texto legible
    let options = { year: 'numeric', month: 'long', day: 'numeric' };
    let fechaFormateada = fechaActual.toLocaleDateString('es-ES', options);

    // Mostrar la fecha en el elemento con id "fecha"
    document.getElementById('fecha').textContent = fechaFormateada;
