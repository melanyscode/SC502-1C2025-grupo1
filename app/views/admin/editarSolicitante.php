<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    require_once 'app/models/Solicitante.php';

    $solicitud = Solicitante::buscarSolicitud($id);
}
?>


<body class="body-admin bg-celeste">

    <div class=" bg-celeste">
        <?php include "aside.php" ?>
    </div>

    <div class=" m-3 ms-1 p-4 bg-white rounded-5">
        <h1 class=" text-center txt-azul-oscuro mt-5">Agregar Solicitante</h1>

        <div class="container  mt-5 pt-5">
            <form action="index.php?c=admin&a=guardarEditSolicitante" method="POST" class="mt-5"
                enctype="multipart/form-data">
                <div class="col">

                    <div class="row">
                        <div class="col mb-3">
                            <input type="hidden" value="<?php echo $solicitud['id_solicitud'] ?>" name="id"
                                id="editIdSolicitante">
                            <label>Acuerdo</label>
                            <select name="acuerdo" id="addAcuerdoSolicitante" class="input-adopcion bg-celeste" >
                                <option value="1" <?= ($solicitud['acuerdo'] == 1) ? 'selected' : '' ?>>Activo</option>
                                <option value="0" <?= ($solicitud['acuerdo'] == 0) ? 'selected' : '' ?>>Inactivo</option>
                            </select>
                        </div>
                        <div class="col mb-3">
                            <label>Tipo vivienda</label>
                            <input type="text" name="tipo_vivienda" class="input-adopcion bg-celeste"
                                value="<?php echo $solicitud['tipo_vivienda'] ?>" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label>Descripcion vivienda</label>
                            <input type="text" name="descripcion_vivienda" class="input-adopcion bg-celeste"
                                value="<?php echo $solicitud['descripcion_vivienda'] ?>" readonly>
                        </div>

                    </div>
                    <div class="col mb-3">
                        <label>patio</label>
                        <select name="patio" id="addEstadoUsuario" class="input-adopcion bg-celeste" readonly>
                            <option value="1" <?= ($solicitud['patio'] == 1) ? 'selected' : '' ?>>Si</option>
                            <option value="0" <?= ($solicitud['patio'] == 0) ? 'selected' : '' ?>>No</option>

                        </select>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <label>Mudanza</label>
                            <input type="text" name="mudanza" class="input-adopcion bg-celeste"
                                value="<?php echo $solicitud['mudanza'] ?>" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label>Cuido</label>
                            <input type="text" name="cuido" class="input-adopcion bg-celeste"
                                value="<?php echo $solicitud['cuido'] ?>" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label>Gastos</label>
                            <select name="gastos" id="addEstadoUsuario" class="input-adopcion bg-celeste" readonly>
                                <option value="1" <?= ($solicitud['gastos'] == 1) ? 'selected' : '' ?>>Si</option>
                                <option value="0" <?= ($solicitud['gastos'] == 0) ? 'selected' : '' ?>>No</option>
                            </select>

                        </div>
                        <div class="col mb-3">
                            <label>Post-adopción</label>
                            <select name="post_adopcion" id="addEstadoUsuario" class="input-adopcion bg-celeste" readonly>
                                <option value="1" <?= ($solicitud['post_adopcion'] == 1) ? 'selected' : '' ?>>Si</option>
                                <option value="0" <?= ($solicitud['post_adopcion'] == 0) ? 'selected' : '' ?>>No</option>
                            </select>

                        </div>
                    </div>
                    <div class="text-end">
                        <button
                            class="d-inline border-0 px-4 py-2 bg-azul-oscuro rounded-5 text-white fw-bold mt-2 text-end"
                            type="submit">Guardar</button>
                    </div>



                </div>
        </div>
        </form>
    </div>
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>