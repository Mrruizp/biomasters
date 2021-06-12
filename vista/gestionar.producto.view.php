<?php
require_once 'validar.datos.sesion.view.php';
//$_POST["s_usuario"] = $dniSesion;

require_once '../controlador/perfil.usuario.leer.datos.controller.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" href="../images/logo.png">
        <title> Biomaster's Medical</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php include_once 'estilo.admin.view.php';?>
    </head>

    <body class="hold-transition skin-purple-light sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">

            <?php include_once './menu-arriba.admin.view.php';?>

            <!-- =============================================== -->

            <!-- Left side column. contains the sidebar -->
            <?php include_once 'menu-izquierda.admin.view.php';?>

            <!-- =============================================== -->

            <!-- Content Wrapper. Contains page content -->
            <!-- Content Wrapper. Contains page content -->

            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <div class="container-fluid">
                    <div class="row mb-2">
                      <div class="col-sm-6">
                        <h1>Módulo Producto</h1>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="menu.principal.view.php">Inicio</a></li>
                          <li class="breadcrumb-item active">Módulo Producto</li>
                        </ol>
                      </div>
                    </div>
                  </div><!-- /.container-fluid -->
                </section>
                <!-- Main content -->
                <section class="content">
                  <div class="container-fluid">
                    <div class="row">
                      <!-- left column -->
                      <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-default">
                          <div class="card-header">
                            <h3 class="card-title">Producto</h3>
                          </div>
                          <!-- /.card-header -->
                          <!-- form start -->

                            <div class="card-body">
                              <div class="form-group">
                                <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#myModal" id="btnagregar"><ion-icon name="cart"></ion-icon> Agregar Producto</button>
                              </div>
                              <div class="form-group">
                               <div id="listado" class="table table-responsive"></div>

                              </div>
                            </div>

                        </div>
                        <!-- /.card -->
                            </div>
                        </div>
                    </div>

              </section>
              <form  role="form" enctype="multipart/form-data" action="../controlador/producto.registrar.controller.php"  class="form-horizontal" method="POST">
                <div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header bg-info">
                        <h4 class="modal-title" id = "titulomodalDoctor">Registrar Producto</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                      </div>
                      <div class="modal-body">
                        <div class="row">

                          </div>
                          <div class="row">
                            <div class="col-6">
                              <input type="hidden" id="textCod_prod" name="textCod_prod">
                                <p>
                                    Nombre <textarea rows= "4" type="text"
                                                  name="txtNombre"
                                                  id="txtNombre"
                                                  class="form-control input-sm" required>
                                            </textarea>
                                </p>
                            </div>
                            <div class="col-6">
                                <p>

                                    Descripción<textarea
                                                  name="txtDescripcion" rows= "4"
                                                  id="txtDescripcion"
                                                  class="form-control input-sm" required>
                                                </textarea>
                                </p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6">
                                <p>

                                    Estado
                                    <select class="form-control input-sm" name="txtEstado" id="txtEstado" required>
                                      <option>-</option>
                                      <option value="1">Más Vendido</option>
                                      <option value="2">Los recién llegados</option>
                                      <option value="3">Normal</option>
                                    </select>
                                </p>
                            </div>
                            <div class="col-6">
                                <p>
                                    categoria
                                    <select class="form-control input-sm" id="txtCategoria" name="txtCategoria" required="">
                                        <option>-</option>
                                        <option value="1">Veterinaria</option>
                                        <option value="2">Coagulación</option>
                                        <option value="3">Bioquímica</option>
                                        <option value="4">Cadena de Frío</option>
                                        <option value="5">Hematología</option>
                                        <option value="6">Equipamiento</option>
                                        <option value="7">Inmunología</option>
                                        <option value="8">Repuestos</option>
                                        <option value="9">Gass y Electrolitos</option>
                                    </select>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p>
                                    Tipo
                                    <select class="form-control input-sm" id="txtTipo" name="txtTipo" required="">
                                        <option>-</option>
                                        <option value="1">Analizadores</option>
                                        <option value="2">Controles y calibradores</option>
                                        <option value="3">Reactivos Hematológicos</option>
                                        <option value="4">Reactivos</option>
                                        <option value="5">Pruebas Rápidas</option>
                                        <option value="6">Reactivos de Eliza</option>
                                    </select>
                                </p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6">
                                <section id="file-preview-zone" name="file-preview-zone"
                                class="card-body d-flex justify-content-between align-items-center thumbnail">

                                </section>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div id="foto_id" name="foto_id"
                                class="card-body d-flex justify-content-between align-items-center input-group">
                                    <label class="input-group-btn">
                                        <span class="btn btn-info">
                                           <i class="fa fa-camera"></i>
                                           <input type="file" style="display: none;" multiple="" accept="image/png,image/jpeg,image/jpg" id="file-upload" name="file-upload">
                                        </span>

                                      </label>
                                      <input style="margin-top: -8px;" type="text" id="p_foto" name="p_foto" class="form-control" readonly>
                                </div>
                                <span class="help-block">
                                Seleccione una foto
                                </span>
                            </div>

                        </div>

                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" aria-hidden="true"><i class="fa fa-save"></i> Guardar Foto</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal" id="btncerrar"><i class="fa fa-close"></i> Cerrar</button>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
              </form>

              </div>
            <?php include_once 'pie.admin.view.php';?>
            <!-- /.control-sidebar -->
            <div class="control - sidebar - bg"></div>

        </div>
        <!-- ./wrapper -->
        <?php include_once 'scripts.admin.view.php';?>
        <script src="js/gestionarProducto.js" type="text/javascript"></script>

        <script>
            $(function() {

          // We can attach the `fileselect` event to all file inputs on the page
          $(document).on('change', ':file', function() {
            var input = $(this),
                numFiles = input.get(0).files ? input.get(0).files.length : 1,
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [numFiles, label]);
          });

          // We can watch for our custom `fileselect` event like this
          $(document).ready( function() {
              $(':file').on('fileselect', function(event, numFiles, label) {

                  var input = $(this).parents('.input-group').find(':text'),
                      log = numFiles > 1 ? numFiles + ' files selected' : label;

                  if( input.length ) {
                      input.val(log);
                  } else {
                      if( log ) alert(log);
                  }

              });

              function readFile(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        var filePreview = document.createElement('img');
                        filePreview.id = 'file-preview';



                        //e.target.result contents the base64 data from the image uploaded
                        filePreview.src = e.target.result;
                        console.log(e.target.result);

                        var previewZone = document.getElementById('file-preview-zone');
                        filePreview.width = '300';

                        // mientras exista un nodo (imagen) lo va a remover para que el segundo nodo (imagen) se muestre.
                        while (previewZone.firstChild) {
                          previewZone.removeChild(previewZone.firstChild); // remueve el primer nodo (imagen)
                        }

                        previewZone.appendChild(filePreview);

                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            var fileUpload = document.getElementById('file-upload');
            fileUpload.onchange = function (e) {
                readFile(e.srcElement);
            }
          });

        });

        </script>
    </body>
</html>