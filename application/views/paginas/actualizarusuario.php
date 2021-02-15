
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Actualizar
        <small> Usuario</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>cinicio"><i class="fa fa-home"></i> Inicio</a></li>
        <li><a href="<?php echo base_url()?>cusuarios"> Usuarios</a></li>
        <li class="active"> Actualizar usuario</li>
      </ol>
    </section>

    <!-- Main content -->
    
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-header">
            <div class="box-header with-border">
              <h3 class="box-title">Actualizar <?php echo $Nombre.' '.$Apellido?></h3>
            </div>  
            <div class="box-body">  
              <form id="formID" role="form" action="cactualizarusuario/actualizar" method="get">
                <div class="form-group">
                  <label class="control-label" for="inputError"></i>Identificación *</label>
                  <input type="text" class="form-control" name="id" placeholder="Identificación ..." value="<?php echo $idUsuario ?>" readonly="readonly">
                </div>
                <div class="form-group">
                  <label class="control-label" for="inputError"></i>Nombres *</label>
                  <input type="text" class="form-control" name="nombre" placeholder="Nombres ..." value="<?php echo $Nombre ?>" required>
                </div>
                <div class="form-group">
                  <label class="control-label" for="inputError"></i>Apellidos *</label>
                  <input type="text" class="form-control" name="apellido" placeholder="Apellidos ..." value="<?php echo $Apellido ?>" required>
                </div>
                <div class="form-group">
                  <label class="control-label" for="inputError"></i>Teléfono</label>
                  <input type="text" class="form-control" name="telefono" placeholder="Teléfono ..." value="<?php echo $Telefono ?>" pattern="[0-9]{1,10}" title="El campo solo debe contener números">
                </div>
                <div class="form-group">
                  <label class="control-label" for="inputError"></i>Correo Electrónico *</label>
                  <input type="email" class="form-control" name="email" placeholder="Correo Electrónico ..." value="<?php echo $Email ?>" required="" >
                </div>
                <div class="form-group">
                  <label class="control-label" for="inputError"></i>Contraseña *</label>
                  <input type="password" class="form-control" name="contrasena" placeholder="Contraseña ..." value="<?php echo $Contrasena ?>" id="contrasena" required>
                </div>
                <div class="form-group">
                  <label class="control-label" for="inputError"></i>Repita la contraseña *</label>
                  <input type="password" class="form-control" name="repcontrasena" placeholder="Contraseña ..." value="<?php echo $Contrasena ?>" required="" id="repcontrasena" data-equal-id="contrasena" required>
                </div>
                <div class="form-group">
                  <label>Rol *</label>
                  <?php
                    if ($Rol=='ADMINISTRADOR') {
                      $ra="selected=\"selected\"";
                      $rr="";
                    }else{
                      $rr="selected=\"selected\"";
                      $ra="";
                    }
                  ?>
                    <select name="rol" class="form-control select2" style="width: 100%;" required="">
                      <option <?php echo $ra?> value="ADMINISTRADOR">ADMINISTRADOR</option>
                      <option <?php echo $rr?> value="REGULAR">REGULAR</option>
                    </select>
                </div>
                <div class="form-group">    
                  <label>Estado *</label>
                  <?php
                    if ($Estado=='ACTIVO') {
                      $ea="selected=\"selected\"";
                      $ei="";
                    }else{
                      $ei="selected=\"selected\"";
                      $ea="";
                    }
                  ?>
                  <select name="estado" class="form-control select2" style="width: 100%;" required="">
                    <option <?php echo $ea?> value="ACTIVO">ACTIVO</option>
                    <option <?php echo $ei?> value="INACTIVO">INACTIVO</option>
                  </select>
                </div>    
                <div class="form-group">
                  <font size="2">Los campos marcados con (*) son obligatorios</font>
                </div>
                <div class="form-group">
                  <table align="center" class="table table-bordered text-center">
                    <tr>
                      <td width="250">
                        <button type="submit" name="actualizar" class="btn btn-block btn-success btn-lg">Guardar</button>
                        </form>
                      </td>
                      <td width="250">
                        <form id="formID" role="form" action="cactualizarusuario/cancel" method="get">
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
      </section>  
    
    <!-- /.content -->
  </div>
