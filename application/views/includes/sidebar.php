 
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-fixed" >
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     
      <li class="nav-item">
      <a class="nav-link" href="<?= site_url(); ?>user/logout"> Logout</a>
      </li>
        
    </ul>
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 ">
    <!-- Brand Logo -->
    <!-- <a href="<?php //echo base_url(); ?>assets/theme/index3.html" class="brand-link"></a> -->
      <a class="brand-link"><span class="d-block font-weight-light"> Recruting Contracts</span>
  </a>
  <?php $uri = $this->uri->segment(2); //echo $uri;exit; ?>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url(); ?>assets/theme/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['username'];?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav  nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
            <li class="nav-item">
             <a href="dashboard" class="nav-link <?php if($uri=='dashboard'){ echo "active";}?>">
              <i class="nav-icon fas fa fa-dashboard"></i>
              <p>
                DASHBOARD
              </p>
             </a>
          <li class="nav-item">
            <a href="addContracts" class="nav-link <?php if($uri=='addContracts'){ echo "active";}?>">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                ADD CONTRACTS
              </p>
            </a>
          <li class="nav-item">
            <a href="listcontracts" class="nav-link <?php if($uri=='listcontracts'){ echo "active";}?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                LIST CONTRACTS
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="addpaperWork" class="nav-link <?php if($uri=='addpaperWork'){ echo "active";}?>">
            <i class="nav-icon fas fa-file"></i>
              <p>
                DOCUMENTATION
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="documentation" class="nav-link <?php if($uri=='documentation'){ echo "active";}?>">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                LIST OF DOCUMENTS
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 