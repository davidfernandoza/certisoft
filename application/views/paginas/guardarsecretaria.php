  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Nueva
        <small>secretaría</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>cinicio"><i class="fa fa-home"></i>Inicio</a></li>
        <li class="active">Nueva secretaría</li>
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
          La secretaría que intenta guardar ya se encuentra almacenada en nuestra base de datos
        </div>
        <?php
          }
        ?>
        <div class="box box-header">
            <div class="box-header with-border">
          <div class="box-body">  
            </div>

            <form id="formID" role="form" action="cguardarsecretaria/guardar" method="get">
              <div class="form-group">
                <label class="control-label" for="inputError"></i>Id Secretaría *</label>
                <input type="text"  class="form-control" name="ids" placeholder="Id Secretaría ..." required="" pattern="[0-9]{1,20}" title="El campo solo debe contener números">
              </div>
              <div class="form-group">
                <label class="control-label" for="inputError"></i>Nombre *</label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre ..." required="">
              </div>
              <div class="form-group">
                <label>Descripción</label>
                <input type="text" class="form-control" name="descripcion" placeholder="Descripcion ...">
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
                    <form id="formID" role="form" action="cguardarsecretaria/cancel" method="get">
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

