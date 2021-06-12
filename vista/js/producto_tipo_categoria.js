$(document).ready(function() {
    
   //let idtipo		= getQueryVariable('tipo');
   //let idcategoria 	= getQueryVariable('categoria');
   let idtipo = getQueryVariable('tipo');
   let idcategoria = getQueryVariable('categoria');

   listarLosMasVendidos(idtipo, idcategoria);
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

function listarLosMasVendidos(idtipo, idcategoria) {
    $.post
            (
                    "../controlador/producto.listarCatalogo.controller.php"

                    ).done(function (resultado) {
        var datosJSON = resultado;

        if (datosJSON.estado === 200) {
            var html = "";
  
            $.each(datosJSON.datos, function (i, item) {
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
                
                
                

                html += '<div class="single-products-box">';
                html += '   <div class="image">';
                html += '                        <a href="products-details.html" class="d-block">';
                html += '                           <img src="fotos/productos/' + item.producto_id + '.png" alt="image">';
                html += '                        </a>';
                html += '       <div class="new">New</div>';
                html += '       <ul class="buttons-list">';
                html += '           <li>';
                html += '               <a href="#" data-toggle="modal" data-target="#productsQuickView">';
                html += '                   <i class="bx bx-search-alt"></i>';
                html += '                   <span class="tooltip-label">Quick View</span>';
                html += '               </a>';
                html += '           </li>';
                html += '       </ul>';
                html += '   /div>';
                html += '</div>';
              
            });
                
         
          
                $("#listar_LosMasVendidos").html(html);
        } else {
            swal("Mensaje del sistema", resultado , "warning");
        }

    }).fail(function (error) {
        var datosJSON = $.parseJSON(error.responseText);
        swal("Error", datosJSON.mensaje , "error"); 
    });
}