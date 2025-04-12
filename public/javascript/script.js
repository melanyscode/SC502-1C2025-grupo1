document.addEventListener("DOMContentLoaded", function () {
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
    function sendRequest(action, controller, data) {
        fetch("app/controllers/" + controller + ".php", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ action, ...data })
        })
        console.log(data);
    }


    //-------------------------- ADMIN USUARIO---------------------
    //llamada de usuario admin
    function loadUsers(){
        fetch("app/controllers/UsuarioController.php")
        .then(response => response.json())
        .then( data => {
            let contenido = "";
            const listUsuario = document.getElementById("usuarios");
            if(data.length > 0){
                data.forEach(u => {
                    console.log(u);
                    contenido += `<tr>
                        <th scope="row">${u.id_usuario}</th>
                        <td>${u.nombre}</td>
                        <td>${u.apellido}</td>
                        <td> ${u.correo}</td>
                        <td>${u.telefono}</td>
                        <td>${u.estado}</td>
                        <td>${u.rol}</td>
                        <td class="text-center"><a href="index.php?p=editarusuario&id=${u.id_usuario}" data-id="${u.id_usuario}">><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="20px">
                                    <path fill="#176b87" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
                                </svg></a></td>
                        <td class="text-center"><a href="edit" ">><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="20px">
                                    <<path fill="#e44444" d="M135.2 17.7L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-7.2-14.3C307.4 6.8 296.3 0 284.2 0L163.8 0c-12.1 0-23.2 6.8-28.6 17.7zM416 128L32 128 53.2 467c1.6 25.3 22.6 45 47.9 45l245.8 0c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                </svg></a></td>
                    </tr>`
                });
            }else{
                contenido = `<p class="text-center">No hay usuarios registrados</p>`;
            }
            listUsuario.innerHTML = contenido;
        })
    }
    document.addEventListener("click", function(e) {
        e.preventDefault();
        if(e.target && e.target.id === "editarUsuario"){
            const id = document.getElementById("editIdUsuario").value;
            const nombre = document.getElementById("editNombreUsuario").value;
            const apellido = document.getElementById("editApellidoUsuario").value;
            const telefono = document.getElementById("editTelefonoUsuario").value;
            const correo = document.getElementById("editCorreoUsuario").value;
            const estado = document.getElementById("editEstadoUsuario").value;
            const rol = document.getElementById("editRolUsuario").value;

            console.log(id);
            sendRequest("update", "UsuarioController", {
                id: id,
                nombre: nombre,
                apellido: apellido,
                telefono: telefono,
                correo: correo,
                estado: estado,
                rol: rol
            })
            alert("Se ha modificado el usuario");
        }
    })

      //-------------------------- ADMIN USUARIO---------------------
    loadUsers();


});
