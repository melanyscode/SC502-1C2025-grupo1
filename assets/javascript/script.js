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
    console.error("❌ No hay la misma cantidad de inputs, botones y previews en el HTML");
}

    //funciones
    function cargarImagen(input, imgField, btn){
       
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
});