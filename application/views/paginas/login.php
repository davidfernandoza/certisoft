<!DOCTYPE html>
<html>
<head> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CertiSoft| Ingreso</title>
  <!-- Tell the browser to be responsive to screen width -->
  <link rel="icon" href="<?php echo base_url()?>assets/logos/icon.ico">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/iCheck/square/blue.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/iCheck/all.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/select2/select2.min.css">
  <!-- folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">
</head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="box-body" align="center">
          <img  class="img-responsive pad" src="<?php echo base_url()?>assets/logos/logo_120.png" alt="Photo">
      </div>
      <div class="login-logo" align="center">
        <b><font color="#D5DAD6">CertiSoft</font></a>
      </div>
      <!-- /.login-logo --> 
      <div class="login-box-body">
        <h2 class="login-box-msg">Inicio de sesión</h2>
        <form id="formID" action="index.php/Clogin/autenticar" method="post" autocomplete="off">
          <div class="form-group has-feedback">
            <input type="text" class="form-control login-field"  placeholder="Usuario" name="usuario" required="">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control login-field" placeholder="Contraseña" name="contrasena" required="">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <!-- /.col -->
            <table align="center" class="table table-bordered text-center">
              <tr>
                <td>
                  <button type="submit" class="btn btn-block btn-success btn-sm" name="entrar" id="entrar">Entrar</button>
                </td>
              </tr>   
            </table>
          <!-- /.col -->
          </div>
        </form>
        <center><a href="<?php echo base_url()?>ccontrasena">Olvidé mi contrasena</a><br></center>
        
      </div>
      <br>
    <!-- /.login-box-body -->
    <?php
      if ($this->session->flashdata('Mensaje')) {
    ?>
    <div class="alert alert-danger alert-dismissible" align="center">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-ban"></i> Error!</h4>
       Usuario o Contraseña errados, o el usuario se encuentra inactivo. <br>Por favor comuniquese con nuestro administrador.
    </div>
    <?php
      }
    ?>
    </div>
    <!-- /.login-box -->
    <!-- jQuery 2.2.3 -->
    <script src="<?php echo base_url()?>plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url()?>assets/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>
  </body>
</html>



