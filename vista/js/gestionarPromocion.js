$(function() {
    listar();
   
});

function listar() {
    $.post
            (
                    "../controlador/promocion.listar.controller.php"

                    ).done(function (resultado) {
        var datosJSON = resultado;

        if (datosJSON.estado === 200) {
            var html = "";

            html += '<small>';
            html += '<table id="tabla-listado" class="table table-bordered table-striped">';
            html += '<thead>';
            html += '<tr style="background-color: #ededed; height:25px;">';
            html += '<th style="text-align: center; width:20px">CODIGO</th>';
            html += '<th style="text-align: center; width:80px"">IMAGEN</th>';
            html += '<th style="text-align: center">NOMBRE</th>';
            html += '<th style="text-align: center">DESCRIPCIÓN</th>';
            html += '<th style="text-align: center">ESTADO</th>';
            html += '<th style="text-align: center; width:120px"">PROMOCIÓN</th>';
            html += '</tr>';
            html += '</thead>';
            html += '<tbody>';

            //Detalle
            $.each(datosJSON.datos, function (i, item) {
                html += '<tr>';
                html += '<td align="center" style="font-weight:normal">' + item.promocion_id + '</td>';
                html += '<td align="center"><img src="fotos/promocion/'+ item.promocion_id +'.png" style="width: 100px; height: 100px;"/></td>';
                html += '<td align="center" style="font-weight:normal">' + item.nombre + '</td>';
                html += '<td align="center" style="font-weight:normal">' + item.descripcion + '</td>';
                if(item.estado == '1')
                    html += '<td align="center" style="font-weight:normal">Activo</td>';
                if(item.estado == '2')
                    html += '<td align="center" style="font-weight:normal">Inactivo</td>';
                html += '</td>';
                html += '<td align="center">';
                
                html += '<button type="button" title="Editar" class="btn btn-default btn-xs" data-toggle="modal" data-target="#myModal" onclick="leerDatos(' + item.promocion_id + ')"><ion-icon name="create-outline"></ion-icon></button>';
                html += '&nbsp;&nbsp;'
                html += '<button type="button" title="Eliminar" class="btn btn-danger btn-xs" onclick="eliminar(' + item.promocion_id + ')"><ion-icon name="trash-sharp"></ion-icon></button>';
                html += '</td>';
                html += '</tr>';
            });

            html += '</tbody>';
            html += '</table>';
            html += '</small>';

            $("#listado").html(html);


            $('#tabla-listado').dataTable({
                "aaSorting": [[1, "asc"]]
            });



        } else {
            swal("Mensaje del sistema", resultado , "warning");
        }

    }).fail(function (error) {
        var datosJSON = $.parseJSON(error.responseText);
        swal("Error", datosJSON.mensaje , "error"); 
    });
}

function leerDatos(promocion_id) {

    let filePreview = "";
    let previewZone = "";
    $.post
            (
                    "../controlador/promocion.leer.datos.controller.php",
                    {
                        p_promocion_id: promocion_id
                    }
            ).done(function (resultado) {
        var jsonResultado = resultado;
        if (jsonResultado.estado === 200) {
            $("#txtNombre").val(jsonResultado.datos.nombre);
            $("#txtDescripcion").val(jsonResultado.datos.descripcion);
            $("#txtEstado").val(jsonResultado.datos.estado);
            $("#textCod_prom").val(jsonResultado.datos.promocion_id);

            $("#p_foto").val(jsonResultado.datos.promocion_id+".png");

            //$("#file-preview-zone").val("view");
            

            filePreview = document.createElement("img");
            filePreview.src = "fotos/promocion/"+jsonResultado.datos.promocion_id+".png";

            previewZone = document.getElementById('file-preview-zone');
            filePreview.width = '300';

            while (previewZone.firstChild) {
                previewZone.removeChild(previewZone.firstChild);
            }
            previewZone.appendChild(filePreview);


            $("#titulomodal").html("Modificar datos de Promoción");
        }
    }).fail(function (error) {
        var datosJSON = $.parseJSON(error.responseText);
        swal("Error", datosJSON.mensaje, "error");
    });
}



function eliminar(promocion_id) {
    swal({
        title: "Confirme",
        text: "¿Esta seguro de eliminar el registro seleccionado?",
        showCancelButton: true,
        confirmButtonColor: '#d93f1f',
        confirmButtonText: 'Si',
        cancelButtonText: "No",
        closeOnConfirm: false,
        closeOnCancel: true,
        imageUrl: "../images/eliminar2.png"
    },
            function (isConfirm) {
                if (isConfirm) {
                    $.post(
                            "../controlador/promocion.eliminar.controller.php",
                            {
                                p_promocion_id: promocion_id
                            }
                    ).done(function (resultado) {
                        var datosJSON = resultado;
                        if (datosJSON.estado === 200) { //ok
                            listar();
                            swal("Exito", datosJSON.mensaje, "success");
                        }

                    }).fail(function (error) {
                        var datosJSON = $.parseJSON(error.responseText);
                        swal("Error", datosJSON.mensaje, "error");
                    });

                }
            });

}

