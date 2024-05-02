<section class="breadCrumbles m-auto">
    <div class="d-flex p-3 ">
        <a class="text-decoration-none px-2 text-dark cursor-pointer" href="{% url 'coppaApp:home' %}">Inicio</a>
        <p class="m-0">/</p>
        <a class="text-decoration-none px-2 text-dark cursor-pointer" href="{% url 'coppaApp:about' %}">Nosotros</a>
    </div>
</section>
    <section class="containerAbout w-100 h-auto m-auto">
        <div class="about d-flex h-auto col-11 col-sm-10 col-xl-9 m-auto flex-nowrap py-2">
            <div class="about__content  m-auto m-xl-0 col-12 col-lg-8  p-4">
                <h4 class="about__content--title fs-2 my-4">Nosotros</h4>
                <p class="about__content--text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi non sit molestiae quo nihil natus cumque molestias sequi maiores, placeat velit quis harum est, quidem debitis totam eaque blanditiis tenetur? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse deleniti reprehenderit similique, labore repellat voluptatibus beatae laboriosam veniam exercitationem, est asperiores! Quasi, enim perspiciatis ad quibusdam quos placeat inventore velit!</p>
            </div>
            <div class="about__logo m-auto ">
                <figure class="w-100">
                    <img class="w-100" src="static/coppaApp/img/logo-coppaWeb.png" alt="">
                </figure>
            </div>
        </div>
    </section>
    <section class="containerHistory w-100 h-auto m-auto py-3">
        <div class="containerHistory__title w-100 d-flex justify-content-center align-item-center my-3">
            <h4 class="fs-3 px-4 py-2 m-0 d-inline">Nuestra trayectoria</h4>
        </div>
        <div id="carouselExampleControls" class="carousel slide containerHistory__content" data-bs-ride="carousel">
            <div class="carousel-inner h-100">
                <div class="carousel-item h-100 active">
                    <div class="historyFrame h-100">
                        <div class="containerHistory__content--element d-flex justify-content-center align-items-center m-auto h-100 p-3 col-xxl-6 col-xl-7 col-lg-8 col-md-9 col-sm-11 col-11 position-relative">
                            <figure class="m-0  h-100 col-12 col-sm-7  col-lg-6">
                                <img src="{% static 'coppaApp/img/inaug.jpg'%}" alt="" style="width: 100%; height: 100%; object-fit: cover;" >
                            </figure>
                            <h6 class="m-0 px-5 text-center m-auto col-sm-3  col-lg-6">Titulo del evento 1</h6>
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100 ">
                    <div class="historyFrame h-100">
                        <div class="containerHistory__content--element d-flex justify-content-center align-items-center m-auto h-100 p-3 col-xxl-6 col-xl-7 col-lg-8 col-md-9 col-sm-11 col-11 position-relative">
                            <figure class="m-0  h-100 col-12 col-sm-7  col-lg-6">
                                <img src="{% static 'coppaApp/img/inaug.jpg'%}" alt="" style="width: 100%; height: 100%; object-fit: cover;" >
                            </figure>
                            <h6 class="m-0 px-5 text-center m-auto col-sm-3  col-lg-6">Titulo del evento 1</h6>
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100 ">
                    <div class="historyFrame h-100">
                        <div class="containerHistory__content--element d-flex justify-content-center align-items-center m-auto h-100 p-3 col-xxl-6 col-xl-7 col-lg-8 col-md-9 col-sm-11 col-11 position-relative">
                            <figure class="m-0  h-100 col-12 col-sm-7  col-lg-6">
                                <img src="{% static 'coppaApp/img/inaug.jpg'%}" alt="" style="width: 100%; height: 100%; object-fit: cover;" >
                            </figure>
                            <h6 class="m-0 px-5 text-center m-auto col-sm-3  col-lg-6">Titulo del evento 1</h6>
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100">
                    <div class="historyFrame h-100">
                        <div class="containerHistory__content--element d-flex justify-content-center align-items-center m-auto h-100 p-3 col-xxl-6 col-xl-7 col-lg-8 col-md-9 col-sm-11 col-11 position-relative">
                            <figure class="m-0  h-100 col-12 col-sm-7  col-lg-6">
                                <img src="{% static 'coppaApp/img/inaug.jpg'%}" alt="" style="width: 100%; height: 100%; object-fit: cover;" >
                            </figure>
                            <h6 class="m-0 px-5 text-center m-auto col-sm-3  col-lg-6">Titulo del evento 1</h6>
                        </div>
                    </div>
                </div>
                <!-- Agrega más carousel items según sea necesario -->
            </div>
            <button class="carousel-control-prev d-none d-lg-block" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next d-none d-lg-block" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="containerHistory__control w-100 position-relative d-flex align-items-center">
            <div class="containerHistory__control--line position-absolute w-100 m-auto "></div>
            <ol class="carroucelIndicator position-absolute w-100   h-100 m-0 d-flex align-items-center justify-content-between px-5">
                <div class="p-1"  data-bs-target="#carouselExampleControls" data-bs-slide-to="0" >
                    <li class="m-0 internalIndicator" ></li>
                </div>
                <div class="p-1"  data-bs-target="#carouselExampleControls" data-bs-slide-to="1">
                    <li  class="m-0 internalIndicator"></li>
                </div>
                <div class="p-1" data-bs-target="#carouselExampleControls" data-bs-slide-to="2">
                    <li  class="m-0 internalIndicator" ></li>
                </div>
                <div class="p-1" data-bs-target="#carouselExampleControls" data-bs-slide-to="3">
                    <li  class="m-0 internalIndicator" ></li>
                </div>
                <!-- Agrega más indicadores según sea necesario -->
            </ol>
        </div>
    </section>