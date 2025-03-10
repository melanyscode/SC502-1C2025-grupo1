document.addEventListener("DOMContentLoaded", function () {
    //variables
    let inputAdopciones = document.getElementById("inputAdopciones");
    let btnImgAdopciones = document.getElementById("btnImgAdopciones");
    const imgPreview = document.getElementById("imgpreview");
    

    if(btnImgAdopciones){
        cargarImagen(inputAdopciones, imgPreview, btnImgAdopciones);
    }

    
    //funciones
    //funcion para mostrar el preview de las imagenes
    function cargarImagen(input, imgField, btn){
        btn.addEventListener('click', function (e) {
            input.click();
        })
        input.addEventListener("change", function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.addEventListener("load", function () {
    
                    imgField.setAttribute("src", reader.result);
    
    
                })
                reader.readAsDataURL(file);
            }
        });
    }
});