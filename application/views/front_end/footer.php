<footer class="main-footer" >
  <center>
    <div class="form-group">
      <table aling="center">
        <tr>
          <td width="180">
            <a href="http://www.mintic.gov.co/"><img class="img-responsive" src="<?php echo base_url()?>assets/logos/mintic_160.png" alt="Photo">
          </td></a>
          <td width="180">
            <a href="http://estrategia.gobiernoenlinea.gov.co/"><img class="img-responsive" src="<?php echo base_url()?>assets/logos/GobiernoEnLinea_160.png" alt="Photo"></a>
          </td>
          <td width="18+0">
            <a href="http://www.santarosadecabal-risaralda.gov.co/"><img class="img-responsive" src="<?php echo base_url()?>assets/logos/alcaldia_100.png" alt="Photo"></a>
          </td>
          <td width="180">
            <a href="http://www.prosperidadsocial.gov.co/"><img class="img-responsive" src="<?php echo base_url()?>assets/logos/logo_prosperidad_para_todos_160.png" alt="Photo">
          </td></a>
          <td width="180">
            <a href="https://www.dnp.gov.co/"><img class="img-responsive" src="<?php echo base_url()?>assets/logos/todosporunnuevopais_160.png" alt="Photo"></a>
          </td>
        </tr>
      </table>
    </div>
    <div class="pull-right hidden-xs">
      <b>Versión</b> 1.0.0
    </div>
  </center>
</footer>

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url()?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url()?>assets/js/ui1114/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url()?>assets/js/ui1114/raphael-min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url()?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url()?>assets/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url()?>assets/https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url()?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url()?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- page script -->
<script>
  $(function tablaI() {
    $("#Internos").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });

  $(function tablaU() {
      $("#Usuarios").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
    });

  $(function datep() {

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

  }
</script>

</body>
</html>
