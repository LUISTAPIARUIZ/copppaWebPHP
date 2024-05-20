<?php
// Consulta para obtener los programas
$sql = "SELECT * FROM project";
$result = mysqli_query($con, $sql);
?>
<section class="breadCrumbles m-auto ">
    <div class="d-flex p-3 ">
        <a class="text-decoration-none px-2 text-dark cursor-pointer"  href="index.php?page=main">Inicio</a>
        <p class="m-0">/</p>
        <a class="text-decoration-none px-2 text-dark cursor-pointer" href="index.php?page=projects">Proyectos</a>
    </div>
</section>
<section class="containerProjects m-auto w-100 h-auto d-flex justify-content-center px-3 ">
    <div class="Projects pt-4 w-100  px-md-5 px-sm-4 px-1">
        <div class="Projects__title w-100 h-auto mb-4">
            <h4 class="d-inline-block fs-3 m-0">Conoce nuestros proyectos</h4>
        </div>
        <div class="Projects__content w-100">
            <div class="row p-0 justify-content-center align-items-center g-3">
            <?php while ($project = mysqli_fetch_assoc($result)): ?>
                    <div class="col-lg-6 col-xl-4 position-relative">
                        <a href="index.php?page=project_detail&project_id=<?php echo $project['id']; ?>">
                            <img src="static/coppaApp/img/inaug.jpg"  alt="<?php echo$project['name']; ?>" class="img-fluid equal-size">
                        </a>
                        <h6 class="position-absolute overflow-hidden px-2 py-1 px-sm-3 py-sm-3"><?php echo htmlspecialchars($project['name']); ?></h6>
                    </div>
            <?php endwhile; ?>  
            </div>
        </div>
    </div>
</section>
