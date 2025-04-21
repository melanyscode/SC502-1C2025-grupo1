<body class="d-flex flex-column min-vh-100">

    <div class="header-calendario pb-5 flex-grow-1">
        <div class="container d-flex align-items-center justify-content-center" style="min-height: 30vh;">
            <div class="row text-center">
                <div class="col-12">
                    <h1 class="my-3 display-1 txt-azul-oscuro">Eventos 2025</h1>
                    <h5 class="my-3 txt-black">Encuentra tu nueva experiencia</h5>
                </div>
            </div>
        </div>
    </div>

    <form method="GET" action="index.php?c=landing&a=calendario">
    <div class="container d-flex justify-content-center pt-5">
        <div class="search-box p-3 rounded d-flex align-items-center justify-content-between w-100">
            <!-- Búsqueda por Nombre de Evento -->
            <input type="text" name="busqueda" class="form-control me-2" placeholder="Buscar por evento..." style="flex: 2;" value="<?= isset($_GET['busqueda']) ? htmlspecialchars($_GET['busqueda']) : '' ?>">

            <!-- Selección de Categoría -->
            <select name="categoria" class="form-select select-custom me-2" style="flex: 1;">
                <option value="" <?= !isset($_GET['categoria']) || $_GET['categoria'] == '' ? 'selected' : '' ?> disabled>Seleccionar Categoría</option>
                <option value="1" <?= isset($_GET['categoria']) && $_GET['categoria'] === '1' ? 'selected' : '' ?>>Jornadas de Adopción</option>
                <option value="2" <?= isset($_GET['categoria']) && $_GET['categoria'] === '2' ? 'selected' : '' ?>>Charlas Educativas</option>
                <option value="3" <?= isset($_GET['categoria']) && $_GET['categoria'] === '3' ? 'selected' : '' ?>>Campañas de Vacunación</option>
                <option value="4" <?= isset($_GET['categoria']) && $_GET['categoria'] === '4' ? 'selected' : '' ?>>Voluntariado</option>
            </select>

            <!-- Botón de Búsqueda -->
            <button type="submit" class="btn btn-primary" style="flex: 0 0 auto; display: flex; align-items: center; justify-content: center;">
                <img src="assets/bg-search.png" alt="Buscar" style="width: 20px; height: 20px;">
            </button>
        </div>
    </div>
</form>



    <div id="carouselExampleIndicators" class="carousel slide my-5" data-ride="carousel" style="width: 1000px; margin: 0 auto;">
        <ol class="carousel-indicators">
            <?php foreach ($eventosCarrusel as $index => $evento): ?>
                <li data-target="#carouselExampleIndicators" data-slide-to="<?= $index ?>" class="<?= $index === 0 ? 'active' : '' ?>"></li>
            <?php endforeach; ?>
        </ol>

        <div class="carousel-inner">
            <?php foreach ($eventosCarrusel as $index => $evento): ?>
                <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                    <img class="d-block mx-auto"
                        src="<?= htmlspecialchars($evento['imagen_url']) ?>"
                        alt="Imagen del evento"
                        style="width: 1000px; height: 400px; object-fit: cover; border-radius: 10px;">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded px-3 py-2">
                        <h5><?= htmlspecialchars($evento['nombre']) ?></h5>
                        <p><?= date("d/m/Y g:i a", strtotime($evento['fecha'] . ', ' . $evento['hora'])) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>



    <div class="container mt-4">
        <div class="row">
            <?php if (!empty($eventos)): ?>
                <?php foreach ($eventos as $evento): ?>
                    <div class="col-md-6 mb-4">
                        <div class="event-card shadow-sm h-100">
                            <div class="event-card-header">
                                <?= htmlspecialchars($evento['nombre']) ?>
                            </div>
                            <div class="event-card-body d-flex">
                                <div class="event-description">
                                    <h5 class="event-title">Organizado por: <?= htmlspecialchars($evento['nombre_organizador']) ?></h5>
                                    <p class="event-text"><?= htmlspecialchars($evento['descripcion']) ?></p>
                                </div>
                                <?php if (!empty($evento['imagen_url'])): ?>
                                    <img src="<?= $evento['imagen_url'] ?>" alt="Imagen del Evento" class="event-img">
                                <?php endif; ?>
                            </div>
                            <div class="event-card-footer">
                                <?= htmlspecialchars($evento['fecha']) ?>, <?= htmlspecialchars($evento['hora']) ?> | <?= htmlspecialchars($evento['ubicacion']) ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-center">No hay eventos disponibles en este momento.</p>
            <?php endif; ?>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#carouselExampleIndicators').carousel();
        });
    </script>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>