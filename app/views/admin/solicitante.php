<body class="body-admin bg-celeste">

    <div class=" bg-celeste">
        <?php include "aside.php" ?>
    </div>

    <div class=" m-3 ms-1 p-4 bg-white rounded-5">
        <h1 class=" text-center txt-azul-oscuro mt-5">Aplicaciones de Adopcion</h1>

        <div class="row">
            <div class="ms-4 my-5">
             
            </div>
        </div>
        <div class="ms-4 mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Acuerdo</th>
                        <th scope="col">Tipo vivienda</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Patio</th>
                        <th scope="col">Mudanza</th>
                        <th scope="col">Cuido</th>
                        <th scope="col text-center" style="text-align: center;">Ver</th>
                        <th scope="col" style="text-align: center;">Eliminar</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($solicitantes as $s): ?>
                        <tr>
                            <th scope="row"><?= $s['id_solicitud'] ?></th>
                            <td><?= $s['acuerdo'] == 1 ? 'Activo' : 'Inactivo' ?></td>
                            <td><?= htmlspecialchars($s['tipo_vivienda']) ?></td>
                            <td><?= htmlspecialchars($s['descripcion_vivienda']) ?></td>
                            <td><?= $s['patio'] == 1 ? 'Si' : 'No' ?></td>
                            <td><?= htmlspecialchars($s['mudanza']) ?></td>
                            <td><?= htmlspecialchars($s['cuido']) ?></td>
                            <td class="text-center">
                                <a href="index.php?c=admin&a=editarSolicitante&id=<?= $s['id_solicitud'] ?>"
                                    data-id="<?= $s['id_solicitud'] ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="20px">
                                        <path fill="#176b87"
                                            d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
                                    </svg>
                                </a>
                            </td>
                            <td class="text-center">
                                <form action="index.php?c=admin&a=eliminarSolicitante" method="POST" style="display:inline;"
                                    class="form-eliminar">
                                    <input type="hidden" name="id" value="<?= $s['id_solicitud'] ?>">
                                    <button type="submit" style="border: none; background: none; padding: 0;">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="20px">
                                            <path fill="#e44444"
                                                d="M135.2 17.7L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-7.2-14.3C307.4 6.8 296.3 0 284.2 0L163.8 0c-12.1 0-23.2 6.8-28.6 17.7zM416 128L32 128 53.2 467c1.6 25.3 22.6 45 47.9 45l245.8 0c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>