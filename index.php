<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="icon" href="/static/coppaApp/img/logo-coppaWeb.png" type="image/png">
    <!--LinkStatic-->
    <script src="static/coppaApp/js/home.js"  defer></script>
    <link rel="stylesheet" type="text/css" href="static/coppaApp/css/header.css">
    <link rel="stylesheet" type="text/css" href="static/coppaApp/css/containerPrincipal.css">
    <link rel="stylesheet" type="text/css" href="static/coppaApp/css/programDetail.css">
    <link rel="stylesheet" type="text/css" href="static/coppaApp/css/projectDetail.css">
    <link rel="stylesheet" type="text/css" href="static/coppaApp/css/footer.css">

 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
    <!--LinkDinamic-->  
    <?php
    include ("config/conection.php");
    $request_path = $_SERVER['REQUEST_URI'];
    $base_url = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
    $base_url .= "://" . $_SERVER['HTTP_HOST'];
    
    $title = ''; // Inicializamos la variable $title
    
    if ($request_path == '/coppaWeb/' || $request_path == '/coppaWeb/index.php?page=main') {
        echo '<script src="' . $base_url . '/COPPAWEB/static/coppaApp/js/main.js" defer></script>';
        echo '<link rel="stylesheet" type="text/css" href="' . $base_url . '/COPPAWEB/static/coppaApp/css/main.css">';
        $title = 'Coppa Consejo Peruano Para la Autogestión';
    } elseif ($request_path =='/coppaWeb/index.php?page=about') {
        echo '<script src="' . $base_url . '/static/coppaApp/js/about.js" defer></script>';
        echo '<link rel="stylesheet" type="text/css" href="' . $base_url . '/COPPAWEB/static/coppaApp/css/about.css">';
        $title = 'Nosotros | Coppa';
    } elseif ($request_path == '/coppaWeb/index.php?page=programs') {
        echo '<link rel="stylesheet" type="text/css" href="' . $base_url . '/COPPAWEB/static/coppaApp/css/programs.css">';
    } elseif ($request_path == '/projects/') {
        echo '<link rel="stylesheet" type="text/css" href="' . $base_url . '/static/coppaApp/css/projects.css">';
    } elseif ($request_path == '/contact/') {
        echo '<link rel="stylesheet" type="text/css" href="' . $base_url . '/static/coppaApp/css/contact.css">';
    }
    
    echo '<title>' . $title . '</title>';
?>

