<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Biomaster's Medical</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include_once 'estilo.admin.view.php';?>
</head>
<style>

  #inicioSesion{
            padding: 90px 0px 190px 0px;
        }

</style>
<body class="hold-transition register-page" style="background-image: linear-gradient(to right, #4EAAF6 , #7FB7F3, #6C1FAB);">
<div class="login-box" id="inicioSesion">
  <!-- /.login-logo -->
  <div class="card"><br/>
    <div class="">
      <div class="login-logo">
          <img src="../images/4.jpeg" class="img img-responsive center-block" width="300px"><br/>
          <!--<img src="../images/user.png" class="img img-responsive center-block" width="50">-->
      </div>
        <div class="card-body login-card-body" style="display:block;" id = "iniciarSesion">
          <div class="card-body login-card-body">

            <form id="frmgrabar">
              <div class="input-group mb-3">
                <input type="email" class="form-control" id = "txtEmail" name = "txtEmail" placeholder="Email" required="true">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" id = "txtClave" name = "txtClave"  placeholder="Password" required="true">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>

              <div class="row">
                <!-- /.col -->
                <div class="col-12">
                  <button type="submit" class="btn btn-info btn-block btn-info">Iniciar sesión</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
          </div>
        </div>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->



<!-- ./wrapper -->
<?php include_once 'scripts.admin.view.php';?>
<script src="js/sesionValidar.js" type="text/javascript"></script>
<!--<script src="js/index.js" type="text/javascript"></script>
<script src="js/cbCodigo.js" type="text/javascript"></script>-->
</body>
</html>
