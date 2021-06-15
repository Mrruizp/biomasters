$(document).ready(function() {
    
   //let idtipo		= getQueryVariable('tipo');
   //let idcategoria 	= getQueryVariable('categoria');
   let idtipo = getQueryVariable('tipo');
   let idcategoria = getQueryVariable('categoria');

   producto_tipo_categoria(idtipo, idcategoria);
});


function getQueryVariable(variable) {
        // Estoy asumiendo que query es window.location.search.substring(1);
        var query = window.location.search.substring(1);
        var vars = query.split("?");
       //alert(vars);
        for (var i=0; i < vars.length; i++) {
            var pair = vars[i].split("="); 
            if (pair[0] == variable) {
                return pair[1];
            }
        }
        return false;
    }

function producto_tipo_categoria(idtipo, idcategoria) {
    $.post
            (
                    "../controlador/producto.listarCatalogo.controller.php",
                    {
                        p_idtipo: idtipo,
                        p_idcategoria: idcategoria
                    }
                    
                    ).done(function (resultado) {
        var datosJSON = resultado;

        if (datosJSON.estado === 200) {
            var html = "";
            html += '<div class="container">';
            $.each(datosJSON.datos, function (i, item) {
            html += '<div class="row">'    
            html += '	<div class="col-lg-3 col-md-4 col-sm-6">';
            html += '                <div class="single-products-box">';
            html += '                    <div class="image">';
            html += '                        <a class="d-block" href="products-details.html">';
            html += '                            <img alt="image" src="fotos/productos/' + item.producto_id + '.png"/>';
            html += '                        </a>';

            html += '                        <ul class="buttons-list">';

            html += '                            <li>';
            html += '                                <a data-target="#productsQuickView" data-toggle="modal" href="#">';
            html += '                                    <i class="bx bx-search-alt">';
            html += '                                    </i>';
            html += '                                    <span class="tooltip-label">';
            html += '                                        Vista rápida';
            html += '                                    </span>';
            html += '                                </a>';
            html += '                            </li>';
            html += '                        </ul>';
            html += '                    </div>';
            html += '                    <div class="content">';

            html += '                        <h3>';
            html += '                            <a href="products-details.html">';
            html += '                                Blood Glucose Meter';
            html += '                            </a>';
            html += '                        </h3>';

            html += '                    </div>';
            html += '                </div>';
            html += '            </div>';
            html += '</div>';
                
            });
            html += '</div>';
                
         
          
                $("#lista_producto_tipo_catalogo").html(html);
        }else{

        }

    }).fail(function (error) {
        var datosJSON = $.parseJSON(error.responseText);
        //swal("Error", datosJSON.mensaje , "error"); 
    });
}

function leerDatos(codProducto) {
    $.post
            (
                    "../controlador/producto.id.leer.datos.controller.php",
                    {
                        p_codProducto: codProducto
                    }
            ).done(function (resultado) {
        var jsonResultado = resultado;
        if (jsonResultado.estado === 200) {
            document.getElementById("titulo_producto").innerHTML = jsonResultado.datos.nombre;
            document.getElementById("decripcion_producto").innerHTML = jsonResultado.datos.descripcion;
            document.getElementById("ruta_producto").src = "fotos/productos/"+codProducto+".png";
            
        }
    }).fail(function (error) {
        var datosJSON = $.parseJSON(error.responseText);
        swal("Error", datosJSON.mensaje, "error");
    });
}