</head>
<body class="min-vh-100">
    <?php
    echo $request_path;
    ?>
    <!--Cabecera-->
    <header class="d-flex flex-column fixed-top ">
        <!-- Barra de navegación -->
        <nav class="navbar navbar-expand navbar-light w-100 barNav bg-white" id="navbar">
            <div class="container-fluid d-flex justify-content-between align-items-center px-3 px-lg-5 h-100 navResponsive ">
                <!-- Logo coppa -->
                <div class="d-flex h-100 ">
                    <div class="collapse navbar-collapse" id="navbarNav1">
                        <!-- Contenido visible en tamaños de pantalla grandes -->
                        <div class="d-flex flex-row w-100">
                            <!-- Contenido visible solo en tamaños de pantalla grandes -->
                            <figure class="m-auto">
                                <img src="static/coppaApp/img/logo-coppaWeb.png" alt="logo-Coppa" class="logo-coppa">
                            </figure>                        
                            <div class="d-flex align-items-center">
                                <div class="barraSeparadora m-2 m-lg-3"></div>
                            </div>
                            <div class="contenedorNombreCoppa d-flex flex-column justify-content-center">
                                <h7 class="m-0 ">Consejo Peruano </h7>
                                <h7 class="m-0">Para la Autogestión</h7>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- lista del  menu -->
                <div class="d-none d-lg-flex">
                    <div class="collapse navbar-collapse" id="navbarNav2">
                        <ul class="navbar-nav">
                            <li class="nav-item me-2">
                                <a class="nav-link p-1 <?php if ($request_path == '/coppaWeb/' ||  $request_path == '/coppaWeb/index.php?page=main' ) echo 'active'; ?>" aria-current="page" href="index.php?page=main">Inicio</a>
                                <div id="barra-baja-inicio" class="barra-baja"></div>
                            </li>
                            <li class="nav-item me-2">
                                <a class="nav-link p-1 <?php if ($request_path == '/coppaWeb/index.php?page=about') echo 'active'; ?>" href="index.php?page=about">Nosotros</a>
                                <div id="barra-baja-nosotros" class="barra-baja"></div>
                            </li>
                            <li class="nav-item me-2">
                                <a class="nav-link p-1 <?php if ($request_path == '/coppaWeb/index.php?page=programs') echo 'active'; ?>" href="index.php?page=programs">Programas</a>
                                <div id="barra-baja-programas" class="barra-baja"></div>
                            </li>
                            <li class="nav-item me-2">
                                <a class="nav-link p-1 <?php if ($request_path == '/projects/') echo 'active'; ?>" href="{% url 'coppaApp:projects' %}">Proyectos</a>
                                <div id="barra-baja-proyectos" class="barra-baja"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-1 <?php if ($request_path == '/contact/') echo 'active'; ?>" href="{% url 'coppaApp:contact' %}">Contactar</a>
                                <div id="barra-baja-contactar" class="barra-baja"></div>
                            </li>
                        </ul>                        
                    </div>
                </div>
                <!--Contenido para pantallas pequeñas-->

                <!--Boton-->
                <div  class="d-flex d-lg-none">
                    <i class="fa-solid fa-bars iconnBars" id="barMenu"></i>
                </div>
            </div>
        </nav>

        <!-- Div debajo de la barra de navegación -->
        <div class="w-100 barraFecha d-flex justify-content-center align-items-center" id="barraFecha">
            <p id="fecha" class="m-auto"></p>
        </div>
    </header>
    <!--menu Desplegable-->
    <div class="menuResponse w-100 fixed-top d-inline-block d-lg-none" id="menuResponse">
        <div class="contenOpcionResponse w-100 h-100 d-flex flex-column my-5 align-items-center">
            <ul class="list-unstyled text-center my-5">
                <li class="p-2 fs-4 my-1">
                    <a  class="text-decoration-none text-white p-1 " href="{% url 'coppaApp:home' %}">Inicio</a>
                    </li>
                <li class="p-2 fs-4 my-1">
                    <a class="text-decoration-none text-white p-1 " href="{% url 'coppaApp:about' %}">Nosotros</a>
                    </li>
                <li class="p-2 fs-4 my-1">
                    <a class="text-decoration-none text-white p-1 " href="{% url 'coppaApp:programs' %}">Programas</a>
                    </li>
                <li class="p-2 fs-4 my-1">
                    <a  class="text-decoration-none text-white p-1 " href="{% url 'coppaApp:projects' %}">Proyectos</a>
                    </li>
                <li class="p-2 fs-4 my-1">
                    <a  class="text-decoration-none text-white p-1 {% if request.path == '/programs/' %}active{% endif %}" href="{% url 'coppaApp:contact' %}">Contactar</a>
                    </li>
            </ul>
        </div>
    </div>
    <div class="contenedorPrincipal position-relative pb-5">
    <?php
    // Verifica si se ha pasado el parámetro GET 'page'
    if (isset($_GET['page'])) {
        // Obtiene el valor del parámetro 'page'
        $page = $_GET['page'];

        // Verifica si la página es 'main' y luego incluye el archivo main.php
        if ($page == 'main') {
            include("templates/main.php");
            
        }else if($page == 'about'){
            include("templates/about.php"); 
        }else if($page == 'programs'){
            include("templates/programs.php"); 
        }
        // Puedes agregar más condiciones para otras páginas aquí
    } else {
        // Si no se pasa ningún parámetro GET, incluye por defecto el archivo main.php
        include("templates/main.php");
    }
