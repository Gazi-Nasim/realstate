<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="<?php echo base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Admin Panel</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"> <?php echo $this->session->userdata('username'); ?>
        </a>
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
        <li class="nav-item dropdown menu-open">
          <!--  class="menu-open" is used to opened menu  -->
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              <?php echo $this->session->userdata('username'); ?>
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">
            <li class="nav-item dropdown ">
              <a href="#" class="nav-link">
                <i class="right fas fa-angle-left"></i>
                <p>Home Page</p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>AdminPanel/homeSlider" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Slider Part</p>
                  </a>
                </li>
              </ul>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Property Type</p>
                  </a>
                </li>
              </ul>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Property Agent</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item dropdown ">
              <a href="#" class="nav-link ">
                <i class="right fas fa-angle-left"></i>
                <p>Property List</p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>AdminPanel/homeSlider" class="nav-link active">
                    <i class="far fa-circle nav-icon "></i>
                    <p>Add New Property</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item dropdown ">
              <a href="#" class="nav-link">
                <i class="right fas fa-angle-left"></i>
                <p>Footer</p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>/sifath/create_invoice.php" class="nav-link">
                    <i class="fas fa-calculator"></i>
                    <p>Address</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?php echo base_url() ?>/sharmin/list_invoice.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Photo Gallery</p>
                  </a>
                </li>

              </ul>
            </li>

            <li class="nav-item dropdown ">
              <a href="#" class="nav-link">
                <i class="right fas fa-angle-left"></i>
                <p>Contact</p>
              </a>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>AdminPanel/con_list" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Contact Information</p>
                  </a>
                </li>
              </ul>
            </li>

          </ul>

        <li class="nav-item">
          <a href="<?php echo base_url() ?>AdminPanel/log_out" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Logout
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>