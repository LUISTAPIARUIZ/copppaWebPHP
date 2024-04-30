let btnSolicitarInformacion= document.getElementById("btnSolicitarInformacion");
let formInfoProgram=document.getElementById("formInfoProgram");
let cerrarSolicitudPrograma = document.getElementById("cerrarSolicitudPrograma")
let informationRequestForm=document.getElementById("informationRequestForm")
btnSolicitarInformacion.addEventListener("click",()=>{
    formInfoProgram.style.display="flex"
})
cerrarSolicitudPrograma.addEventListener("click",()=>{
    formInfoProgram.style.display="none"
})

// Agrega un evento de escucha para el evento 'submit' del formulario
informationRequestForm.addEventListener("submit", function(event) {
    // Evita el comportamiento predeterminado de enviar el formulario
    event.preventDefault();
    
    // Crea un objeto FormData para recopilar los datos del formulario
    const formData = new FormData(informationRequestForm);
    
    // Realiza una solicitud POST utilizando Fetch
    fetch('/informationRequest/', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        // Verifica si la solicitud fue exitosa
        if (!response.ok) {
            throw new Error('Error en la solicitud: ' + response.status);
        }
        // Devuelve los datos de la respuesta en formato JSON
        return response.json();
    })
    .then(data => {
        // Hacer algo con los datos de la respuesta
        let mensajeDiv = document.getElementById("message_success");
        mensajeDiv.classList.remove("hide");
        setTimeout(function() {
            mensajeDiv.classList.add("hide");
        }, 3000); // Desaparecer después de 3 segundos
        formInfoProgram.style.display="none"
        console.log(data);
    })
    .catch(error => {
        // Maneja errores de la solicitud
        console.error('Error al enviar la solicitud:', error);
    });
});