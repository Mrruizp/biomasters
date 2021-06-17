
$(function() {
    
    var prodId = getParameterByName('Data1');
    var prodNombre = getParameterByName('Data2');
    var prodDescripcion = getParameterByName('Data3');

    LeerDatos_producto_detalle(prodId,prodNombre,prodDescripcion);
      listar();
});

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}


    function LeerDatos_producto_detalle(prodId,prodNombre,prodDescripcion) {
  

                document.getElementById("titulo_producto_detalle").innerHTML = prodNombre
                document.getElementById("producto_detalle_descripcion").innerHTML = prodNombre
                document.getElementById("ruta_producto_detalle").src = "fotos/productos/"+prodId+".png";
   

}

$("#frmgrabar").submit(function (event) {
    event.preventDefault();


                

                    var codDoctor = "";
                    if ($("#txtTipoOperacion").val() === "agregar") {
                        codDoctor = "0";
                    } else {
                        codDoctor = $("#txtCodigo").val();
                    }
                    $.post(
                            "../controlador/producto.detalle.agregar.controller.php",
                            {
                                p_nombre: $("#txtNombre").val(),
                                p_email: $("#txtEmail").val(),
                                p_comentario: $("#txtComentario").val()
                                
                            }
                    ).done(function (resultado) {
                        var datosJSON = resultado;

                        if (datosJSON.estado === 200) {
                            $("#txtNombre").val("");
                            $("#txtEmail").val("");
                            $("#txtComentario").val("");
                            listar();
                            alertify.success('Comentario enviado');
                            
                        }

                    }).fail(function (error) {
                        var datosJSON = $.parseJSON(error.responseText);
                        swal("Error", datosJSON.mensaje, "error");
                    });

              
         

});



function listar() {
    $.post
            (
                    "../controlador/comentario.listar.controller.php"

                    ).done(function (resultado) {
        var datosJSON = resultado;

        if (datosJSON.estado === 200) {
            var html = "";

            $.each(datosJSON.datos, function (i, item) {
                
                html +='<div class="user-review">';
                html +='                            <img alt="image" src="../images/user2.png">';
                html +='                                <span class="d-block sub-comment">'+item.nombre_cliente+'</span>';
                html +='                                <p>'+item.decripcion_comentario+'</p>';
                html +='                            </img>';
                html +='                        </div>';
            });


            $("#listado").html(html);

        } else {
            swal("Mensaje del sistema", resultado , "warning");
        }

    }).fail(function (error) {
        var datosJSON = $.parseJSON(error.responseText);
        swal("Error", datosJSON.mensaje , "error"); 
    });
}
