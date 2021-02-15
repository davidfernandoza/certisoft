

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ver Proyecto
      </h1>
      <ol class="breadcrumb">
        <?php if($viene=='1'){ ?>
          <li><a href="<?php echo base_url()?>cverprograma?idpr=<?php echo $prog?>&ver="> Ver programa</a></li>
          <li><a href="<?php echo base_url()?>cproyectos?viene=<?php echo $viene?>&idpr=<?php echo $prog ?>&proyectos="> Proyectos</a></li>
          <li class="active"> Ver proyecto</li>
        <?php }elseif($viene=='2'){ ?>
            <li><a href="<?php echo base_url()?>cinicio"><i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="<?php echo base_url()?>cproyectoso"> Proyectos</a></li>
        <li class="active"> Ver proyecto</li>
        <?php } ?>  
      </ol>
    </section>

   <!-- Main content --> 
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header --> 
            <div class="box-header">
                <h3 class="box-title">Proyecto <?php echo $proye?></h3>
            </div>
            <div class="box-body">
              <div class="table-responsive">
                <table id="Proyecto" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Id Proyecto</th>
                    <th>Nombre</th>
                    <th>Meta</th>
                    <th>Valor Actual</th>
                    <th>Valor Esperado</th>
                    <th>Inversión</th>
                    <th>Estado</th>
                    <th>Documentos</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      if ($detalle->ValorEsperado>0) {
                        $VA=$detalle->ValorActual;
                        $VE=$detalle->ValorEsperado;
                        $estado=($VA*100)/$VE;
                        if ($estado<25) {
                          $color="#FF0000";
                        } elseif ($estado<50) {
                          $color="#FF8000";
                        }elseif ($estado<75) {
                          $color="#FFFF00";
                        }else{
                          $color="#01DF01";
                        }
                      } else {
                        $color="#FF0000";
                      }
                      if ($detalle->Estado=='INACTIVO' AND $usuario==2) {
                        $bloq="disabled='true'";
                      } else {
                        $bloq="";
                      }
                      
                    ?>
                    <tr align="center" height="25">
                      <td><?php echo $detalle->idProyecto; ?></td>
                      <td><?php echo $detalle->Nombre; ?></td>
                      <td><?php echo $detalle->Meta; ?></td>
                      <td><?php echo $detalle->ValorActual; ?></td>
                      <td><?php echo $detalle->ValorEsperado; ?></td>
                      <td><?php echo '$'.$Inversion?></td>
                      <td bgcolor="<?php echo $color;?>"><?php echo $detalle->Estado; ?></td>
                      <td>
                        <table>
                          <tr>
                            <td>
                              <form action="cguardardocumento" method="get">
                                <input type="hidden" name="viene" value="<?php echo $viene?>">
                                <input type="hidden" name="idp" value="<?php echo $detalle->idProyecto?>">
                                <input type="hidden" name="idpr" value="<?php echo $detalle->idprograma?>">
                                <button name="editar" id="editar" type="submit" class="btn bg-purple margin" <?php echo $bloq?>><i class="fa fa-plus"  title="Agregar documento al proyecto"></i></button>
                              </form> 
                            </td>
                            <td>
                              <form action="cdocumentos" method="get">
                                <input type="hidden" name="viene" value="<?php echo $viene?>">
                                <input type="hidden" name="idp" value="<?php echo $detalle->idProyecto?>">
                                <input type="hidden" name="idpr" value="<?php echo $detalle->idprograma?>">
                                <button name="editar" id="editar" type="submit" class="btn bg-navy margin"><i class="fa fa-list"  title="Ver documentos del proyecto"></i></button>
                              </form> 
                            </td>  
                          </tr>  
                        </table> 
                      </td>
                      <td>
                        <table>
                          <tr>
                            <td>
                              <form action="cactualizarproyecto" method="get">
                                <input type="hidden" name="viene" value="<?php echo $viene?>">
                                <input type="hidden" name="idp" value="<?php echo $detalle->idProyecto?>">
                                <input type="hidden" name="idpr" value="<?php echo $detalle->idprograma?>">
                                <button name="editar" id="editar" type="submit" class="btn btn-warning" <?php echo $bloq?>><i class="fa fa-edit"  title="Editar proyecto"></i></button>
                              </form> 
                            </td>
                            <td>  
                              <form action="cguardarindicadorproyecto" method="get">
                                <input type="hidden" name="viene" value="<?php echo $viene?>">
                                <input type="hidden" name="idp" value="<?php echo $detalle->idProyecto?>">
                                <input type="hidden" name="idpr" value="<?php echo $detalle->idprograma?>">
                                <button name="agregar" id="agregar" type="submit" class="btn btn-success" title="Agregar indicador al proyecto" <?php echo $bloq?>><i class="fa fa-plus"></i></button>
                              </form>
                            </td>
                            <td>  
                              <form action="cindicadoresproyecto" method="get">
                                <input type="hidden" name="viene" value="<?php echo $viene?>">
                                <input type="hidden" name="idp" value="<?php echo $detalle->idProyecto?>">
                                <input type="hidden" name="idpr" value="<?php echo $detalle->idprograma?>">
                                <button name="indicadores" id="indicadores" type="submit" class="btn btn-info" title="Ver indicadores del proyecto"><i class="fa fa-list"></i></button>
                              </form>
                            </td>  
                          </tr>  
                        </table> 
                      </td>
                    </tr>  
                  </tbody>
                </table>
              </div>  
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer"><di>
    <div class="brand clearfix">
    <table>
      <tr bgcolor="#222d32">
        <td><a href="www.areandina.edu.co/"><img src="<?php echo base_url()?>assets/logos/logo.png"></a></td>
        <td><a href="www.ilumno.org"><img src="<?php echo base_url()?>assets/logos/logo_ilumno.png"></a></td>
      </tr>
    </table>
    </div>
    </footer>
    <footer class="main-footer"   id="link_bar">
      <font color="#cfcfcf" size="3">
      <div class="row">
        <div class="col-xs-3">
          <div class="col-xs-12">
            <ul>
              Línea Gratuita Nacional:<br><span class="tel"><i class="fa fa-phone"></i> 018000 180099</span><br>          
              Sede Bogotá:<br><span class="tel"><i class="fa fa-phone"></i> (57+1) 7449191</span><br>                             
              Sede Pereira:<br><span class="tel"><i class="fa fa-phone"></i> (57+6) 3401516</span><br>           
              Sede Valledupar:<br><span class="tel"><i class="fa fa-phone"></i> (57+5) 5897879</span><br>
            </ul>
          </div>
        </div>
        <div class="col-xs-3">
          <div class="col-xs-12">
            <ul>
              <i class="fa fa-angle-right"></i> <a href="http://areandina.edu.co/content/proceso-de-inscripcion-y-admision">Admisiones</a><br>
              <i class="fa fa-angle-right"></i> <a href="http://areandina.edu.co/modalidad/presencial">Programas Presenciales</a><br>
              <i class="fa fa-angle-right"></i> <a href="http://areandina.edu.co/modalidad/virtual">Programas Virtuales</a><br>
              <i class="fa fa-angle-right"></i> <a href="http://areandina.edu.co/modalidad/distancia">Programas Distancia</a>
            </ul>
          </div>  
          <div class="col-xs-12">
            <ul>
              <i class="fa fa-angle-right"></i> <a href="http://areandina.edu.co/noticias">Noticias</a><br>
              <i class="fa fa-angle-right"></i> <a href="http://areandina.edu.co/sedes">Sedes y CSU</a><br>
              <i class="fa fa-angle-right"></i> <a href="http://kactus.areandina.edu.co/KactusRL/">Trabaje con nosotros</a><br>
              <i class="fa fa-angle-right"></i> <a href="http://www.areandina.edu.co/sites/default/files/politicas_de_privacidad.pdf">Política de Privacidad</a><br>
            </ul>
          </div>
        </div>  
        <div class="col-xs-3">  
          <div class="col-xs-12">
            <ul>
              <i class="fa fa-angle-right"></i> <a href="https://gsd.ilumno.com/otrs/customer.pl">Mesa de ayuda</a><br>
              <i class="fa fa-angle-right"></i> <a href="http://hechoparaliderar.com/consultalumnos/?un=AREANDINA">Consulta alumnos</a><br>
              <i class="fa fa-angle-right"></i> <a href="https://mail.google.com/a/areandina.edu.co">Correo electrónico</a><br>
            </ul>
          </div>
          <div class="col-xs-12">
            <ul>
              <i class="fa fa-angle-right"></i> <a href="https://fuaa.epic-sam.net//default.aspx">EPIC</a><br>
              <i class="fa fa-angle-right"></i> <a href="http://sai.areandina.edu.co:7777/admisiones/">AYRE</a><br>
              <i class="fa fa-angle-right"></i> <a href="http://sai.areandina.edu.co:7777/ulises/">ULISES</a><br>
              <i class="fa fa-angle-right"></i> <a href="https://portalacademico.ilumno.com/zyncroapps/v2/ilumno/login/login">Portal Docente</a><br>
            </ul>
          </div>
        </div>  
      </div>         
      <div class="row">
      <h3>Siguenos</h3>
      <table>
        <tr>
          <td width="40">
            <a href="https://www.facebook.com/areandina?ref=hl" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
          </td>
          <td width="40">
            <a href="https://twitter.com/areandina" class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
          </td>
          <td width="40">
            <a href="https://plus.google.com/105480152398956146087/posts" class="btn btn-social-icon btn-google"><i class="fa fa-google-plus"></i></a>
          </td>
          <td width="40">
            <a href="https://www.youtube.com/user/areandinatv" class="btn btn-social-icon btn-google"><i class="fa fa-youtube"></i></a>
          </td>
          <td width="40">
            <a href="https://www.linkedin.com/company/fundacion-universitaria-del-area-andina?trk=nav_account_sub_nav_company_admin" class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
          </td>
          <td width="40">
            <a href="https://www.instagram.com/areandina/" class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
          </td>
        </tr>
      </table>
      </div>
      <br>
      <div class="row" align="center">
        <strong>
          <h4>Fundación Universitaria del Área Andina - Resolución Jurídica 22215. Ministerio de Educación. Diciembre, 9 - 1983. VIGILADA MINEDUCACIÓN</h4>
        </strong>
      </div>
      </font>
    </footer>

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url()?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url()?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>
</body>
</html>

