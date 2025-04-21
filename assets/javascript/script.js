document.addEventListener("DOMContentLoaded", function () {
    let inputAdopciones = document.getElementById("inputAdopciones");
    let btnImgAdopciones = document.getElementById("btnImgAdopciones");
    const imgPreview = document.getElementById("imgpreview");

    let buttons = document.querySelectorAll("[data-btn]");
    let inputs = document.querySelectorAll("[data-input]");
    let previews = document.querySelectorAll("[data-preview]");

    if (inputs.length === buttons.length && buttons.length === previews.length) {
        inputs.forEach((input, index) => {
            console.log(previews[index])
            cargarImagen(input, previews[index], buttons[index]);
        });
    } else {
        console.error("No hay la misma cantidad de inputs, botones y previews en el HTML");
    }

    //funciones
    function cargarImagen(input, imgField, btn) {

        btn.addEventListener('click', function (e) {
            e.preventDefault();
            input.click();
        })

        input.addEventListener("change", function (e) {
            console.log("esta loading")
            const file = this.files[0];
            console.log(file);
            if (file) {
                const reader = new FileReader();
                reader.addEventListener("load", function () {

                    imgField.setAttribute("src", reader.result);


                })
                reader.readAsDataURL(file);
            }
        });
    }
    document.querySelectorAll('.form-eliminar').forEach(form => {
        form.addEventListener('submit', async function (e) {
            e.preventDefault(); // Evita el envío inmediato

            const confirmacion = await confirmar("¿Estás seguro de eliminar este usuario?");
            if (confirmacion) {
                form.submit(); // Solo si confirma
            }
        })
    });

    //modal de confirmacion
    function confirmar(mensaje) {
        return new Promise((resolve) => {
            document.getElementById('mensaje').textContent = mensaje;

            const modal = document.getElementById('modal-confirmacion');
            modal.style.display = 'flex';

            const confirmar = document.getElementById('confirmar');
            const cancelar = document.getElementById('cancelar');

            confirmar.onclick = () => {
                modal.style.display = 'none';
                resolve(true);
            };

            cancelar.onclick = () => {
                modal.style.display = 'none';
                resolve(false);
            };
        });
    }
    //modal informativo
    function informativo(mensaje) {
        const modalInformativo = document.getElementById("modal-informacion");
        const mensajeInfo = document.getElementById("mensaje-info");
        const btnConfirmar = document.getElementById("confirmar-info");
        mensajeInfo.textContent = mensaje;
        modalInformativo.style.display = "flex";
        btnConfirmar.onclick = () => {
            modalInformativo.style.display = "none";
        }
    }

    //filtro dinámico de subcategorías
    const categoriaSelect = document.getElementById('categoria');
    const subcategoriaSelect = document.getElementById('subcategoria');

    if (categoriaSelect && subcategoriaSelect) {
        function filtrarSubcategorias() {
            const categoriaSeleccionada = categoriaSelect.value;
            const opciones = subcategoriaSelect.querySelectorAll('option');

            let primeraVisible = null;

            opciones.forEach(opcion => {
                const cat = opcion.getAttribute('data-categoria');
                if (cat === categoriaSeleccionada) {
                    opcion.style.display = 'block';
                    if (!primeraVisible) primeraVisible = opcion;
                } else {
                    opcion.style.display = 'none';
                }
            });

            //solo limpiar si el valor actual no está visible
            if (!subcategoriaSelect.querySelector('option:checked')?.style?.display || subcategoriaSelect.querySelector('option:checked').style.display === 'none') {
                subcategoriaSelect.value = primeraVisible?.value || '';
            }
        }

        console.log("🧪 Listo para escuchar cambios de categoría");
        categoriaSelect.addEventListener('change', filtrarSubcategorias);
        filtrarSubcategorias();
    }
});