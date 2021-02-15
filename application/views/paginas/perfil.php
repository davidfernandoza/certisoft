

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <?php 
        $Nom = $this->session->userdata('Nombre');
      ?>
      <h1>
        Perfil 
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>cinicio"><i class="fa fa-home"></i> Inicio</a></li>
        <li class="active"> Perfil</li>
      </ol>
    </section>

   <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Usuario <?php echo $idUsuario?></h3>
            </div>  
            <div class="box-body">  
              <form id="formID" role="form" action="cperfil/actualizar" method="get">
                <div class="form-group">
                  <label class="control-label" for="inputError"></i>Identificación</label>
                  <input type="text" class="form-control" name="id" placeholder="Identificación ..." value="<?php echo $idUsuario ?>" readonly="readonly">
                </div>
                <div class="form-group">
                  <label class="control-label" for="inputError"></i>Nombres</label>
                  <input type="text" class="form-control" name="nombre" placeholder="Nombres ..." value="<?php echo $Nombre ?>" required="" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1,50}" title="El campo solo debe contener letras">
                </div>
                <div class="form-group">
                  <label class="control-label" for="inputError"></i>Apellidos</label>
                  <input type="text" class="form-control" name="apellido" placeholder="Apellidos ..." value="<?php echo $Apellido ?>" required="" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1,50}" title="El campo solo debe contener letras">
                </div>
                <div class="form-group">
                  <label class="control-label" for="inputError"></i>Teléfono</label>
                  <input type="text" class="form-control" name="telefono" placeholder="Teléfono ..." value="<?php echo $Telefono ?>" pattern="[0-9]{1,10}" title="El campo solo debe contener números">
                </div>
                <div class="form-group">
                  <label class="control-label" for="inputError"></i>Correo Electrónico</label>
                  <input type="email" class="form-control" name="email" placeholder="Correo Electrónico ..." value="<?php echo $Email ?>" required="" >
                </div>
                <div class="form-group">
                  <label class="control-label" for="inputError"></i>Contraseña</label>
                  <input type="password" class="form-control" name="contrasena" placeholder="Contraseña ..." value="<?php echo $Contrasena ?>" required="">
                </div>
                <div class="form-group">
                  <label class="control-label" for="inputError"></i>Repita la contraseña</label>
                  <input type="password" class="form-control" name="repcontrasena" placeholder="Contraseña ..." value="<?php echo $Contrasena ?>" required="" id="repcontrasena" data-equal-id="contrasena">
                </div>
                <div class="form-group">
                  <table align="center" class="table table-bordered text-center">
                    <tr>
                      <td width="250">
                        <button type="submit" name="actualizar" class="btn btn-block btn-success btn-lg">Guardar</button>
                      </td>
                      <td width="250">
                        <button type="submit" name="cancelar" class="btn btn-block btn-danger btn-lg">Cancelar</button>
                      </td>
                    </tr>
                  </table>
                </div>    
              </form>
            </div>  
        </div>    
      </div>
    </section>  
    <!-- /.content -->
  </div>
