
<?php
// Verificar si se proporciona un project_id válido en la URL
if(isset($_GET['page']) && $_GET['page'] == 'project_detail' && isset($_GET['project_id']) && is_numeric($_GET['project_id'])) {
    // Sanitizar y capturar el project_id
    $project_id = intval($_GET['project_id']);

    // Consulta para obtener la información del proyecto
    $sql = "SELECT * FROM project WHERE id = $project_id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        // Verificar si se encontró algún proyecto
        if (mysqli_num_rows($result) > 0) {
            // Obtener los datos del proyecto
            $project = mysqli_fetch_assoc($result);
            
            // Mostrar la información del proyecto
            ?>
            <section class="breadCrumbles m-auto">
                <div class="d-flex p-3 ">
                    <a class="text-decoration-none px-2 text-dark cursor-pointer" href="{% url 'coppaApp:home' %}">Inicio</a>
                    <p class="m-0">/</p>
                    <a class="text-decoration-none px-2 text-dark cursor-pointer" href="{% url 'coppaApp:projects' %}">Proyectos</a>
                    <p class="m-0">/</p>
                    <a class="text-decoration-none px-2 text-dark cursor-pointer" href="{% url 'coppaApp:project_detail' project_id=<?php echo $project['id']; ?> %}"><?php echo $project['name']; ?></a>
                </div>
            </section>
            <section class="containerProjectDetail m-auto w-100 h-auto">
                <div class="projectDetail m-auto col-md-9 col-11 pt-4 ">
                    <h3 class="projectDetail__title m-0 m-auto w-auto text-center"><?php echo $project['name']; ?></h3>
                    <div class="projectDetail__content pt-4 overflow-hidden">
                        <?php echo $project['content']; ?>
                    </div>
                </div>  
            </section>
            <?php
        } else {
            echo "No se encontró ningún proyecto con el ID proporcionado.";
        }
    } else {
        echo "Error en la consulta: " . mysqli_error($con);
    }
} else {
    echo "El ID del proyecto no es válido o la página no es correcta.";
}

// Cerrar la conexión
mysqli_close($con);
?>