?>
    
    </div>
    <!--Pie de pagina-->
    <footer class="containerFooter w-100">
        <div class="footer m-auto container p-0">
            <section class="containerDescription  text-white">
                <div class="descriptionCoppa footer1">
                    <div class="descriptionCoppaLogo d-flex">
                        <figure class="m-0 ">
                            <img src="static/coppaApp/img/logo-coppaWeb.png" alt="logo-Coppa" class="logo-coppa">
                        </figure>                        
                        <div class="w-auto d-flex align-items-center px-2">
                            <div class="barraSeparadoraFooter"></div>
                        </div>
                        <div class="contenedorNombreCoppaFooter d-flex flex-column justify-content-center">
                            <h5 class="m-0  d-flex flex-nowrap ">Consejo Peruano</h5>
                            <h5 class="m-0 d-flex flex-nowrap">Para la Autogestión</h5>
                        </div>
                    </div>
                    <div class="descriptionCoppaContent">
                        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere soluta quod itaque reiciendis saepe repellendus, dolore esse voluptatem labore. Consequatur, nulla libero! Voluptatum distinctio voluptates maxime nemo ducimus, iure excepturi.</p>
                    </div>
                </div>
                <div class="containerLocateUs footer1">
                    <div class="locateUs m-auto  h-100">
                        <div class="locateUs__title d-inline-block">
                            <h6 class="w-auto m-0 fs-5 py-1">
                                Ubicanos
                            </h6>
                            <div class="barraBajaFooter">

                            </div>
                        </div>
                        <div class="locateUs__Content">
                            <div class="LocateUs__content-element  d-flex flex-nowrap align-items-center">
                                <i class="fa-solid fa-location-dot"></i>
                                <p class="m-0 p-2">Jr camana N° 780 Of 604 Lima 1-</p>
                            </div>
                            <div class="locateUs__content-element  d-flex flex-nowrap align-items-center">
                                <i class="fa-solid fa-phone"></i>
                                <p class="m-0 p-2">Jr camana N° 780 Of 604 Lima 1-</p>
                            </div>
                            <div class="locateUs__content-element  d-flex flex-nowrap align-items-center">
                                <i class="fa-solid fa-inbox"></i>
                                <p class="m-0 p-2">Jr camana N° 780 Of 604 Lima 1-</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="containerLinkOfInterest footer1">
                    <div class="linkOfInterest m-auto  ">
                        <div class="linkOfInterest__title d-inline-block">
                            <h6 class="w-auto m-0 fs-5 py-1">
                                Link de interes
                            </h6>
                            <div class="barraBajaFooter">

                            </div>
                        </div>
                        <div class="linkOfInterest__content ">
                            <div class="linkOfInterest__content--elemet d-flex">
                                <i class="fa-solid fa-chevron-right px-2 d-flex justify-content-between align-items-center"></i>
                                <p class=" m-0 p-2">flacma</p>
                            </div>
                            <div class="linkOfInterest__content--elemet d-flex">
                                <i class="fa-solid fa-chevron-right px-2 d-flex justify-content-between align-items-center"></i>
                                <p class=" m-0 p-2">Trapagaran</p>
                            </div>
                            <div class="linkOfInterest__content__content--elemet d-flex">
                                <i class="fa-solid fa-chevron-right px-2 d-flex justify-content-between align-items-center"></i>
                                <p class=" m-0 p-2">Femulp</p>
                            </div>
                            <div class="linkOfInterest__content__content--elemet d-flex">
                                <i class="fa-solid fa-chevron-right px-2 d-flex justify-content-between align-items-center"></i>
                                <p class=" m-0 p-2">Femulp</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="containerSocialNetworks footer1">
                    <div class="SocialNetworks m-auto  flex-column">
                        <div class="SocialNetworks__title d-inline-block">
                            <h6 class="w-auto m-0 fs-5 py-1">
                                Redes sociales
                            </h6>
                            <div class="barraBajaFooter">

                            </div>
                        </div>
                        <div class="SocialNetworks__content d-flex ">
                            <i class="fa-brands fa-facebook"></i>
                            <i class="fa-brands fa-x-twitter"></i>
                            <i class="fa-brands fa-linkedin"></i> 
                        </div>
                    </div>
                    
                </div>
            </section>
            <section class="containerCopyRight" >
                <div class="d-flex justify-content-center align-items-center text-white">
                    © <a class="text-white" href="https://coppa.org"> coppa.org</a>, Todos los derechos
                    reservados.

                    Diseñado por <a class="text-white px-1" href="https://coppa.org">COPPA</a>
                </div>
            </section>
        </div>
    </footer>
</body>
</html>