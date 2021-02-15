
       

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1> 
          Usuarios
          <small>Listado</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url()?>cinicio"><i class="fa fa-home"></i> Inicio</a></li>
          <li class="active"> Usuarios</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Usuarios</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="table-responsive">
                  <table id="Usuarios" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Identificación</th>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>Teléfono</th>
                      <th>Correo electrónico</th>
                      <th>Rol</th>
                      <th>Estado</th>
                      <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($usuarios as $item):
                      ?>
                      <tr align="center">
                        <td><?php echo $item->idUsuarios; ?></td>
                        <td><?php echo $item->Nombre; ?></td>
                        <td><?php echo $item->Apellido; ?></td>
                        <td><?php echo $item->Telefono; ?></td>
                        <td><?php echo $item->Email; ?></td>
                        <td><?php echo $item->Rol; ?></td>
                        <td><?php echo $item->Estado; ?></td>
                        <td>
                          <form action="cactualizarusuario" method="get">
                            <input name="idUsuario" type="hidden" value="<?php echo $item->idUsuarios ?>" />
                            <button name="editar" id="editar" type="submit" class="btn btn-warning"><i class="fa fa-edit" title="Editar usuario">
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
    $(function tablau() {
      $("#Usuarios").DataTable();
      $('#example2').DataTable({
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
