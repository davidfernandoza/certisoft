  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Nuevo
        <small>ingreso</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>cinicio"><i class="fa fa-home"></i>Inicio</a></li>
        <li><a href="<?php echo base_url()?>cempleados">Empleados</a></li>
        <li class="active">Nuevo ingreso</li>  
      </ol>
    </section>

    <!-- Main content -->
    
    <section class="content">
      <div class="row">
      <div class="col-xs-12">
        <?php
          if ($this->session->flashdata('Mensaje')) {
        ?>
        <div class="alert alert-danger alert-dismissible" >
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-ban"></i> Error!</h4>
          El contrato que intenta almacenar ya se encuentra guardado en nuestra base de datos
        </div>
        <?php
          }
        ?>
        <div class="box box-header">
          <div class="box-header with-border">
          <div class="box-body"> 
            <form id="formID" role="form" action="cguardarcontrato/guardar" method="get">
              <input type="hidden"  class="form-control" name="ide" value="<?php echo $ide ?>">
              <div class="form-group">
                <label class="control-label" for="inputError"></i>Id Ingreso *</label>
                <input type="text" class="form-control" name="idc" required="" placeholder="Id Ingreso ...">
              </div>
              <div class="form-group">
                <label class="control-label" for="inputError"></i>Secretaría *</label>
                <select class="form-control" name="secretaria" id="secretaria" required="" >
                  <option>SELECCIONAR</option>
                  <?php
                    foreach ($secretarias as $item) {
                      echo "<option value='$item->idSecretaria'>$item->NombreS</option>";
                    }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <label class="control-label" for="inputError"></i>Cargo *</label>
                <select class="form-control" id="cargo" name="cargo" required="">
                </select>
              </div>
              <div class="form-group">
                <label class="control-label" for="inputError"></i>Fecha de inicio *</label>
                <input type="date" class="form-control" name="fi" required="" placeholder="Fecha de inicio ...">
              </div>
              <div class="form-group">
                <label class="control-label" for="inputError"></i>Fecha de culminación *</label>
                <input type="date" class="form-control" name="ff" required="" placeholder="Fecha de culminación ...">
              </div>
              <div class="form-group">
                <font size="2">Los campos marcados con (*) son obligatorios</font>
              </div>
              <div class="form-group">
                <table align="center" class="table table-bordered text-center">
                  <tr>
                    <td width="250">
                      <button type="submit" name="guardar" class="btn btn-block btn-success btn-lg">Guardar</button>
                      </form>
                    </td>
                    <td width="250">
                      <form id="formID" role="form" action="cguardarcontrato/cancel" method="get">
                        <button type="submit" name="cancelar" class="btn btn-block btn-danger btn-lg">Cancelar</button>
                      </form>  
                    </td>
                  </tr>
                </table>
              </div>
          </div>
        </div>
      </div>
    </section>
  </div>   
    
    <!-- /.content -->

