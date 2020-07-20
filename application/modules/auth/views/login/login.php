
  
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-blue py-9 py-lg-6 pt-lg-6" >
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">SI MAGI</h1>
              <p class="text-lead text-white">Aplikasi Manajemen Kegiatan Non Procurement<br>
                Politeknik Negeri Banyuwangi</p>
            </div>
          </div>
          </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-4">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            
            <div class="card-body px-lg-7 py-lg-6">
              <div class="text-center text-muted mb-4">
                <h2>FORM LOGIN</h2>
              </div>
              <hr>

              
              <?= $this->session->flashdata('message'); ?>

              <form role="form" method="post" action="<?= base_url('auth/index'); ?>">

                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input class="form-control" placeholder="Username" type="text" id="email" name="username" 
                    value="<?= set_value('username'); ?>">
                  </div>
                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?> 
                </div>


                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password" id="password" name="password" >
                  </div>
                  <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?> 
                </div>
                
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary my-4">Login</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  