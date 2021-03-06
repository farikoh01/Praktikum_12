<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?php echo base_url(); ?>" class="brand-link">
    <img src="<?php echo base_url(); ?>/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo base_url(); ?>/assets/dist/img/foto.jpeg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Farikoh Izmi</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        <li class="nav-item">
          <a href="<?php echo base_url('welcome/index') ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa-solid fa-building-columns"></i>
            <p>
              Mahasiswa
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url('Mahasiswa/index') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Mahasiswa</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('Mahasiswa/create') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tambah Mahasiswa</p>
              </a>
            </li>
          </ul>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa-solid fa-person"></i>
            <p>
              Dosen
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url('Dosen/index') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Dosen</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('Dosen/create') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tambah Dosen</p>
              </a>
            </li>
          </ul>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa-solid fa-layer-group"></i>
            <p>
              Matakuliah
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url('Matakuliah/index') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Matakuliah</p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="<?php echo base_url('Mata kuliah/create') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tambah Matakuliah</p>
              </a>
            </li> -->
          </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>