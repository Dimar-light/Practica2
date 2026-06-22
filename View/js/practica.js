$(document).ready(function () {
    $("#formRegistroCliente").validate({
        rules: {
            cedula: { required: true },
            nombre: { required: true },
            correo: { required: true, email: true }
        },
        messages: {
            cedula: { required: "La cédula es obligatoria." },
            nombre: { required: "El nombre completo es obligatorio." },
            correo: { 
                required: "El correo electrónico es obligatorio.",
                email: "Por favor, ingrese un formato de correo válido." 
            }
        },
        errorElement: "div",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".mb-3").append(error);
        },
        highlight: function (element) {
            $(element).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function (element) {
            $(element).addClass("is-valid").removeClass("is-invalid");
        }
    });

    $("#formRegistroMascota").validate({
        rules: {
            cedula: { required: true },
            nombre: { required: true },
            especie: { required: true },
            raza: { required: true },
            peso: { required: true, number: true }
        },
        messages: {
            cedula: { required: "Debe ingresar la cédula del dueño." },
            nombre: { required: "El nombre de la mascota es obligatorio." },
            especie: { required: "Especifique la especie (Ej: Perro, Gato)." },
            raza: { required: "La raza es obligatoria." },
            peso: { 
                required: "El peso es obligatorio.",
                number: "Ingrese un valor numérico válido." 
            }
        },
        errorElement: "div",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".mb-3").append(error);
        },
        highlight: function (element) {
            $(element).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function (element) {
            $(element).addClass("is-valid").removeClass("is-invalid");
        }
    });
});