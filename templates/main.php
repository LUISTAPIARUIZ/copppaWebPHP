<!-- ESTA SECCION CONTIENE EL CARROUSEL PRINCIPAL DEL LA PAGINA-->
<section class="containerCarrousel m-auto">
  <div class="container-fluid px-0">
    <div class="w-100 px-0">
      <div class="carousel slide" id="carouselExampleIndicators" data-bs-ride="carousel">
        <!-- BOTONES DE POSICION DE SLIDER-->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" aria-label="Slide 1" class="active"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
          <!-- SLIDER 1-->
          <div class="carousel-item active">
            <img src="static/coppaApp/img/inaug.jpg" class="d-block w-100  img-fluid" alt="...">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center " style="background-color: rgba(57, 57, 57, 0.442);">
            </div>
          </div>
          <!-- SLIDER 2-->
          <div class="carousel-item">
            <img src="static/coppaApp/img/inaug.jpg" class="d-block w-100  img-fluid" alt="...">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center" style="background-color: rgba(57, 57, 57, 0.442);">
            </div>
          </div>
          <!-- SLIDER 3-->
          <div class="carousel-item">
            <img src="static/coppaApp/img/inaug.jpg" class="d-block w-100  img-fluid" alt="...">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center" style="background-color: rgba(57, 57, 57, 0.442);">
            </div>
          </div>
        </div>

        <!-- BOTONES NEXT Y PREVIOUS PARA CONTROLAR EL SLIDER -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
</section>

<!--FIN CARROUSEL-->

<!-- ESTA SECCION CONTIENE LA VISTA PREVIA DE PROYECTO-->
<section class="containerViewProyects w-100 h-auto d-flex justify-content-center align-items-center m-auto">
  <div class="w-100 p-4 viewProyects">
    <!--TITULO-->
    <div class="w-100 d-flex align-items-center viewProyects__title">
      <h4  class="m-0 fs-1">Nuestros proyectos</h4>
    </div>
    <!-- CUADRO DE PROYECTOS -->
    <div class="viewProyects__content w-100 h-100">
      <!-- PROYECTO 1-->
      <div class="position-relative d-flex flex-column justify-content-end viewProyects__content--element">
        <a href="{% url 'coppaApp:project_detail' project_id=1 %}" class="position-relative d-flex flex-column justify-content-end cursor-pointer w-100 h-100">
          <figure class="m-0 w-100 h-100 p-0">
            <img class="w-100 h-100" src="static/coppaApp/img/inaug.jpg" alt="">
          </figure>
          <div class="position-absolute start-0 mx-4 h-auto">
            <h4 class="m-0 bg-white text-dark p-2 d-inline-block fs-5">Proyecto especifico </h4>
          </div>
        </a>
      </div>
      <!-- PROYECTO 2 -->
      <div class="position-relative d-flex flex-column justify-content-end viewProyects__content--element">
        <a href="{% url 'coppaApp:project_detail' project_id=2 %}" class="position-relative d-flex flex-column justify-content-end cursor-pointer w-100 h-100">
          <figure class="m-0 w-100 h-100 p-0">
            <img class="w-100 h-100" src="static/coppaApp/img/inaug.jpg"  alt="">
          </figure>
          <div class="position-absolute  start-0 mx-4 h-auto">
            <h4 class="m-0 bg-white text-dark p-2 d-inline-block fs-5">Proyecto especifico </h4>
          </div>
        </a>
      </div>
      <!-- PROYECTO 3 -->
      <div class="position-relative d-flex flex-column justify-content-end viewProyects__content--element">
        <a href="{% url 'coppaApp:project_detail' project_id=3 %}" class="position-relative d-flex flex-column justify-content-end cursor-pointer w-100 h-100">
          <figure class="m-0 w-100 h-100 p-0">
            <img class="w-100 h-100" src="static/coppaApp/img/inaug.jpg"  alt="">
          </figure>
          <div class="position-absolute  start-0 mx-4 h-auto">
            <h4 class="m-0 bg-white text-dark p-2 d-inline-block fs-5">Proyecto especifico </h4>
          </div>
        </a>
      </div>
    </div>
    <!--BOTON  VER MAS-->
    <div class=" w-100 h-100 d-flex justify-content-center align-items-end viewProyects__btn">
      <button class=""> ver mas</button>
    </div>
  </div>
</section>

