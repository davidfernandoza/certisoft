
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GGejeApp | Olvido su contraseña</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
</head>
<body class="hold-transition lockscreen">

<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="<?php echo base_url()?>"><b><font color="#D5DAD6">CertiSoft</font></a>
  </div>
  <!-- User name -->
  <div class="lockscreen-name"><font color="#E7E7E7">Ingrese su correo</font></div>
  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <img src="<?php echo base_url()?>assets/ionicons/png/512/person.png" alt="User Image">
    </div>
    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials" action="ccontrasena/email" method="get">
      <div class="input-group">
        <input type="text" class="form-control" name="id" placeholder="Correo">
        <div class="input-group-btn">
          <button type="submit" name="enviar" class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->
  </div>
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
    <font color="#E7E7E7">Su contraseña será enviada a su correo en unos momentos</font>
  </div>
  <div class="text-center">
    <a href="<?php echo base_url()?>">Volver al inicio</strong></a><br><br>
  </div>
  <?php
    if ($this->session->flashdata('Mensaje')) {
  ?>
  <div class="alert alert-danger alert-dismissible" >
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h4><i class="icon fa fa-ban"></i> Error!</h4>
  El usuario ingresado no se encuentra registrado en nuestra base de datos
  </div>
  <?php
    }
  ?>
  <div class="text-center">
    <br>
  </div>
</div>
<!-- /.center -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url()?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
