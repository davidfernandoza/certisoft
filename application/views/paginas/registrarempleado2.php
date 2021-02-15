
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Registrar
        <small>empleado</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>cinicio"><i class="fa fa-home"></i>Inicio</a></li>
        <li class="active">Registrar empleado</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-header">
            <div class="box-body">
              <form id="formID" role="form" action="cregistrarempleado2/registrar" method="get">
                <div class="form-group">
                  <label class="control-label" for="inputError"></i>Identificación *</label>
                  <input type="text" class="form-control" name="id" placeholder="Identificación ..." required="" pattern="[0-9]{1,10}" title="El campo solo debe contener números" value="<?php echo $empleado->Cedula?>" readonly>
                </div>
                <div class="form-group">
                  <label class="control-label" for="inputError"></i>Nombre *</label>
                  <input type="text" class="form-control" name="nombre" placeholder="Nombre ..." required="" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1,50}" title="El campo solo debe contener letras" value="<?php echo $empleado->NombreE?>" readonly>
                </div>
                <div class="form-group">
                  <label class="control-label" for="inputError"></i>Apellido *</label>
                  <input type="text" class="form-control" name="apellido" placeholder="Apellido ..." required="" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1,50}" title="El campo solo debe contener letras" value="<?php echo $empleado->ApellidoE?>" readonly>
                </div>
                <div class="form-group">
                  <label class="control-label" for="inputError"></i>Teléfono </label>
                  <input type="text" class="form-control" name="telefono" placeholder="Teléfono ..." pattern="[0-9]{1,10}" title="El campo solo debe contener números" >
                </div>
                <div class="form-group">
                  <label class="control-label" for="inputError"></i>Correo Electrónico *</label>
                  <input type="email" class="form-control" name="email" placeholder="Correo Electrónico ..." required="" >
                </div>
                <input type="hidden" class="form-control" name="contrasena" placeholder="Contraseña ..." required="" id="contrasena" value="<?php echo $empleado->Cedula?>">
                <input type="hidden" class="form-control" name="repcontrasena" placeholder="Contraseña ..." required="" id="repcontrasena" data-equal-id="contrasena" value="<?php echo $empleado->Cedula?>">
                <input type="hidden" name="rol" value="REGULAR">
                <input type="hidden" name="estado" value="ACTIVO">
                <div class="form-group">
                  <font size="2">Los campos marcados con (*) son obligatorios<br>Por defecto la contraseña del usuario es su misma identificación, favor pedirle que la cambie</font>
                </div>
                <div class="form-group">
                  <table align="center" class="table table-bordered text-center">
                    <tr>
                      <td width="250">
                        <button type="submit" name="registrar" class="btn btn-block btn-success btn-lg">Registrar</button>
                        </form>
                      </td>
                      <td width="250">
                        <form id="formID" role="form" action="cregistrarempleado2/cancel" method="get">
                          <button type="submit" name="cancelar" class="btn btn-block btn-danger btn-lg">Cancelar</button>
                        </form>
                      </td>
                    </tr>
                  </table>
                </div>
                <script type="text/javascript">
                  $('[data-equal-id]').bind('input', function(){
                    var to_confirm=$(this);
                    var to_equal=$('#' + to_confirm.data('equalId'));
                    if (to_confirm.val() != to_equal.val()) {
                      this.setCustomValidity('La contrasena no es igual');
                    } else {
                      this.setCustomValidity('');
                    }
                  });
                </script>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
