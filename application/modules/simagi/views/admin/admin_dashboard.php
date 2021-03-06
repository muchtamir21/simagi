
				<!-- Header -->
                <div class="header bg-white pb-6 pt-5">
      <div class="container-fluid">
        <div class="header-body">
            
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                  
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Data Pengguna</h5>
                      <span class="h1 font-weight-bold mb-0">  
                      <?php
                      $count_pengguna = $this->m_dashboard->jml_pengguna()->row();
                      echo $count_pengguna->total;
                      ?>

                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Usulan Kegiatan</h5>
                      <span class="h1 font-weight-bold mb-0">
                      <?php
                      $count_usulan = $this->m_dashboard->jml_usulan()->row();
                      echo $count_usulan->total;
                      ?>

                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-chart-pie-35"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">RKAKL</h5>
                      <span class="h1 font-weight-bold mb-0">
                      <?php
                      $count_rkakl = $this->m_dashboard->jml_rkakl()->row();
                      echo $count_rkakl->total;
                      ?>
                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Permohonan UMK</h5>
                      <span class="h1 font-weight-bold mb-0">
                      <?php
                      $count_umk = $this->m_dashboard->jml_umk()->row();
                      echo $count_umk->total;
                      ?>
                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-paper-diploma"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </div>
    </div>
      </div>
</div>
    
    <div class="card-body">
    <div class="row">
    <div class="col">
    <div class="card">
    <div class="card-header border-0">
    <div class="row align-item-center">
        <div class="col">
        <h1 align="center" class="mb-0">Data Usulan Terbaru</h1>
        </div>

    </div>
    </div>
        <div class="table-responsive">
            <table class="table align-items-center table-flush table-striped table-sm myTable">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Judul Kegiatan</th>
                        <th scope="col">Nama Pengusul</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  $usulan = $this->m_dashboard->usulan_baru()->result();
                  $no=0;
                  foreach($usulan as $rec ){
                  $no++
                  ?>
                    <tr>
                        <th><?php echo $no?></th>
                        <th><?php echo $rec->tanggal?></th>
                        <th><?php echo $rec->judul_kegiatan?></th>
                        <th><?php echo $rec->nama_pengusul?></th>
                    </tr>

                  <?php } ?>
                    </tbody>
            </table>
        </div>