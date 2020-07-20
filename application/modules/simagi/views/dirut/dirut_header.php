<!DOCTYPE html>
<html>

<head>
  
  <title><?= $title; ?></title>
	<!-- meta -->
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">

	<!-- css -->
	<link rel="icon" href="<?= base_url('assets/'); ?>dashboard/img/Rapat.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>dashboard/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>dashboard/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>dashboard/css/argon.css" type="text/css">
	<!-- Datatable -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  
</head>

<body>

		<!-- header -->

		<!-- sidebar -->
		<!-- Sidebar -->
<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-primary" id="sidenav-main">
    <div class="scrollbar-inner">

     <!-- Brand -->
     <div class="sidenav-header  align-items-center bg-primary" >
        <a class="navbar-brand" href="<?= base_url('user'); ?>">
          <img src="<?= base_url('assets/'); ?>dashboard/img/simagi.png"  class="navbar-brand-img" alt="...">
        </a>
      </div>

      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">

        <!-- Divider -->
        <hr class="my-2 bg-white">

        <!-- Nav items -->
          <ul class="navbar-nav">

          
          
          <li class="nav-item active">
          <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('simagi/dirut/daftarrkakl_dirut'); ?>">
                <i class="ni ni-money-coins text-white"></i>
                  <span class="nav-link-text text-white">Direktur Daftar RKAKL</span>
                </a>
          </li>
          
          <li class="nav-item active">
          <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('simagi/dirut/usulankegiatan_dirut'); ?>">
                <i class="ni ni-single-copy-04 text-white"></i>
                  <span class="nav-link-text text-white">Direktur Usulan Kegiatan</span>
                </a>
          </li>
         

          </ul>

          <hr class="my-2 bg-white">

            <!-- Navigation -->
            <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link active" href="<?= base_url('auth/logout'); ?>">
                <i class="fas fa-sign-out-alt text-primary"></i>
                  <span class="nav-link-text">Log Out</span>
                </a>
              </li>
            </ul>
              
          </div>
        </div>
      </div>
    </nav>
    
		<div class="main-content" id="panel">

		<!-- content -->

		<!-- Main content -->
		
<nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-1 mt-2">
        <ol class="breadcrumb breadcrumb-links">
        <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
        
                <!-- <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active" aria-current="page">Data</li> -->
                <?php foreach ($this->uri->segments as $segment): ?>
                  <?php 
                  $url = substr($this->uri->uri_string, 0, strpos($this->uri->uri_string, $segment)) . $segment;
                  $is_active =  $url == $this->uri->uri_string;
                  ?>

                  <li class="breadcrumb-item <?php echo $is_active ? 'active': '' ?>">
                    <?php if($is_active): ?>
                      <?php echo ucfirst($segment) ?>
                      <?php else: ?>
                        <?php echo ucfirst($segment) ?></a>
                      <?php endif; ?>
                    </li>
                  <?php endforeach; ?>
              </ol>
        </nav>

        <!-- Navbar links -->
        <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
          </ul>

            
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
        
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="<?= base_url('assets/'); ?>dashboard/img/default.jpg " >
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Direktur</span>
                  </div>
                </div>
              </a>
                
              <div class="dropdown-menu  dropdown-menu-right ">
            
                <div class="dropdown-divider"></div>
                <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item">
                <i class="fas fa-sign-out-alt text-primary"></i>
                  <span>Logout</span>
                </a>
              </div>
                
            </li>
          </ul>
        </div>
      </div>
      </nav>

			<div class="container">
		


				<?php echo $contents ;?>
			</div>
		</div>
    

        <script src="<?= base_url('assets/'); ?>dashboard/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>dashboard/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/'); ?>dashboard/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?= base_url('assets/'); ?>dashboard/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?= base_url('assets/'); ?>dashboard/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="<?= base_url('assets/'); ?>dashboard/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="<?= base_url('assets/'); ?>dashboard/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="<?= base_url('assets/'); ?>dashboard/js/argon.js?v=1.2.0"></script>
  <!-- Datatable -->
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

<script type="text/javascript" >
$(document).ready( function () {
    $('.myTable').DataTable();
} );

</script>

  <script>
 


  $('.custom-file-input').on('change', function(){
    left fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
  });
  $('.form-check-input').on('click', function(){

    const menuId = $(this).data('menu');
    const roleId = $(this).data('role');

    $.ajax({
      url: "<?= base_url('admin/changeaccess'); ?>",
      type: 'post',
      data: {
        menuId: menuId,
        roleId: roleId
      },
      success: function(){
        document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
      }
    });

  });

  </script>
</body>

</html>
