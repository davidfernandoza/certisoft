  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Nuevo
        <small>cargo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>cinicio"><i class="fa fa-home"></i>Inicio</a></li>
        <li class="active">Nuevo cargo</li>
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
          El cargo que intenta guardar ya se encuentra almacenado en nuestra base de datos
        </div>
        <?php
          }
        ?>
        <div class="box box-header">

          <div class="box-body">

            <form id="formID" role="form" action="cguardarcargo/guardar" method="get">
              <div class="form-group">
                <label class="control-label" for="inputError"></i>Id Cargo *</label>
                <input type="text"  class="form-control" name="idc" placeholder="IdCargo ..." required="">
              </div>
              <div class="form-group">
                <label class="control-label" for="inputError"></i>Nombre *</label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre ..." required="">
              </div>
              <div class="form-group">
                <label class="control-label" for="inputError"></i>Descripción</label>
                <input type="text" class="form-control" name="descripcion" placeholder="Descripción ..." />
              </div>
              <div class="form-group">
                <label class="control-label" for="inputError"></i>Secretaría *</label>
                <select name="ids" class="form-control select2" required="">
                  <option>SELECCIONAR</option>
                  <?php
                      foreach ($secretarias as $item):
                        echo "<option value='".$item->idSecretaria."'>".$item->NombreS."</option>";
                      endforeach;
                    ?>
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
                      <form id="formID" role="form" action="cguardarcargo/cancel" method="get">
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
