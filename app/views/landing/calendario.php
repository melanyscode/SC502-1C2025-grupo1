<?php require_once __DIR__ .'/../navbar.php'; ?>
<body class="d-flex flex-column min-vh-100">

     
    <div class="header-calendario pb-5 flex-grow-1">
        <div class="container d-flex align-items-center justify-content-center" style="min-height: 50vh;">
            <div class="row text-center">
                <div class="col-12">
                    <h1 class="my-3 display-1 txt-azul-oscuro">Eventos 2025</h1>
                    <h5 class="my-3 txt-black">Encuentra tu nueva experiencia</h5>
                </div>
            </div>
        </div>
        </div>
        

        <div class="container d-flex justify-content-center pt-5">
            <div class="search-box p-3 rounded d-flex align-items-center justify-content-between w-100">
                <input type="text" class="form-control me-2" placeholder="Buscar..." style="flex: 2;">
                <select class="form-select select-custom me-2" style="flex: 1;">
                    <option selected disabled>Ubicación</option>
                    <option>San José</option>
                    <option>Alajuela</option>
                    <option>Cartago</option>
                    <option>Heredia</option>
                    <option>Puntarenas</option>
                    <option>Guanacaste</option>
                    <option>Limón</option>
                </select>
                <select class="form-select select-custom me-2" style="flex: 1;">
                    <option selected disabled>Categoría</option>
                    <option>Charla</option>
                    <option>Adopciones</option>
                </select>
                <button>
                <img src="public/bg-search.png" alt="Buscar" style="width: 20px; height: 20px;">
                </button>
            </div>
        </div>

        <div class="mu-swiper-multimedia-outer-wrapper">
            <div class="swiper-button-prev"></div>

            <div class="swiper-container mu-swiper-multimedia">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="d-flex justify-content-between align-items-left p-3 " style="background-color: #EEF5FF; max-width: 900px; margin: 0 auto; border-radius: 8px;">
                            <div class="event-info">
                                <h2 class="txt-azul-oscuro mt-3 mb-3">Coffee day con mascotas</h2>
                                <h4 class="txt-azul-oscuro mt-2 mb-3">Organizado por</h4>
                                <h5 class="txt-black mt-2 mb-2">Animales de Asís</h5>
                                <div class="d-flex align-items-left">
                                    <p class="txt-black mt-2 mb-2">Martes 11 de marzo, 3:30pm</p>
                                </div>
                                <div class="small-box d-inline-block p-2">
                                    <p class="txt-azul-oscuro mb-0">Acompáñanos</p>
                                </div>
                            </div>
                            <img src="public/img/bg-12.jpg" alt="Imagen del evento" class="d-none d-sm-block" width="400px" height="280px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
        </div>

        <div class="container mt-5 pb-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="event-card">
                        <div class="event-card-header">
                            Dona Amor
                        </div>
                        <div class="event-card-body d-flex">
                            <div class="event-description">
                                <h5 class="event-title">Organizado por: Fundación Renacer Animal</h5>
                                <p class="event-text">Únete a nuestra causa y ayuda a los animales sin hogar. Tu donación puede marcar la diferencia en la vida de un ser necesitado.</p>
                            </div>
                            <img src="public/img/bg-13.jpg" alt="Imagen del Evento" class="event-img">
                        </div>
                        <div class="event-card-footer">
                            12 de marzo, 10:00 AM | Plaza Mayor
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="event-card">
                        <div class="event-card-header">
                            Día de Encuentro
                        </div>
                        <div class="event-card-body d-flex">
                            <div class="event-description">
                                <h5 class="event-title">Organizado por: Savia</h5>
                                <p class="event-text">Únete a nosotros en este evento de adopción, donde tendrás la oportunidad de conocer y adoptar a algunos de nuestros gatitos rescatados.</p>
                            </div>
                            <img src="public/img/bg-14.jpg" alt="Imagen del Evento" class="event-img">
                        </div>
                        <div class="event-card-footer">
                            15 de marzo, 2:00 PM | Auditorio Central
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>


<?php require_once  __DIR__ .'/../footer.php'; ?>