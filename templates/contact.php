
<section class="breadCrumbles m-auto">
    <div class="d-flex p-3 ">
        <a class="text-decoration-none px-2 text-dark cursor-pointer"  href="index.php?page=main">Inicio</a>
        <p class="m-0">/</p>
        <a class="text-decoration-none px-2 text-dark cursor-pointer" href="index.php?page=contact">Contactar</a>
    </div>
</section>
<section class="containerContact m-auto w-100 h-auto d-flex justify-content-center">
    <div class="row justify-content-center pt-4">
        <div class="col-12 col-sm-9 col-md-7 col-lg-7 px-5">
            <div class="d-flex flex-column align-items-center mb-4">
                <p class="m-0 text-center  fs-2 ">Contacto</p>
                <p class="lowBarContact"></p>
            </div>
            <div class="wow fadeIn" data-wow-delay="0.3s">
                <form id="formContact" >
                    <div class="row g-4  ">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="firstNamec" name="firstNamec"  
                                pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+" required>
                                <label for="namec">Nombres</label>
                                <div class="invalid-feedback">Ingrese solo letras y espacios.</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="lastNamec" name="lastNamec" 
                                pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+" required>
                                <label for="namec">Apellidos</label>
                                <div class="invalid-feedback">Ingrese solo letras y espacios.</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="emailc" name="emailc" required>
                                <label for="emailc">Correo Electrónico</label>
                                <div class="invalid-feedback">Ingrese un correo electrónico válido.</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="tel" class="form-control" id="phonec" name="phonec" 
                                    pattern="[0-9]{9}" maxlength="9" minlength="9" required>
                                <label for="celularc">Celular (9 dígitos)</label>
                                <div class="invalid-feedback">Ingrese un número de celular válido de 9 dígitos.</div>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="selectType" id="selectProject" value="project" checked>
                                <label class="form-check-label" for="selectProject">Proyecto</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="selectType" id="selectProgram" value="program">
                                <label class="form-check-label" for="selectProgram">Programa</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating" id="selectProgramContainer" style="display: none;">
                                <select class="form-select" name="contacto_program" aria-label="Seleccionar programa">
                                    {% for program in programs %}
                                        <option value="{{ program.id }}" name="idProgram">{{ program.name }}</option>
                                    {% endfor %}
                                </select>
                                <label>Seleccione el programa</label>
                            </div>
                            <div class="form-floating" id="selectProjectContainer" style="display: none;">
                                <select class="form-select" name="contacto_project" aria-label="Seleccionar un proyecto">
                                    {% for project in projects %}
                                        <option value="{{ project.id }}" name="idProject">{{ project.name }}</option>
                                    {% endfor %}
                                </select>
                                <label>Seleccione el programa</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class=" btnContact text-white  w-100 py-3" type="submit" id="btnContacto">Enviar Mensaje</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<div id="message_successContact" class="px-5 alert  message_alertContact hideContact">
    Registro exitoso
</div>
<script src="{% static 'coppaApp/js/contact.js' %}" defer></script>
{% endblock %}