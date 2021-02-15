<!-- sidebar menu: : style can be found in sidebar.less -->
     
      <ul class="sidebar-menu">
        <li class="header">MENÚ PRINCIPAL</li>
        <li>
          <a href="<?php echo base_url()?>cinicio"><i class="fa fa-fw fa-home"></i> 
              <span>Inicio</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-institution"></i> <span>Secretarías</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span> 
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url()?>csecretarias"><i class="fa fa-list"></i>Listar secretarías</a></li>
            <li><a href="<?php echo base_url()?>cguardarsecretaria"><i class="fa fa-plus-square"></i>Nueva secretaría</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-suitcase"></i> <span>Cargos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span> 
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url()?>ccargos"><i class="fa fa-list"></i>Listar cargos</a></li>
            <li><a href="<?php echo base_url()?>cguardarcargo"><i class="fa fa-plus-square"></i>Nuevo cargo</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-male"></i> <span>Empleados</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span> 
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url()?>cempleados"><i class="fa fa-list"></i>Listar empleados</a></li>
            <li><a href="<?php echo base_url()?>cguardarempleado"><i class="fa fa-plus-square"></i>Nuevo empleado</a></li>
            <li><a href="<?php echo base_url()?>cregistrarempleado"><i class="fa fa-pencil-square"></i>Registrar empleado</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Usuarios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url()?>cusuarios"><i class="fa fa-list"></i> Listar usuarios</a></li>
            <li><a href="<?php echo base_url()?>cguardarusuario"><i class="fa fa-plus-square"></i> Nuevo usuario</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url()?>cactualizarcertificado"><i class="fa-fw fa ion-edit "></i> 
            <span>Actualizar Certificado</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

