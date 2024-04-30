
    // PARA LA VISTA DE NOSOTROS 
    //-------FUNCION PARA DAR ESTILOS A LO INDICADORES DE LA HISTORIA----
    document.addEventListener('DOMContentLoaded', function() {
        // Función para obtener el índice del elemento activo y aplicar el color al elemento li y al div contenedor correspondientes
        function getActiveIndex() {
            var carousel = document.getElementById('carouselExampleControls');
            var indicators = document.querySelectorAll('.carroucelIndicator li');
            var divs = document.querySelectorAll('.carroucelIndicator div');
    
            // Obtener el índice del elemento activo
            var activeIndex = Array.from(carousel.querySelectorAll('.carousel-item')).indexOf(carousel.querySelector('.carousel-item.active'));
    
            // Aplicar el color al elemento li y al div contenedor correspondientes
            indicators.forEach(function(indicator, index) {
                if (index === activeIndex) {
                    indicator.style.backgroundColor = '#C0207B';
                    divs[index].style.borderColor = '#C0207B';
                } else {
                    indicator.style.backgroundColor = ''; // Restablecer el color por defecto si no coincide el índice
                    divs[index].style.borderColor = ''; // Restablecer el color de borde por defecto
                }
            });
    
            console.log("Elemento activo:", activeIndex);
        }
    
        // Llamar a la función cuando se carga el contenido
        getActiveIndex();
    
        // Escuchar el evento slid.bs.carousel para obtener el índice del elemento activo cada vez que cambie
        var carousel = document.getElementById('carouselExampleControls');
        carousel.addEventListener('slid.bs.carousel', getActiveIndex);
    });