  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Nuevo
        <small>salario</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>cinicio"><i class="fa fa-home"></i>Inicio</a></li>
        <li><a href="<?php echo base_url()?>cempleados">Empleados</a></li>
        <li><a href="<?php echo base_url()?>ccontratos?ide=<?php echo $ide?>&contratos=">Ingresos</a></li>
        <li class="active">Salarios</li>  
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
          Para ese año ya se ha asignado un salario y unos gastos de representación
        </div>
        <?php
          }
        ?>
        <div class="box box-header">
          <div class="box-header with-border">
          <div class="box-body"> 
            <form id="formID" role="form" action="cguardarsalario/guardar" method="get">
              <input type="hidden"  class="form-control" name="ide" value="<?php echo $ide ?>">
              <input type="hidden"  class="form-control" name="idc" value="<?php echo $idc ?>">
              <div class="form-group">
                <label class="control-label" for="inputError"></i>Año *</label>
                <input type="number" class="form-control" name="anio" required="" placeholder="Año ..." pattern="[0-9]{4,4}" title="El campo solo debe contener números" >
              </div>
              <div class="form-group">
                <label class="control-label" for="inputError"></i>Salario *</label>
                <input type="number"  class="form-control" name="salario" required="" placeholder="Salario ..." min="0">
              </div>
              <div class="form-group">
                <label class="control-label" for="inputError"></i>Gastos de representación </label>
                <input type="number"  class="form-control" name="gastos"  placeholder="Gastos de representación ..." min="0">
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
                      <form id="formID" role="form" action="cguardarsalario/cancel" method="get">
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

