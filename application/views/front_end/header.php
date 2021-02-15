 <!DOCTYPE html>
<html>
<head> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CertiSoft | <?php echo $NomP ?></title>
  <link rel="icon" href="<?php echo base_url()?>assets/logos/icon.ico">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css" type="text/css" >
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css" type="text/css" >
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/ionicons/css/ionicons.min.css" type="text/css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css" type="text/css" >
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css" type="text/css" >
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/iCheck/flat/blue.css" type="text/css" >
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/morris/morris.css" type="text/css" >
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css" type="text/css" >
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/datepicker/datepicker3.css" type="text/css" >
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/daterangepicker/daterangepicker.css" type="text/css" >
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" type="text/css" >
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/datatables/dataTables.bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/jQueryValidationEngineMaster/css/validationEngine.jquery.css" type="text/css"/>
  <link rel="stylesheet" href="<?php echo base_url()?>assets/jQueryValidationEngineMaster/css/template.css" type="text/css"/>
  <script src="<?php echo base_url()?>assets/jQueryValidationEngineMaster/js/jquery-1.8.2.min.js" type="text/javascript">
  </script>
  <script src="<?php echo base_url()?>assets/jQueryValidationEngineMaster/js/languages/jquery.validationEngine-es.js" type="text/javascript" charset="utf-8">
  </script>
  <script src="<?php echo base_url()?>assets/jQueryValidationEngineMaster/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
  </script>
  <script>
    jQuery(document).ready(function(){
      // binds form submission and fields to the validation engine
      jQuery("#formID").validationEngine();
    });
            
  </script>
  <script>
    jQuery(document).ready(function(){
      // binds form submission and fields to the validation engine
      jQuery("#formID").validationEngine('attach', {bindMethod:"live"});
    });
  </script>

  <script type="text/javascript" src="<?php echo base_url()?>assets/jQueryValidationEngineMaster/js/jquery-1.8.2.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $("#secretaria").change(function() {
      $("#secretaria option:selected").each(function() {
        secretaria = $('#secretaria').val();
        $.post("<?php echo base_url();?>Cguardarcontrato/llena_cargos", {
          secretaria : secretaria
        }, function(data) {
          $("#cargo").html(data);
        });
      });
    })
  });
</script>
</script>
<!--
<style type="text/css">
  .main-footer{
    background-color: #222d32;
  }
  #link_bar a:link { color:#cfcfcf;  }
  #link_bar a:visited { color:#c0c0c0;  }
  #link_bar a:hover {text-decoration: underline; color:#ffffff;  }
  #link_bar a:active { color:#f0f0f0; }
</style> -->

</head>
<!-- Aqui se define el color del skin -->
<body class="hold-transition skin-green sidebar-mini" >
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="<?php echo base_url()?>cinicio" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>C</b>S</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>CertiSoft</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
           
              <?php 
                $Nom = $this->session->userdata('Nombre');
                $Rol = $this->session->userdata('Rol');
              ?>
              <i class="fa fa-user"></i>
              <span class="hidden-xs"><strong><?php echo $Nom;?></strong></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <p><br><br>
                  <?php echo $Nom;?><br><small><?php echo $Rol;?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url()?>cperfil" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url()?>clogin/Salir" class="btn btn-default btn-flat">Cerrar Sesión</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel" align="center">
        <br>
          <a href="<?php echo base_url()?>cinicio"><img  class="img-responsive pad" src="<?php echo base_url()?>assets/logos/logo_120.png" alt="Photo"></a>
      </div>
      <!-- search form -->
      