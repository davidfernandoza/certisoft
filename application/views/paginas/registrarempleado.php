﻿  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Registrar 
        <small>empleado</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>cinicio"><i class="fa fa-home"></i> Inicio</a></li>
        <li class="active"> Registrar empleado</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      <div class="col-xs-12">
        <?php
          if ($this->session->flashdata('MensajeE')) {
        ?>
          <div class="alert alert-danger alert-dismissible" >
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-ban"></i> Error!</h4>
            El empleado que intenta registrar ya se encuentra registrado en nuestra base de datos
          </div>
        <?php
          }
          if ($this->session->flashdata('Mensaje')) {
        ?>
        <div class="alert alert-danger alert-dismissible" >
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-ban"></i> Error!</h4>
          El empleado que intenta registrar no se encuentra almacenado en nuestra base de datos
        </div>
        <?php
          }
        ?>
        <div class="box box-header">
          <div class="box-body">  
            <form id="formID" role="form" action="cregistrarempleado2" method="get">
              <div class="form-group">
                <label class="control-label" for="inputError"></i>Id Empleado *</label>
                <input type="text"  class="form-control" name="ide" placeholder="Id Empleado ..." required="">
                <div class="form-group">
              </div>
              <div class="form-group">
                <table align="center" class="table table-bordered text-center">
                  <tr>
                    <td width="250">
                      <button type="submit" name="registrar" class="btn btn-block btn-success btn-lg">Registrar</button>
                      </form>
                    </td>
                    <td width="250">
                      <form id="formID" role="form" action="cregistrarempleado/cancel" method="get">
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
    