<!--ESTA SECCION CONTIENE LA VISTA DE LOS EJES CENTRALES DE COPPA-->
<section class="containerCentralAxis m-auto ">
  <div class="centralAxis w-100 h-100">
    <!-- TITULO -->
    <div class="centralAxis__title text-center text-sm-start">
      <h4 class="centralAxis__title--main m-0 d-inline-block px-5 py-3">EJE CENTRAL</h4>
    </div>
    <!-- DESCRIPCION-->
    <div class="centralAxis__Description px-0 px-sm-0 px-xl-5 my-4 mx-auto text-center text-sm-start">
      COPPA se dedica al apoyo y desarrollo de organizaciones económicas y empresariales, incluyendo:
  </div>
    <!-- LISTA DE EJES CENTRALES-->
    <div class="my-4">
      <div class="centralAxis__elements px-sm-5 px-md-0">
        <!-- ELEMENTO 1-->
        <div class=" m-0 m-auto d-flex align-items-center">
          <img class="" src="static/coppaApp/img/cheque.png" alt="iconCheck">
          <p class="m-0">elemento 123 asdsad asdasdsa asd asd </p>
        </div>
        <!-- ELEMENTO 2-->
        <div class="m-0 m-auto d-flex align-items-center">
          <img class="" src="static/coppaApp/img/cheque.png" alt="iconCheck">
          <p class="m-0">elemento 123 asdsad asdasdsa asd asd </p>
        </div>
        <!-- ELEMENTO 3-->
        <div class="m-0 m-auto d-flex align-items-center">
          <img class="" src="static/coppaApp/img/cheque.png" alt="iconCheck">
          <p class="m-0">elemento 123 asdsad asdasdsa asd asd </p>
        </div>
        <!-- ELEMENTO 4-->
        <div class="m-0 m-auto d-flex align-items-center">
          <img class="" src="static/coppaApp/img/cheque.png" alt="iconCheck">
          <p class="m-0">elemento 123 asdsad asdasdsa asd asd </p>
        </div>
        <!-- ELEMENTO 5-->
        <div class="m-0 m-auto d-flex align-items-center">
          <img class="" src="static/coppaApp/img/cheque.png" alt="iconCheck">
          <p class="m-0">elemento 123 asdsad asdasdsa asd asd </p>
        </div>
        <!-- ELEMENTO 6-->
        <div class="m-0 m-auto d-flex align-items-center">
          <img class="" src="static/coppaApp/img/cheque.png" alt="iconCheck">
          <p class="m-0">elemento 123 asdsad asdasdsa asd asd </p>
        </div>
        <!-- ELEMENTO 7-->
        <div class="m-0 m-auto d-flex align-items-center">
          <img class="" src="static/coppaApp/img/cheque.png" alt="iconCheck">
          <p class="m-0">elemento 123 asdsad asdasdsa asd asd </p>
        </div>
        <!-- ELEMENTO 8-->
        <div class="m-0 m-auto d-flex align-items-center">
          <img class="" src="static/coppaApp/img/cheque.png" alt="iconCheck">
          <p class="m-0">elemento 123 asdsad asdasdsa asd asd </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!--ESTA SECCION CONTIENE A LOS ALIADOS ESTRATEGICOS-->
<section class="containerStrategicAllies m-auto">
  <div class="StrategicAllies m-auto h-auto">
    <a href="#content"  id="enlace" class="StrategicAlliesTitle d-flex align-items-center m-auto flex-row" >
      <h4 class="m-0">Aliados Estratégicos</h4>
      <figure class="m-0">
        <i class="fa-solid fa-chevron-down"></i>
      </figure>
    </a>
    <div class="StrategicAlliesContent m-auto " id="content">
      <div class="">
        <figure class="m-0  d-flex justify-content-center ">
            <img class="h-100 m-auto" src="static/coppaApp/img/aytologoTrapagaran.png" alt="">
        </figure>
        <figure class="m-0  d-flex justify-content-center">
            <img class="h-100 m-auto" src="static/coppaApp/img/aytologoTrapagaran.png" alt="">
        </figure>
        <figure class="m-0  d-flex justify-content-center ">
            <img class="h-100 m-auto" src="static/coppaApp/img/aytologoTrapagaran.png" alt="">
        </figure>
        <figure class="m-0  d-flex justify-content-center ">
            <img class="h-100 m-auto" src="static/coppaApp/img/aytologoTrapagaran.png" alt="">
        </figure>
        <figure class="m-0  d-flex justify-content-center ">
            <img class="h-100 m-auto" src="static/coppaApp/img/aytologoTrapagaran.png" alt="">
        </figure>
      </div>
    </div>
  </div>
</section>