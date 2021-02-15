

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cargos
        <small>Listado</small> 
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>cinicio"><i class="fa fa-home"></i>Inicio</a></li>
        <li class="active">Cargos</li>
      </ol>
    </section>

   <!-- Main content --> 
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Cargos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="Cargos" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Cargo</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Secretaría</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      foreach ($cargos as $item):
                    ?>
                    <tr align="center" height="25">
                      <td><?php echo $item->idCargo ?></td>
                      <td><?php echo $item->NombreC; ?></td>
                      <td><?php echo $item->DescripcionC; ?></td>
                      <td><?php echo $item->NombreS; ?></td>
                      <td>
                        <form action="cactualizarcargo" method="get">
                          <input type="hidden" name="idc" value="<?php echo $item->idCargo; ?>">
                          <button name="editar" id="editar" type="submit" class="btn btn-warning"><i class="fa fa-edit"  title="Editar cargo">
                        </form>
                      </td>
                    <?php endforeach;
                    ?>
                  </tbody>
                </table>
              </div>  
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer" >
  <center>
    <div class="form-group">
      <table aling="center">
        <tr>
          <td width="180">
            <a href="http://www.mintic.gov.co/"><img class="img-responsive" src="<?php echo base_url()?>assets/logos/mintic_160.png" alt="Photo">
          </td></a>
          <td width="180">
            <a href="http://estrategia.gobiernoenlinea.gov.co/"><img class="img-responsive" src="<?php echo base_url()?>assets/logos/GobiernoEnLinea_160.png" alt="Photo"></a>
          </td>
          <td width="180">
            <a href="http://www.santarosadecabal-risaralda.gov.co/"><img class="img-responsive" src="<?php echo base_url()?>assets/logos/alcaldia_100.png" alt="Photo"></a>
          </td>
          <td width="180">
            <a href="http://www.prosperidadsocial.gov.co/"><img class="img-responsive" src="<?php echo base_url()?>assets/logos/logo_prosperidad_para_todos_160.png" alt="Photo">
          </td></a>
          <td width="180">
            <a href="https://www.dnp.gov.co/"><img class="img-responsive" src="<?php echo base_url()?>assets/logos/todosporunnuevopais_160.png" alt="Photo"></a>
          </td>
        </tr>
      </table>
    </div>
    <div class="pull-right hidden-xs">
      <b>Versión</b> 1.0.0
    </div>
  </center>
</footer>

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url()?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url()?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#Cargos").DataTable()({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
