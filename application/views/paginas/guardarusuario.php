﻿
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Nuevo
        <small>Usuario</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>cinicio"><i class="fa fa-home"></i> Inicio</a></li>
        <li class="active"> Nuevo usuario</li>
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
            El usuario que intenta guardar ya se encuentra almacenado en nuestra base de datos
          </div>
          <?php
            }
          ?>
          <div class="box box-header">

            <div class="box-body">  
              <form id="formID" role="form" action="cguardarusuario/guardar" method="get">
                <div class="form-group">
                  <label class="control-label" for="inputError"></i>Identificación *</label>
                  <input type="text" class="form-control" name="id" placeholder="Identificación ..." required="" pattern="[0-9]{1,10}" title="El campo solo debe contener números">
                </div>
                <div class="form-group">
                  <label class="control-label" for="inputError"></i>Nombres *</label>
                  <input type="text" class="form-control" name="nombre" placeholder="Nombres ..." required="" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1,50}" title="El campo solo debe contener letras">
                </div>
                <div class="form-group">
                  <label class="control-label" for="inputError"></i>Apellidos *</label>
                  <input type="text" class="form-control" name="apellido" placeholder="Apellido ..." required="" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1,50}" title="El campo solo debe contener letras">
                </div>
                <div class="form-group">
                  <label class="control-label" for="inputError"></i>Teléfono</label>
                  <input type="text" class="form-control" name="telefono" placeholder="Teléfono ..." pattern="[0-9]{1,10}" title="El campo solo debe contener números">
                </div>
                <div class="form-group">
                  <label class="control-label" for="inputError"></i>Correo Electrónico *</label>
                  <input type="email" class="form-control" name="email" placeholder="Correo Electrónico ..." required="" >
                </div>
                <div class="form-group">
                  <label class="control-label" for="inputError"></i>Contraseña *</label>
                  <input type="password" class="form-control" name="contrasena" placeholder="Contraseña ..." required="" id="contrasena">
                </div>
                <div class="form-group">
                  <label class="control-label" for="inputError"></i>Repita la contraseña *</label>
                  <input type="password" class="form-control" name="repcontrasena" placeholder="Contraseña ..." required="" id="repcontrasena" data-equal-id="contrasena">
                </div>
                <div class="form-group">
                  <label>Rol *</label>
                  <select name="rol" class="form-control select2" style="width: 100%;" required="">
                    <option selected="selected" value="">SELECCIONAR</option>
                      <option   value="ADMINISTRADOR">ADMINISTRADOR</option>
                      <option  value="REGULAR">REGULAR</option>
                  </select>
                </div>
                <div class="form-group">  
                  <label>Estado *</label>
                  <select name="estado" class="form-control select2" style="width: 100%;" required="">
                    <option selected="selected" value="">SELECCIONAR</option> 
                      <option  value="ACTIVO">ACTIVO</option>
                      <option value="INACTIVO">INACTIVO</option>
                  </select>
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
                        <form id="formID" role="form" action="cguardarusuario/cancel" method="get">
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
   