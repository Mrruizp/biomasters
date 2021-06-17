$(function() {
    listarPromocion();

   
});

function listarPromocion() {
    $.post
            (
                    "../controlador/promocion.listar.controller.php"

                    ).done(function (resultado) {
        var datosJSON = resultado;

        if (datosJSON.estado === 200) {
            var html = "";
            html += '<section class="products-promotions-area pt-70 pb-50">';
            html += '  <div class="container">';
            html += '      <div class="row">';

            
            $.each(datosJSON.datos, function (i, item) {
              if(i<6 && item.estado == 1 ){

                if(i == 0 || i == 3){

                  html += '          <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">';
                  html += '              <div class="single-products-promotions-box">';
                  html += '                  <img src="fotos/promocion/' + item.promocion_id + '.png" alt="image" style="height: 500px; width: 500px">';
                  html += '                  <div class="content two">';
                  html += '                      <span class="sub-title">' + item.nombre + '</span>';
                  html += '                      <h3><a href="products-grid.html">' + item.descripcion + '</a></h3>';
                  
                  html += '                  </div>';
                  html += '              </div>';
                  html += '          </div>';
                  
                }else{
                  html += '          <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">';
                  html += '              <div class="single-products-promotions-box">';
                  html += '                  <img src="fotos/promocion/' + item.promocion_id + '.png" alt="image" style="height: 500px; width: 500px">';
                  html += '                  <div class="content">';
                  html += '                      <span class="sub-title">' + item.nombre + '</span>';
                  html += '                      <h3><a href="products-grid.html">' + item.descripcion + '</a></h3>';
                  
                  html += '                  </div>';
                  html += '              </div>';
                  html += '          </div>';
                }
              }  
                
            });
                html += '      </div>';
                html += '  </div>';
                html += '</section>';
          
                $("#listar_promocion").html(html);
        } else {
            swal("Mensaje del sistema", resultado , "warning");
        }

    }).fail(function (error) {
        var datosJSON = $.parseJSON(error.responseText);
        swal("Error", datosJSON.mensaje , "error"); 
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


 $(".link-producto-detalle").on('click', function(){ // editar
    let _id = $(this).data('id');
    //let _nombre = $(this).data('nombre');

    $.post
            (
                    "../controlador/producto.id.leer.datos.controller.php",
                    {
                        p_codProducto: _id
                    }
            ).done(function (resultado) {
        var jsonResultado = resultado;
        if (jsonResultado.estado === 200) {
           let _nombre = jsonResultado.datos.nombre;
           let _descripcion = jsonResultado.datos.descripcion;

           //theString = theString.replace(/%20/g, "");

           //let _url = "producto-detalle.php?Data1="+_id+"&Data2="+_nombre+"&Data3="+_descripcion;
           
           document.location.href = "producto-detalle.php?Data1="+_id+"&Data2="+_nombre+"&Data3="+_descripcion;
        }
    }).fail(function (error) {
        var datosJSON = $.parseJSON(error.responseText);
        swal("Error", datosJSON.mensaje, "error");
    });
    

    
})




