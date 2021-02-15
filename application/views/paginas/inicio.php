  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Inicio
        <small>Panel de control</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-home"></i> Inicio</li> 
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $Sec->S?></h3>
              <p>Secretarías</p>
            </div>
            <div class="icon">
              <i class="fa fa-institution"></i>
            </div>
            <a href="<?php echo base_url()?>csecretarias" class="small-box-footer">Más Información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $Car->C?></h3>
              <p>Cargos</p>
            </div>
            <div class="icon">
              <i class="fa fa-suitcase"></i>
            </div>
            <a href="<?php echo base_url()?>ccargos" class="small-box-footer">Más Información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $Emp->E?></h3>
              <p>Empleados</p>
            </div>
            <div class="icon">
              <i class="fa fa-male"></i>
            </div>
            <a href="<?php echo base_url()?>cempleados" class="small-box-footer">Más Información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $Usu->U?></h3>
              <p>Usuarios</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="<?php echo base_url()?>cusuarios" class="small-box-footer">Más Información <i class="fa fa-arrow-circle-right"></i></a>
          </div> 
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  