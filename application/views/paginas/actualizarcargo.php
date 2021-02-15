  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Actualizar
        <small>Cargo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>cinicio"><i class="fa fa-home"></i>Inicio</a></li>
        <li><a href="<?php echo base_url()?>ccargos">Cargos</a></li>
        <li class="active"> Actualizar cargo</li>  
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">      
          <div class="box box-header">
            <div class="box-header with-border">
              <h3 class="box-title">Datos cargo</h3>
            </div>  
            <div class="box-body">  
            <form id="formID" role="form" action="<?php echo base_url()?>cactualizarcargo/actualizarda"  method="get">
              <div class="form-group">
                <label class="control-label" for="inputError"></i>Id Cargo *</label>
                <input type="text"  class="form-control" name="idc" placeholder="Id Cargo ..." readonly="" required="" value="<?php echo $idC?>" readonly="">
              </div>
              <div class="form-group">
                <label class="control-label" for="inputError"></i>Nombre *</label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre ..." required="" value="<?php echo $NomC;?>">
              </div>
              <div class="form-group">
                <label class="control-label" for="inputError"></i>Descripción </label>
                <input type="text" class="form-control" name="descripcion" placeholder="Descripción ..." value="<?php echo $DesC;?>">
              </div>
              <div class="form-group">
                <label class="control-label" for="inputError"></i>Secretaría *</label>
                <select name="ids" class="form-control select2" required="">
                  <option value="<?php echo $idS?>"><?php echo $NombreS;?></option>
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
                      <button type="submit" name="actualizar" class="btn btn-block btn-success btn-lg">Guardar</button>
                      </form>
                    </td>
                    <td width="250">
                      <form id="formID" role="form" action="<?php echo base_url()?>cactualizarcargo/cancel"  method="get">
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
