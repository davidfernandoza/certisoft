  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Salarios
        <small>Listado</small> 
      </h1>
      <ol class="breadcrumb">
        <?php if ($usuario=="ADMINISTRADOR"){?>
          <li><a href="<?php echo base_url()?>cinicio"><i class="fa fa-home"></i>Inicio</a></li>
          <li><a href="<?php echo base_url()?>cempleados">Empleados</a></li>
          <li><a href="<?php echo base_url()?>ccontratos?ide=<?php echo $ide?>">Ingresos</a></li>
          <li class="active">Salarios</li>
        <?php }else{ ?>
          <li><a href="<?php echo base_url()?>cinicio"><i class="fa fa-home"></i>Inicio</a></li>
          <li><a href="<?php echo base_url()?>ccontratos?ide=<?php echo $ide?>">Ingresos</a></li>
          <li class="active">Salarios</li>
        <?php } ?>  
      </ol>
    </section>

   <!-- Main content --> 
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Ingresos <?php echo $ide?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="Salarios" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Año</th>
                    <th>Salario</th>
                    <th>Gastos de representación</th>
                    <?php if ($usuario=="ADMINISTRADOR"){?>
                      <th>Acciones</th>
                    <?php } ?>  
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      foreach ($salarios as $item):
                    ?>
                    <tr align="center" height="25">
                      <td><?php echo $item->Anio ?></td>
                      <td><?php echo $item->Salario; ?></td>
                      <td><?php echo $item->GastosRepresentacion; ?></td>
                      <?php if ($usuario=="ADMINISTRADOR"){?>
                        <td>
                          <table>
                            <tr>
                              <td>
                                <form action="cactualizarsalario" method="get">
                                  <input type="hidden" name="idc" value="<?php echo $idc; ?>">
                                  <input type="hidden" name="ide" value="<?php echo $ide; ?>">
                                  <input type="hidden" name="anio" value="<?php echo $item->Anio ?>">
                                  <button name="editar" id="editar" type="submit" class="btn btn-warning margin"><i class="fa fa-edit"  title="Editar salario">
                                </form>
                              </td>
                              <td>
                                <form action="csalarios/eliminar" method="get">
                                  <input type="hidden" name="idc" value="<?php echo $idc; ?>">
                                  <input type="hidden" name="anio" value="<?php echo $item->Anio ?>">
                                  <input type="hidden" name="ide" value="<?php echo $ide ?>">
                                  <button name="eliminar" id="eliminar" type="submit" class="btn btn-danger margin"><i class="fa fa-trash"  title="Eliminar salario">
                                </form>
                              </td>
                            </tr>  
                          </table>
                        </td>
                      <?php } ?>  
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
    $("#Salarios").DataTable()({
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
