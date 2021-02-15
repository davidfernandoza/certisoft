  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Actualizar
        <small>Certificado</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>cinicio"><i class="fa fa-home"></i>Inicio</a></li>
        <li class="active"> Actualizar Certificado</li>  
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">      
          <div class="box box-header">
            <div class="box-header with-border">
              <h3 class="box-title">Datos del certificado</h3>
            </div>  
            <div class="box-body">  
            <form id="formID" role="form" action="<?php echo base_url()?>cactualizarcertificado/actualizarda"  method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label class="control-label" for="inputError"></i>Secretaria *</label>
                <input type="text" class="form-control" name="secretaria" placeholder="Secretaria ..." required="" value="<?php echo $secretaria;?>">
              </div>

              <div class="form-group">
                <label class="control-label" for="inputError"></i>Subsecretaria * </label>
                <input type="text" class="form-control" name="subsecretaria" placeholder="Subsecretaria ..." value="<?php echo $subS;?>">
              </div>

              <div class="form-group">
                <label class="control-label" for="inputError"></i>Nombre * </label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre ..." value="<?php echo $nomS;?>">
              </div>

              <div class="form-group">
                <label class="control-label" for="inputError"></i>Cargo * </label>
                <input type="text" class="form-control" name="cargo" placeholder="Cargo ..." value="<?php echo $cargoS;?>">
              </div>

              <div class="form-group">
                <label class="control-label" for="inputError"></i>Firma * </label>
                <input type="file"  name="foto_firma" placeholder="Firma ..." value="<?php echo $firma;?>">
                <input type="hidden"  class="form-control" name="firmaor" value="<?php echo $firma;?>">
                <br>
                <label class="control-label" for="inputError"></i>Firma Actual:</label>
                <br>
                <img src="<?php echo base_url()?><?php echo $firma;?>" alt="Firma" style="width:300px; height: 100px">
              </div>

              <div class="form-group">
                <label class="control-label" for="inputError"></i>Lema * </label>
                <input type="text" class="form-control" name="lema" placeholder="Lema ..." value="<?php echo $lema;?>">
              </div>

              <div class="form-group">
                <label class="control-label" for="inputError"></i>Direccion * </label>
                <input type="text" class="form-control" name="direccion" placeholder="Direccion ..." value="<?php echo $direccion;?>">
              </div>

              <div class="form-group">
                <label class="control-label" for="inputError"></i>Telefono * </label>
                <input type="text" class="form-control" name="telefono" placeholder="Telefono ..." value="<?php echo $telefono;?>">
              </div>

              <div class="form-group">
                <label class="control-label" for="inputError"></i>Fax * </label>
                <input type="text" class="form-control" name="fax" placeholder="Fax ..." value="<?php echo $fax;?>">
              </div>

              <div class="form-group">
                <label class="control-label" for="inputError"></i>Pagina * </label>
                <input type="text" class="form-control" name="pagina" placeholder="Pagina ..." value="<?php echo $pagina;?>">
              </div>

              <div class="form-group">
                <label class="control-label" for="inputError"></i>Correo * </label>
                <input type="text" class="form-control" name="correo" placeholder="Correo ..." value="<?php echo $correo;?>">
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
                      <form id="formID" role="form" action="<?php echo base_url()?>cactualizarcertificado/cancel"  method="get">
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
