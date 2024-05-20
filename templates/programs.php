<?php
// Consulta para obtener los programas
$sql = "SELECT * FROM program";
$result = mysqli_query($con, $sql);
?>

<section class="breadCrumbles m-auto">
    <div class="d-flex p-3">
        <a class="text-decoration-none px-2 text-dark cursor-pointer" href="index.php?page=main">Inicio</a>
        <p class="m-0">/</p>
        <a class="text-decoration-none px-2 text-dark cursor-pointer" href="index.php?page=programs">Programas</a>
    </div>
</section>

<section class="containerPrograms m-auto w-100 h-auto d-flex justify-content-center">
    <div class="programs pt-4">
        <div class="programs__title w-100 h-auto mb-4">
            <h4 class="fs-3 m-0">Conoce nuestros programas</h4>
        </div>
        <div class="programs__content w-100">
            <div class="row p-0 d-flex justify-content-center align-items-center g-3">
                <?php
                // Mostrar los programas obtenidos de la base de datos
                $counter = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $counter++;
                    if ($counter % 3 == 1) {
                        echo '<div class="col-12 programs__content--elementBig position-relative">';
                    } else {
                        echo '<div class="col-md-6 programs__content--elementShort position-relative">';
                    }
                    echo '<a href="index.php?page=program_detail&program_id=' . $row['id'] . '">';
                    echo '<img src="static/coppaApp/img/inaug.jpg" alt="" class="img-fluid equal-size">';
                    echo '</a>';
                    echo '<h6 class="position-absolute overflow-hidden px-1 py-1 px-sm-2 py-sm-3 px-md-4 py-md-3">' . $row['name'] . '</h6>';
                    echo '</div>';
                    if ($counter % 3 == 0 || $counter == mysqli_num_rows($result)) {
                        echo '<!-- Cierre de fila si es el último programa del ciclo -->';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>
