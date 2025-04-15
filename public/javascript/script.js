document.addEventListener("DOMContentLoaded", function () {

    //----------------------- GENERALES -------------------------
    //funcion para cargar imagenes en la parte de admin
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
    function sendRequest(url, method, data, callback) {
        fetch(url, {
            method: method,
            body: data,
        })
            .then(response => response.json())
            .then(callback)
            .catch(error => {
                console.log("Error en la solicitud:", error);
            });
    }

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
    //----------------------- FIN GENERALES -------------------------


    //-------------------------- USUARIO PERFIL, ADMIN Y LOGIN---------------------
    //llamada de usuario admin
    function loadUsers() {
        fetch("app/controllers/UsuarioController.php")
            .then(response => response.json())
            .then(data => {
                let contenido = "";
                const listUsuario = document.getElementById("usuarios");
                const roles = {
                    1: "Administrador",
                    2: "Usuario",
                    3: "Refugio"
                };
                if (data.length > 0) {
                    data.forEach(u => {
                        console.log(u);
                        contenido += `<tr>
                        <th scope="row">${u.id_usuario}</th>
                        <td>${u.nombre}</td>
                        <td>${u.apellido}</td>
                        <td> ${u.correo}</td>
                        <td>${u.telefono}</td>
                        <td>${u.estado == 1 ? "Activo" : "Inactivo"}</td>
                        <td>${roles[u.id_rol] || "Desconocido"}</td>
                        <td class="text-center"><a href="index.php?p=editarusuario&id=${u.id_usuario}" data-id="${u.id_usuario}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="20px">
                                    <path fill="#176b87" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
                                </svg></a></td>
                        <td class="text-center"><a href="" class="eliminarusuario" data-id="${u.id_usuario}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="20px">
                                    <<path fill="#e44444" d="M135.2 17.7L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-7.2-14.3C307.4 6.8 296.3 0 284.2 0L163.8 0c-12.1 0-23.2 6.8-28.6 17.7zM416 128L32 128 53.2 467c1.6 25.3 22.6 45 47.9 45l245.8 0c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                </svg></a></td>
                    </tr>`
                    });
                } else {
                    contenido = `<p class="text-center">No hay usuarios registrados</p>`;
                }
                listUsuario.innerHTML = contenido;
            })
    }

    //agregar usuario
    document.addEventListener('click', function (e) {
        if (e.target && e.target.id === "agregarUsuario") {
            e.preventDefault();
            const formData = new FormData();
            formData.append('action', 'add');
            formData.append('nombre', document.getElementById("addNombreUsuario").value);
            formData.append('apellido', document.getElementById("addApellidoUsuario").value);
            formData.append('telefono', document.getElementById('addTelefonoUsuario').value);
            formData.append('correo', document.getElementById('addCorreoUsuario').value);
            formData.append('estado', document.getElementById('addEstadoUsuario').value);
            formData.append('rol', document.getElementById('addRolUsuario').value);

            const imageInput = document.getElementById('addImageUsuario')
            if (imageInput.files.length > 0) {
                formData.append('addImageUsuario', imageInput.files[0]);
            }
            sendRequest("app/controllers/UsuarioController.php", "POST", formData, function (data) {
                console.log(typeof (data));
                if (data == 1) {
                    informativo("Se ha agregadp el usuario satisfactoriamente");
                    setTimeout(() => {
                        window.location.href = "index.php?p=admin";
                    }, 2000);
                } else {
                    informativo("Error al agregar el usuario");
                }
            })

        }
    })


    //editar usuario
    document.addEventListener("click", function (e) {

        if (e.target && e.target.id === "editarUsuario") {
            e.preventDefault();

            const formData = new FormData();
            formData.append('action', 'update');
            formData.append('id', document.getElementById('editIdUsuario').value);
            formData.append('nombre', document.getElementById('editNombreUsuario').value);
            formData.append('apellido', document.getElementById('editApellidoUsuario').value);
            formData.append('telefono', document.getElementById('editTelefonoUsuario').value);
            formData.append('correo', document.getElementById('editCorreoUsuario').value);
            formData.append('estado', document.getElementById('editEstadoUsuario').value);
            formData.append('rol', document.getElementById('editRolUsuario').value);

            //imagen
            const imageInput = document.getElementById('editImagenUsuario');
            if (imageInput.files.length > 0) {
                formData.append('editFotoUsuario', imageInput.files[0]);
            }


            sendRequest("app/controllers/UsuarioController.php", "POST", formData, function (data) {
                console.log(typeof (data));
                if (data.resultado) {
                    informativo("Se ha modificado el usuario satisfactoriamente");
                   
                    fetch('app/session/getSesion.php')
                        .then(res => res.json())
                        .then(sesion => {

                            console.log("Usuario en sesión:", sesion);
                            const idUsuarioSesion = sesion.id_usuario;
                            if (idUsuarioSesion == document.getElementById('editIdUsuario').value) {
                                const formData = new FormData();
                                formData.append('action', 'update');
                                formData.append('id', document.getElementById('editIdUsuario').value);
                                formData.append('nombre', document.getElementById('editNombreUsuario').value);
                                formData.append('apellido', document.getElementById('editApellidoUsuario').value);
                                formData.append('telefono', document.getElementById('editTelefonoUsuario').value);
                                formData.append('correo', document.getElementById('editCorreoUsuario').value);
                                formData.append('estado', document.getElementById('editEstadoUsuario').value);
                                formData.append('rol', document.getElementById('editRolUsuario').value);
                                if ( data.rutaImagen) {
                                    console.log( data.rutaImagen);
                                    formData.append('img_url', data.rutaImagen); 
                                }
                                sendRequest('app/session/updateSesion.php', "POST", formData, function(e){
                                    if(e == 1){
                                        console.log("exito");
                                    }else{
                                        console.log("fallo");
                                    }
                                })
                            }
                        });

                } else {
                    informativo("Error al modificar el usuario");
                }
            })

        }
    })

    // eliminar usuario
    document.addEventListener("click", function (e) {
        const btnEliminar = e.target.closest(".eliminarusuario");
      
        if (btnEliminar) {
            console.log(e.target.id)
            e.preventDefault();
            const formData = new FormData();
            const id = btnEliminar.getAttribute("data-id");
            formData.append('id', id);
            formData.append('action', 'delete');
            confirmar("¿Seguro que deseas eliminar este usuario?")
                .then(response => {
                    if (response) {

                        sendRequest("app/controllers/UsuarioController.php", "POST", formData, function (data) {
                            console.log(data);
                            if (data == 1) {
                                informativo("Se ha eliminado el usuario");
                                loadUsers();
                            } else {
                                informativo("Error al eliminar el usuario");
                            }
                        })
                    }
                });
        }
    })
    //login
    if (document.getElementById("login")) {
        document.getElementById("login").addEventListener("click", function (e) {
            e.preventDefault();
            const formData = new FormData();
            const correo = document.getElementById("loginEmail").value.trim();
            const password = document.getElementById('loginPassword').value.trim();
            if (correo != '' && password != '') {
                formData.append('action', 'login');
                formData.append('correo', correo);
                formData.append('password', password);
                sendRequest("app/controllers/UsuarioController.php", "POST", formData, function (data) {
                    console.log(data);
                    if (data != 0) {
                        window.location.href = "index.php?p=perfil"
                    } else {
                        informativo("Credenciales invalidas");
                    }

                })
            } else {
                informativo("Todos los campos son obligatorios intente de nuevo");
            }
        })
    }

    //registrarse
    if (document.getElementById("registrarse")) {

        document.getElementById("registrarse").addEventListener("click", function (e) {
            e.preventDefault();
            const formData = new FormData();
            const nombre = document.getElementById("registrarNombre").value.trim();
            const apellido = document.getElementById("registrarApellido").value.trim();
            const correo = document.getElementById("registrarEmail").value.trim();
            const password = document.getElementById("password").value.trim();
            const estado = document.getElementById("registrarEstado").value.trim();
            const rol = document.getElementById("registrarRol").value.trim();

            if (nombre != "" && apellido != "" && apellido != "" && correo != "" && password != "") {
                formData.append('nombre', nombre);
                formData.append('apellido', apellido);
                formData.append('correo', correo);
                formData.append('password', password);
                formData.append('estado', estado);
                formData.append('rol', rol);
                formData.append('action', 'registrar');
                sendRequest("app/controllers/UsuarioController.php", "POST", formData, function (data) {
                    console.log(data);
                    if (data == 1) {
                        informativo("Registro satisfactorio, ve a la pagina de login e inicia sesión");

                    } else {
                        informativo("Ocurrio un error en el registro en el sistema intente mas tarde");
                    }
                })
            } else {
                informativo("Todos los campos son obligatorios intente de nuevo");
            }
        })
    }

    if(document.getElementById("usuarios")){
        loadUsers();
    }
  
    //-------------------------- FIN USUARIO---------------------

    //-------------------------- ADOPCIONES ---------------------

    // mostrar adopciones 
    function mostrarAdopciones(){
        fetch("app/controllers/MascotaAdopcionController.php")
        .then(response => response.json())
        .then(data => {
            let contenido = "";
            let contenidoAdmin = "";
            const listAdopciones = document.getElementById("listAdopciones");
            const listAdopcionesAdmin = document.getElementById("listAdopcionesAdmin");

            if (data.length > 0) {
                data.forEach(a => {
                    console.log(a);
                    contenido += ` <div class="col-md-6 mb-4">
                                <div class="card border-custom p-3 d-flex flex-column align-items-center" style="width: 330px; height: 340px;">
                                    <img src="${a.imagenes[0]}" class="card-img-top" alt="Mascota" style="height: 150px; object-fit: cover; padding-top: 8px; padding-left: 8px; padding-right: 8px;">
                                    <div class="card-body text-start p-3 d-flex flex-column justify-content-between" style="width: 100%; height: 100%;">
                                        <div>
                                            <h5 class="text-dark m-0 mb-2">${a.nombre}</h5>
                                            <p class="card-text m-0 mb-3">${a.edad}</p>
                                        </div>
                                        <a href="index.php?p=detalleadopcion&id=${a.id_mascota_adopcion}" class="btn btn-publicar w-auto py-2 px-4 rounded-pill mt-auto">Ver más</a>
                                    </div>
                                </div>
                            </div>`;
                    contenidoAdmin += `<tr>
                        <td><img src="${a.imagenes[0]}" class="table-img text-center" alt=""> </td>
                        <td style="width: 600px;">
                            <p>${a.nombre}</p>
                            <p>
                                ${a.descripcion}
                            </p>
                        </td>
                        <td>12/02/2024</td>

                        <td class="text-center"><a href="index.php?p=editaranuncio&id=${a.id_mascota_adopcion}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="20px"><path fill="#176b87" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/></svg></a></td>
                        <td class="text-center"><a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="20px"><<path fill="#e44444" d="M135.2 17.7L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-7.2-14.3C307.4 6.8 296.3 0 284.2 0L163.8 0c-12.1 0-23.2 6.8-28.6 17.7zM416 128L32 128 53.2 467c1.6 25.3 22.6 45 47.9 45l245.8 0c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></a></td>
                    </tr>
`;
                });
            } else {
                contenido = `<p class="text-center">No hay adopciones disponibles</p>`;
                contenidoAdmin = `<p class="text-center">No hay adopciones disponibles</p>`;
            }
            if (listAdopciones) {
                listAdopciones.innerHTML = contenido;
            }
            if (listAdopcionesAdmin) {
                listAdopcionesAdmin.innerHTML = contenidoAdmin;
            }
        })
    }

    if(document.getElementById("listAdopciones") || document.getElementById("listAdopcionesAdmin")){
        mostrarAdopciones()
    }
});
