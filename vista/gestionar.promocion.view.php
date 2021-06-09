<?php
require_once 'validar.datos.sesion.view.php';
//$_POST["s_usuario"] = $dniSesion;

require_once '../controlador/perfil.usuario.leer.datos.controller.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <link href="../images/logo.png" rel="icon">
                    <title>
                        Biomaster's Medical
                    </title>
                    <!-- Tell the browser to be responsive to screen width -->
                    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
                        <?php include_once 'estilo.admin.view.php';?>
                    </meta>
                </link>
            </meta>
        </meta>
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
                                <h1>
                                    Módulo Promoción
                                </h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item">
                                        <a href="menu.principal.view.php">
                                            Inicio
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        Módulo Promoción
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
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
                                        <h3 class="card-title">
                                            Promoción
                                        </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body">
                                        <div class="form-group">
                                            <button class="btn btn-outline-info btn-sm" data-target="#myModal" data-toggle="modal" id="btnagregar" type="button">
                                                <ion-icon name="cart">
                                                </ion-icon>
                                                Agregar Promoción
                                            </button>
                                        </div>
                                        <div class="form-group">
                                            <div class="table table-responsive" id="listado">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>
                </section>
                <form action="../controlador/promocion.registrar.controller.php" class="form-horizontal" enctype="multipart/form-data" method="POST" role="form">
                    <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header bg-info">
                                    <h4 class="modal-title" id="titulomodalDoctor">
                                        Registrar Promoción
                                    </h4>
                                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                        <span aria-hidden="true">
                                            ×
                                        </span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <input id="textCod_prom" name="textCod_prom" type="hidden">
                                                <p>
                                                    Nombre
                                                    <textarea class="form-control input-sm" id="txtNombre" name="txtNombre" required="" rows="4" type="text">
                                                    </textarea>
                                                </p>
                                            </input>
                                        </div>
                                        <div class="col-6">
                                            <p>
                                                Descripción
                                                <textarea class="form-control input-sm" id="txtDescripcion" name="txtDescripcion" required="" rows="4">
                                                </textarea>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>
                                                Estado
                                                <select class="form-control input-sm" id="txtEstado" name="txtEstado" required="">
                                                    <option value="">
                                                        -
                                                    </option>
                                                    <option value="1">
                                                        Activo
                                                    </option>
                                                    <option value="2">
                                                        Inactivo
                                                    </option>
                                                </select>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <section class="card-body d-flex justify-content-between align-items-center thumbnail" id="file-preview-zone" name="file-preview-zone">
                                            </section>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card-body d-flex justify-content-between align-items-center input-group" id="foto_id" name="foto_id">
                                                <label class="input-group-btn">
                                                    <span class="btn btn-info">
                                                        <i class="fa fa-camera">
                                                        </i>
                                                        <input accept="image/png,image/jpeg,image/jpg" id="file-upload" multiple="" name="file-upload" style="display: none;" type="file">
                                                        </input>
                                                    </span>
                                                </label>
                                                <input class="form-control" id="p_foto" name="p_foto" readonly="" type="text">
                                                </input>
                                            </div>
                                            <span class="help-block">
                                                Seleccione una foto
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button aria-hidden="true" class="btn btn-primary" type="submit">
                                        <i class="fa fa-save">
                                        </i>
                                        Guardar Foto
                                    </button>
                                    <button class="btn btn-danger" data-dismiss="modal" id="btncerrar" type="button">
                                        <i class="fa fa-close">
                                        </i>
                                        Cerrar
                                    </button>
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
            <div class="control - sidebar - bg">
            </div>
        </div>
        <!-- ./wrapper -->
        <?php include_once 'scripts.admin.view.php';?>
        <script src="js/gestionarPromocion.js" type="text/javascript">
        </script>
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