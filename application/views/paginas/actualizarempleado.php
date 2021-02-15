   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Actualizar
        <small>empleado</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>cinicio"><i class="fa fa-home"></i>Inicio</a></li>
        <li><a href="<?php echo base_url()?>cempleados">Empleados</a></li>
        <li class="active">Actualizar empleado</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-header">
            <div class="box-header with-border">
              <h3 class="box-title">Datos empleado</h3>
            </div>  
            <div class="box-body"> 
              <form id="formID" role="form" action="cactualizarempleado/actualizarda" method="get">
                <div class="form-group">
                  <label class="control-label" for="inputError"></i>Identificación *</label>
                  <input type="text" readonly="" class="form-control" name="ide" required="" placeholder="identificación ..." value="<?php echo $empleado->Cedula;?>" readonly pattern="[0-9]{1,10}" title="El campo solo debe contener letras">
                </div>
                <div class="form-group">
                  <label class="control-label" for="inputError"></i>Nombre *</label>
                  <input type="text"  class="form-control" name="nombre" required="" placeholder="Nombre ..." value="<?php echo $empleado->NombreE;?>" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1,50}" title="El campo solo debe contener letras">
                </div>  
                <div class="form-group">
                  <label class="control-label" for="inputError"></i>Apellido *</label>
                  <input type="text"  class="form-control" name="apellido" required="" placeholder="Apellido ..." value="<?php echo $empleado->ApellidoE;?>" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1,50}" title="El campo solo debe contener letras">
                </div>
                <div class="form-group">
                  <label class="control-label" for="inputError"></i>Ubicación</label>
                  <input type="text" class="form-control" name="caja" placeholder="Ubicación ..." value="<?php echo $empleado->Caja;?>"
                   pattern="a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1,50}" title="El campo puede  contener letras y números">
                </div>
                <div class="form-group">
                  <font size="2">Los campos marcados con (*) son obligatorios</font>
                </div>
                <div class="form-group">
                  <table align="center" class="table table-bordered text-center">
                    <tr>
                      <td width="250">
                        <button type="submit" name="actualizar" class="btn btn-block btn-success btn-lg">Actualizar</button>
                        </form>
                      </td>
                      <td width="250">
                        <form id="formID" role="form" action="cactualizarempleado/cancel" method="get">
                          <button type="submit" name="cancelar" class="btn btn-block btn-danger btn-lg">Cancelar</button>
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
    </div>   
      
      <!-- /.content -->

