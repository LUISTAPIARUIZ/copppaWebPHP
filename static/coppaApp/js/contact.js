// Obtener los elementos de los radio buttons y los contenedores de selectores
var selectProject = document.getElementById('selectProject');
var selectProgram = document.getElementById('selectProgram');
var selectProjectContainer = document.getElementById('selectProjectContainer');
var selectProgramContainer = document.getElementById('selectProgramContainer');
let formContact=document.getElementById("formContact")

// Función para mostrar u ocultar los selectores según la selección del radio button
function toggleSelectors() {
    if (selectProject.checked) {
        // Si se selecciona "Proyecto", mostrar el selector de proyectos y ocultar el de programas
        selectProjectContainer.style.display = 'block';
        selectProgramContainer.style.display = 'none';
    } else {
        // Si se selecciona "Programa", mostrar el selector de programas y ocultar el de proyectos
        selectProjectContainer.style.display = 'none';
        selectProgramContainer.style.display = 'block';
    }
}

// Agregar el evento change a los radio buttons para llamar a la función toggleSelectors
selectProject.addEventListener('change', toggleSelectors);
selectProgram.addEventListener('change', toggleSelectors);

// Función para validar la posición inicial de los radio buttons y ajustar la visibilidad de los selectores en consecuencia
function validateInitialPosition() {
    if (selectProject.checked) {
        // Si se selecciona "Proyecto" inicialmente, mostrar el selector de proyectos y ocultar el de programas
        selectProjectContainer.style.display = 'block';
        selectProgramContainer.style.display = 'none';
    } else {
        // Si se selecciona "Programa" inicialmente, mostrar el selector de programas y ocultar el de proyectos
        selectProjectContainer.style.display = 'none';
        selectProgramContainer.style.display = 'block';
    }
}

// Llamar a la función validateInitialPosition al cargar la página
window.addEventListener('load', validateInitialPosition);

formContact.addEventListener("submit",function(event){
    event.preventDefault()
    // Crea un objeto FormData para recopilar los datos del formulario
    const formData = new FormData(formContact);
    
    // Realiza una solicitud POST utilizando Fetch
    fetch('/contactRequest/', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        // Verifica si la solicitud fue exitosa
        if (!response.ok) {
            throw new Error('Error en la solicitud: ' + response.status);
        }
        formContact.reset()
        // Devuelve los datos de la respuesta en formato JSON
        return response.json();
    })
    .then(data => {
        // Hacer algo con los datos de la respuesta
        let mensajeDiv = document.getElementById("message_successContact");
        mensajeDiv.classList.remove("hideContact");
        setTimeout(function() {
            mensajeDiv.classList.add("hideContact");
        }, 3000); // Desaparecer después de 3 segundos
    })
    .catch(error => {
        // Maneja errores de la solicitud
        console.error('Error al enviar la solicitud:', error);
    });
})