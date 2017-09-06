/**
 * Created by vaniusa on 26/07/17.
 */
// mostrar el formulario para insertar un nuevo producto
function nuevoProducto() {
    $(".caja").hide();
    $("#formdata").addClass("formdata_mostrar").show();
}



//  mostrando solo el producto selectionado
function mostrarProducto(idProducto) {
    $.ajax({
        type: "GET",
        url: "http://localhost:8000/product/" + idProducto,
        success: function (data) {
            $("div.caja").empty();

           var titulo = '<h3>Descripcion completa del producto <span id="subrallado">' + data.nombre + '</span></h3>'
            var tabla = '<table class="table table-striped"><thead><tr><th>Id</th><th>Nombre</th><th>Categoria</th><th>Precio</th></tr>' +
                '<tbody><tr><td>' + data.id + '</td><td>' + data.nombre + '</td><td>' + data.categoria + '</td><td>' + data.precio + '€</td></tr>' +
                "<tr><td colspan='4'>" + data.descripcion + "</td></tr><tr><td colspan='4'><button type='button' onclick='verProductos()' " +
                "class='btn btn-success glyphicon glyphicon-list-alt' aria-hidden='true'> Lista</button>&nbsp;&nbsp;<button type='button' onclick='editarProducto(" + data.id + ")' " +
                "class='btn btn-info glyphicon glyphicon-pencil' aria-hidden='true'></button>&nbsp;&nbsp;<button type='button' onclick='borrarProducto(" + data.id + ")' " +
                "class='btn btn-danger glyphicon glyphicon-trash' aria-hidden='true'></td></tr></tbody></table>";
            $('#caja').append(tabla).prepend(titulo);
        }
    });
}


// formulario de editar el producto selectionado
function editarProducto(idProducto) {
    $.ajax({
        type: "GET",
        url: "http://localhost:8000/product/" + idProducto,
        success: function (data) {
            $("div.caja").empty();
            $(".caja").show().addClass("mostrar_caja");
            var form = '<form method="put" id="editar_formulario" class="editarFormulario">' +
                '<h3>Editando el producto <span id="subrallado">' + data.nombre + '</span></h3>' +
                '<div class="form-group">' +
                '<label for="nombre">Nombre producto</label>' +
                '<input type="text" class="form-control required" name="nombre" id="nombre" value="' + data.nombre + '">' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="categoria">Categoria</label>' +
                '<input type="text" class="form-control" name="categoria" id="categoria" value="' + data.categoria + '">' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="descripcion">Descripcion del producto</label>' +
                '<textarea rows="4" cols="50"  class="form-control" name="descripcion" id="descripcion" >' + data.descripcion + '</textarea>' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="precio">Precio</label>' +
                '<input type="text" class="form-control" name="precio" id="precio" value="' + data.precio + '">' +
                '</div>' +
                '<button type="submit" class="btn btn-primary glyphicon glyphicon-floppy-disk">&nbsp;Actrualizar</button>' +
                "<button type='button' onclick='verProductos()' class='btn btn-success glyphicon glyphicon-list-alt' id='bottonLista'>&nbsp;Lista</button>" +
                '</form>';
            $('#caja').append(form);
            $("#editar_formulario").validate({
                rules: {
                    nombre: {
                        minlength: 3,
                        maxlength: 50,
                        required: true
                    },
                    categoria: {
                        minlength: 3,
                        maxlength: 50,
                        required: true
                    },
                    descripcion: {
                        minlength: 15,
                        required: true
                    },
                    precio: {
                        number: true,
                        min: 0,
                        required: true
                    }
                }, //cierre de rules
                messages: {
                    nombre: {
                        required: "Introduzca el Nombre del producto.",
                        minlength: "Minimo {0} caracteres.",
                        maxlength: "Maximo {0} caracteres."
                    },
                    categoria: {
                        required: "Introduzca el nombre de la Categoria.",
                        minlength: "Minimo {0} caracteres.",
                        maxlength: "Maximo {0} caracteres."
                    },
                    descripcion: {
                        required: "Introduzca una Descripcion.",
                        minlength: "Minimo {0} caracteres."
                    },
                    precio: {
                        required: "Pon un precio al producto.",
                        min: "Pon un numero pozitivo, no negativo.",
                        number: "Tiene que ser un numero, no una letra."
                    }
                }, // cierre de messages

                // actualizando el producto seleccionado
                submitHandler: function(form) {
                var datosFormulario = $(".editarFormulario").serialize();
                $.ajax({
                    type: "PUT",
                    url: "http://localhost:8000/product/" + idProducto,
                    data: datosFormulario,
                    success: function () {
                        verProductos();
                    }
                });
            }
            }); // termina validate
        }
    });
}




// borrar el producto selectionado
function borrarProducto(idProducto) {
    $("#"+idProducto).css({"background":"#BE080D", "color":"#FEFEFE"});
    $.ajax({
        type: "DELETE",
        url: "http://localhost:8000/product/" + idProducto,
        data: idProducto,
        success: function (response) {
            console.log(response)
            verProductos();
        },
        error: function (response) {
            console.log(response)
        }
    });
}

// muestra la tabla con todos los productos
function verProductos() {
    $.ajax({
        url: "http://localhost:8000/products",
        success: function (data) {
            $("#formdata").hide();
            $("div.caja").empty();
            $(".caja").show().addClass("mostrar_caja");
            var titulo = '<h3>Mostrando todos los productos</h3>'
            var tabla = '<table class="table"><thead><tr><th>Id</th><th>Nombre</th>' +
                "<th>Categoria</th><th>Descripcion</th><th>Precio</th><th class='glyphicon glyphicon-cog' aria-hidden='true'></th></tr></thead><tbody>";
                for (var i in data) {
                    tabla += "<tr id='" + data[i].id + "'><td>" + data[i].id + "</td><td>" + data[i].nombre + "</td><td>" + data[i].categoria + "</td><td>";
                    if (data[i].descripcion.length > 55) {
                        tabla += data[i].descripcion.substr(0, 55) + ' ...   <a style="cursor:pointer;" onclick="mostrarProducto(' + data[i].id + ')">Ver mas.</a>';
                    } else {
                        tabla += data[i].descripcion;
                    }
                    tabla += "</td><td>" + data[i].precio + "€</td><td>&nbsp;&nbsp;<button type='button' onclick='editarProducto(" + data[i].id + ")' " +
                        "class='btn btn-info glyphicon glyphicon-pencil' aria-hidden='true'></button>&nbsp;&nbsp;<button type='button' onclick='borrarProducto(" + data[i].id + ")' " +
                        "class='btn btn-danger glyphicon glyphicon-trash' aria-hidden='true'></td></tr>";
            }
            tabla += "<tfoot><tr><th>Id</th><th>Nombre</th>' " +
                "<th>Categoria</th><th>Descripcion</th><th>Precio</th><th><button type='button' onclick='nuevoProducto()' " +
                "class='btn btn-success glyphicon glyphicon-edit' aria-hidden='true'> Nuevo</button></th></tr></tfoot></tbody></table>";
            $('#caja').append(tabla).prepend(titulo);
            $("tr:odd").addClass("par");
        }
    });
}