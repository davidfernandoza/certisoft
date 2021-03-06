﻿  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Actualizar
        <small>secretaría</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>cinicio"><i class="fa fa-home"></i>Inicio</a></li>
        <li><a href="<?php echo base_url()?>csecretarias">Secretarías</a></li>
        <li class="active"> Actualizar secretaría</li>
      </ol>
    </section>

    <!-- Main content -->
    
    <section class="content">
      <div class="row">
        <div class="col-md-12">      
          <div class="box box-header">
            <div class="box-header with-border">
              <h3 class="box-title">Datos secretaría</h3>
            <div class="box-body">  
            </div>
            <form id="formID" role="form" action="<?php echo base_url()?>cactualizarsecretaria/actualizarda"  method="get">
              <div class="form-group">
                <label class="control-label" for="inputError"></i>Id Secretaría *</label>
                <input type="text" class="form-control" name="ids" id="ids" placeholder="Id secretaría ..." value="<?php echo $idsec ?> " readonly="readonly" required >
              </div>
              <div class="form-group">
                <label class="control-label" for="inputError"></i>Nombre *</label>
                <input type="text" required="" class="form-control" name="nombre" placeholder="Nombre ..." value="<?php echo $NombreS ?>">
              </div>
              <div class="form-group">
                <label class="control-label" for="inputError"></i>Descripción</label>
                <input type="text" class="form-control" name="descripcion" placeholder="Descripción ..." value="<?php echo $DescripcionS ?>">
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
                      <form id="formID" role="form" action="<?php echo base_url()?>cactualizarsecretaria/cancel"  method="get">
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
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
