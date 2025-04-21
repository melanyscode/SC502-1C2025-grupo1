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

            if (!subcategoriaSelect.querySelector('option:checked')?.style?.display || subcategoriaSelect.querySelector('option:checked').style.display === 'none') {
                subcategoriaSelect.value = primeraVisible?.value || '';
            }
        }

        categoriaSelect.addEventListener('change', filtrarSubcategorias);
        filtrarSubcategorias();
    }

    //menú de categorías y subcategorías
    document.querySelectorAll(".categoria-btn").forEach(btn => {
        btn.addEventListener("click", () => {
            const categoriaId = btn.dataset.categoria;

            // Mostrar solo subcategorías de esta categoría
            document.querySelectorAll(".subcategoria-btn-wrapper").forEach(wrapper => {
                wrapper.classList.add("d-none");
                if (wrapper.dataset.categoria === categoriaId) {
                    wrapper.classList.remove("d-none");
                }
            });

            // Ocultar todos los artículos
            document.querySelectorAll(".subcategoria-articulos").forEach(div => {
                div.classList.add("d-none");
            });
        });
    });

    //activar como predeterminado la categoría "Cuidado" y subcategoría "Higiene y Estética"
    const btnCategoriaDefault = document.querySelector('[data-categoria="1"]');
    const btnSubcategoriaDefault = document.querySelector('[data-subcategoria="2"]');

    if (btnCategoriaDefault) {
        btnCategoriaDefault.click();
        btnCategoriaDefault.classList.add("active");
    }
    setTimeout(() => {
        if (btnSubcategoriaDefault) {
            btnSubcategoriaDefault.click();
            btnSubcategoriaDefault.classList.add("active");
        }
    }, 100);


    //artículos de la subcategoría seleccionada
    document.querySelectorAll(".subcategoria-btn").forEach(btn => {
        btn.addEventListener("click", () => {
            const subcatId = btn.dataset.subcategoria;

            document.querySelectorAll(".subcategoria-articulos").forEach(div => {
                div.classList.add("d-none");
            });

            const target = document.querySelector(`[data-subcategoria-articulos="${subcatId}"]`);
            if (target) {
                target.classList.remove("d-none");
            }
        });
    });


    //marcar botón activo de categoría
    document.querySelectorAll(".categoria-btn").forEach(btn => {
        btn.addEventListener("click", () => {
            document.querySelectorAll(".categoria-btn").forEach(b => b.classList.remove("active"));
            btn.classList.add("active");
        });
    });

    //marcar botón activo de subcategoría
    document.querySelectorAll(".subcategoria-btn").forEach(btn => {
        btn.addEventListener("click", () => {
            document.querySelectorAll(".subcategoria-btn").forEach(b => b.classList.remove("active"));
            btn.classList.add("active");
        });
    });


});