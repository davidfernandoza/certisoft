  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Actualizar
        <small>Salario</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>cinicio"><i class="fa fa-home"></i>Inicio</a></li>
        <li><a href="<?php echo base_url()?>cempleados">Empleados</a></li>
        <li><a href="<?php echo base_url()?>ccontratos?ide=<?php echo $ide?>">Ingresos</a></li>
        <li><a href="<?php echo base_url()?>csalarios?idc=<?php echo $idc?>&ide=<?php echo $ide?>">Salarios</a></li>
        <li class="active"> Actualizar Salarios</li>  
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">      
          <div class="box box-header">
            <div class="box-header with-border">
              <h3 class="box-title">Datos salario</h3>
            </div>  
            <div class="box-body">  

            <form id="formID" role="form" action="<?php echo base_url()?>cactualizarsalario/actualizarda"  method="get">

              <div class="form-group">
                <label class="control-label" for="inputError"></i>Salario *</label>
                <input type="number" class="form-control" name="salario" placeholder="Salario ..." required="" value="<?php echo $salario;?>"
                min="0">
              </div>

              <div class="form-group">
                <label class="control-label" for="inputError"></i>Gastos de representación </label>
                <input type="number" class="form-control" name="gastosR" placeholder="Gastos de representación  ..."  value="<?php echo $gastosR;?>"
                min="0">
              </div>

              <div class="form-group">
                <font size="2">Los campos marcados con (*) son obligatorios</font>
              </div>
              <div class="form-group">
                <table align="center" class="table table-bordered text-center">
                  <tr>
                    <td width="250">
                      <button type="submit" name="actualizar" class="btn btn-block btn-success btn-lg">Guardar</button>
                        <input type="hidden" name="idc" value="<?php echo $idc; ?>">
                        <input type="hidden" name="ide" value="<?php echo $ide; ?>">
                        <input type="hidden" name="anio" value="<?php echo $anio; ?>">
                      </form>
                    </td>
                    <td width="250">
                      <form id="formID" role="form" action="<?php echo base_url()?>cactualizarsalario/cancel"  method="get">
                        <button type="submit" name="cancelar" class="btn btn-block btn-danger btn-lg">Cancelar</button>
                        <input type="hidden" name="idc" value="<?php echo $idc; ?>">
                        <input type="hidden" name="ide" value="<?php echo $ide; ?>">
                      </form>  
                    </td>
                  </tr>
                </table>
              </div>  
            </div>
          </div>
        </div>  
      </div>  
    </section>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
