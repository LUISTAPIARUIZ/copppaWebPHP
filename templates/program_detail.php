<?php
// Verificar si se proporciona un program_id válido en la URL
if(isset($_GET['page']) && $_GET['page'] == 'program_detail' && isset($_GET['program_id']) && is_numeric($_GET['program_id'])) {
    // Sanitizar y capturar el program_id
    $program_id = intval($_GET['program_id']);

    // Consulta para obtener la información del programa
    $sql = "SELECT * FROM program WHERE id = $program_id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        // Verificar si se encontró algún programa
        if (mysqli_num_rows($result) > 0) {
            // Obtener los datos del programa
            $program = mysqli_fetch_assoc($result);
?>
<section class="breadCrumbles m-auto">
    <div class="d-flex p-3 ">
        <a class="text-decoration-none px-2 text-dark cursor-pointer" href="<?php echo 'index.php?page=home'; ?>">Inicio</a>
        <p class="m-0">/</p>
        <a class="text-decoration-none px-2 text-dark cursor-pointer" href="<?php echo 'index.php?page=programs'; ?>">Programas</a>
        <p class="m-0">/</p>
        <a class="text-decoration-none px-2 text-dark cursor-pointer" href="<?php echo 'index.php?page=program_detail&program_id=' . $program['id']; ?>"><?php echo $program['name']; ?></a>
    </div>
</section>
<section class="containerProgramDetail m-auto w-100 h-auto">
    <header class="programDetailHeader w-100 h-auto position-relative ">
        <img class="programDetailHeader__img img-fluid w-100" src="<?php echo 'static/coppaApp/img/inaug.jpg'; ?>" alt="">
        <div class="programDetailHeader__overlay position-absolute bottom-0 start-0 w-100 d-flex justify-content-start align-items-end py-3 px-3 px-md-3 py-md-5 ">
            <div class="programDetailHeader__content p-2 py-md-5 px-md-5">
                <h4 class="programDetailHeader__content--title bg-black text-white px-3 py-2"><?php echo $program['name']; ?></h4>
                <button class="programDetailHeader__content--btn  mt-3 w-auto px-5 py-2" id="btnSolicitarInformacion">
                    Solicitar información
                </button>
            </div>
        </div>
    </header>
    <div class="programDetailContent px-3 px-lg-5">
        <div class="programDetailContent__back px-0 py-4 fs-5"> 
            <a class="d-flex align-items-center text-decoration-none text-dark" href="<?php echo 'index.php?page=programs'; ?>">
                <div class="d-inline-block">
                    <i class="fa-solid fa-arrow-left px-2"></i>Regresar a programas
                </div>
                
            </a>
        </div>
        <div  class="ProgramDetailContent__text d-flex flex-wrap">
            <div class="col-md-8 col-12 px-2 px-md-5 pt-2 pb-5 ">
                <?php echo $program['content']; ?>
                
            </div>
            <aside class="ProgramDetailContent__aside col-12 col-md-4 px-2  py-1 ">
                <h4 class="ProgramDetailContent__aside--title mb-3">Añadidos Recientemente</h4>
                <div class="ProgramDetailContent__aside--content px-3 py-4 d-flex flex-column">
                    <?php
                    // Consulta para obtener los programas recientes
                    $sql_recent = "SELECT * FROM program ORDER BY id DESC LIMIT 5";
                    $result_recent = mysqli_query($con, $sql_recent);

                    if ($result_recent) {
                        while ($row = mysqli_fetch_assoc($result_recent)) {
                            echo '<a href="index.php?page=program_detail&program_id=' . $row['id'] . '" class="p-2 text-wrap px-2 py-3 mb-3">' . $row['name'] . '</a>';
                        }
                    }
                    ?>
                  </div>
            </aside>
        </div>
    </div>
</section>
</section>
<div id="message_success" class="px-5 alert  message_alert hide">
    Registro exitoso
</div>
<div id="formInfoProgram" class="formInfoProgram position-fixed vw-100 vh-100  justify-content-center align-items-center" >
    <div class="containetFormPrograma position-relative bg-white col-10 col-md-9 col-lg-5 h-auto px-sm-5 py-sm-4 px-2 py-4">
        <header>
            <h4>Solicitud de Informacion</h4>
            <P><?php echo $program['name']; ?></P>
        </header>
        <form id="informationRequestForm" class="row d-flex g-3">
            <input type="hidden"  name="id" value="{{ program.id }}">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control" name="requestProgramName"
                    pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+" required>
                    <label for="namec">Nombres y Apellido </label>
                    <div class="invalid-feedback">Ingrese solo letras y espacios.</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control" name="requestProgramPosition"
                    pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+" required>
                    <label for="namec">Cargo (Opcional) </label>
                    <div class="invalid-feedback">Ingrese solo letras y espacios.</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control" name="requestProgramPhone" 
                    pattern="\d{9}" minlength="9" maxlength="9" title="Debe ingresar un número de 9 dígitos" required>
                    <label for="namec">Celular </label>
                    <div class="invalid-feedback">Debe ingresar un número de 9 dígitos.</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="email" class="form-control" name="requestProgramEmail" 
                    pattern="[a-zA-Z0-9._%+\-]+@[a-zA-Z0-9.\-]+\.[a-zA-Z]{2,}" 
                    title="Por favor, ingrese un correo electrónico válido" required>
                    <label for="namec">Correo Electrónico</label>
                    <div class="invalid-feedback">Ingrese una dirección de correo electrónico válida.</div>
                </div>
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Mensaje" name="requestProgramMessage" style="height: 150px" required=""></textarea>
                <label for="message">Mensaje</label>
            </div>
            <button type="submit" class="p-2 btn-solicitar m-auto mt-4" >
                Solicitar
            </button>
        </form>  
        <div class="position-absolute  d-inline-block" id="cerrarSolicitudPrograma" >
            <i class="fa-solid fa-x"></i>
        </div>
    </div>
</div>
<?php
        }
    }
}
?>