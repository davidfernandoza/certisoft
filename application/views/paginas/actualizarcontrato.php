  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Actualizar
        <small>ingreso</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>cinicio"><i class="fa fa-home"></i>Inicio</a></li>
        <li><a href="<?php echo base_url()?>cempleados">Empleados</a></li>
        <li><a href="<?php echo base_url()?>ccontratos?ide=<?php echo $ide?>">Ingresos</a></li>
        <li class="active">Actualizar ingresos</li>  
      </ol>
    </section>

    <!-- Main content -->
    
    <section class="content">
      <div class="row">
      <div class="col-xs-12">
        <div class="box box-header">
          <div class="box-header with-border">
            Datos ingresos
          </div>
          <div class="box-body"> 
            <form id="formID" role="form" action="cactualizarcontrato/actualizar" method="get">
              <input type="hidden"  class="form-control" name="ide" value="<?php echo $ide ?>">
              <div class="form-group">
                <label class="control-label" for="inputError"></i>Id Ingresos *</label>
                <input type="text" class="form-control" name="idc" required="" placeholder="Id Ingresos ..." value="<?php echo $contrato->idCE?>">
              </div>
              <div class="form-group">
                <label class="control-label" for="inputError"></i>Secretaría *</label>
                <select class="form-control" name="secretaria" id="secretaria" required="" >
                  <option value="<?php echo $contrato->idSecretaria?>"><?php echo $contrato->NombreS?></option>
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
                  <option value="<?php echo $contrato->idCargo?>"><?php echo $contrato->NombreC?></option>
                </select>
              </div>
              <div class="form-group">
                <label class="control-label" for="inputError"></i>Fecha de inicio *</label>
                <input type="date" class="form-control" name="fi" required="" placeholder="Fecha de inicio ..." value="<?php echo $contrato->FechaInicio?>">
              </div>
              <div class="form-group">
                <label class="control-label" for="inputError"></i>Fecha de culminación *</label>
                <input type="date" class="form-control" name="ff" required="" placeholder="Fecha de culminación ..." value="<?php echo $contrato->FechaFin?>">
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
                      <form id="formID" role="form" action="cactualizarcontrato/cancel" method="get">
                        <input type="hidden"  class="form-control" name="ide" value="<?php echo $ide ?>">
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

