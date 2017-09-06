$(document).ready(function() {
    $("#formdata").validate({
        rules:{
            nombre:{
                minlength: 3,
                maxlength: 50,
                required: true
            },
            categoria:{
                minlength: 3,
                maxlength: 50,
                required:true
            },
            descripcion:{
                minlength: 15,
                required:true
            },
            precio:{
                number:true,
                min: 0,
                required:true
            }
        }, //cierre de rules
        messages:{
            nombre:{
                required:"Introduzca el Nombre del producto.",
                minlength: "Minimo {0} caracteres.",
                maxlength: "Maximo {0} caracteres."
            },
            categoria:{
                required:"Introduzca el nombre de la Categoria.",
                minlength: "Minimo {0} caracteres.",
                maxlength: "Maximo {0} caracteres."
            },
            descripcion:{
                required:"Introduzca una Descripcion.",
                minlength: "Minimo {0} caracteres."
            },
            precio:{
                required:"Pon un precio al producto.",
                min: "Pon un numero pozitivo, no negativo.",
                number: "Tiene que ser un numero, no una letra."
            }
        }, // cierre de messages

        //insertamos el producto a la base de datos
        submitHandler: function(form) {
            $.post("http://localhost:8000/product",
                $("#formdata").serialize(),
                function () {
                    $("#formdata")[0].reset();
                    verProductos();
                }
            );
        }
    }); // termina validate

});

