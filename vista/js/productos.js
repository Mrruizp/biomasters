$(document).ready(function() {
    
    listarProducto();

   
});

function listarProducto() {
    $.post
            (
                    "../controlador/producto.listar.controller.php"

                    ).done(function (resultado) {
        var datosJSON = resultado;

        if (datosJSON.estado === 200) {
            var html = "";
  
            $.each(datosJSON.datos, function (i, item) {
            
                
                
                

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
                
         
          
                $("#listar_producto").html(html);
        } else {
            swal("Mensaje del sistema", resultado , "warning");
        }

    }).fail(function (error) {
        var datosJSON = $.parseJSON(error.responseText);
        swal("Error", datosJSON.mensaje , "error"); 
    });
}



