

<div class="card" style="margin-top: 20px">
            <!-- Card header -->
            <div class="card-header border-0" style="background: #5e72e4">
              <h3 class="mb-0" style="color:#fff">Laporan Usulan Kegiatan</h3>
            </div>
            <!-- Light table -->
            <div class="card-body">

                <form action="<?= base_url('simagi/admin/laporan_usulan'); ?>" method="POST">
              <div class="row">
               <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-nomor-kegiatan">Pilih Tahun</label>
                          <select class="form-control" name="tahun">
                            <option value="">Pilih Tahun</option>
                            <?php 
                            $tahun_now = date("Y");
                              for($i=2020;$i<=$tahun_now;$i++){


                             ?>
                            <option value="<?php echo $i ?>"><?php echo $i ?></option>
                            <?php } ?>
                          </select>
                          
                        </div>
                      </div>
               <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-nomor-kegiatan">Pilih Bulan</label>
                          <select class="form-control" name="bulan">
                            <option value="">Pilih Bulan</option>
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                          </select>
                          
                        </div>
                      </div>


                      </div>

                      <div class="row">
               <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-nomor-kegiatan">Pilih Progress</label>
                          <select class="form-control" name="progres">
                          <option value="">Semua</option>
                        <option value="proses">Prosess</option>
                        <option value="setujui">Di Setujui</option>
                        <option value="tolak">Di Tolak</option>
                          </select>
                          
                        </div>
                      </div>
               <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-nomor-kegiatan">Pilih Bagian</label>
                          <select class="form-control" name="bagian">
                            <option value="">Semua</option>
                            <?php $bagian = $this->m_dashboard->where('bagian',['level' => '2'])->result();
                            foreach($bagian as $row ){
                              
                            ?>
                            <option value="<?php echo $row->namabagian ?>"><?php echo $row->namabagian ?></option>
                            <?php } ?>
                          </select>
                          
                        </div>
                      </div>


                      </div>

                      
                      <div class="row">
                      <div class="col-md-12" ><button type="submit" class="btn btn-primary" style="float: right;">Tampilkan</button></div>


                      </div>
                     

                    
                      </div>
                      </form>

            </div>
            <!-- Card footer -->
      
          </div>
<?php
if(empty($this->input->post('tahun')) || empty($this->input->post('bulan'))){ }else{

  if($this->input->post('bulan') == '01'){
    $bln = 'Januari';
}elseif($this->input->post('bulan') == '02'){
    $bln = 'Februari';
}elseif($this->input->post('bulan') == '03'){
    $bln = 'Maret';
}elseif($this->input->post('bulan') == '04'){
    $bln = 'April';
}elseif($this->input->post('bulan') == '05'){
    $bln = 'Mei';
}elseif($this->input->post('bulan') == '06'){
    $bln = 'Juni';
}elseif($this->input->post('bulan') == '07'){
    $bln = 'Juli';
}elseif($this->input->post('bulan') == '08'){
    $bln = 'Agustus';
}elseif($this->input->post('bulan') == '09'){
    $bln = 'September';
}elseif($this->input->post('bulan') == '10'){
    $bln = 'Oktober';
}elseif($this->input->post('bulan') == '11'){
    $bln = 'November';
}elseif($this->input->post('bulan') == '12'){
    $bln = 'Desember';
}


 ?>
     <!-- table -->
     <div class="card-body" style="margin-top: -20px">
    <div class="row">
    <div class="col">
    <div class="card">
    <div class="card-header border-0">
    <div class="row align-item-center">
        <div class="col">
        <h3 class="mb-0">Laporan Usulan Kegiatan Bulan <?php echo $bln ?></h3>
        </div>
    </div>
    </div>
        <div class="table-responsive">
            <table class="table align-items-center table-flush table-striped table-sm myTable" >
                <thead class="thead-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Pengusul</th>
                        <th scope="col">Judul Kegiatan</th>
                        <th scope="col">Tanggal Usulan</th>
                        <th scope="col">Bagian</th>
                        <th scope="col">Anggaran</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                  <?php 
                   $pencarian = $this->input->post('tahun').'-'.$this->input->post('bulan');
                   $progres = $this->input->post('progres');
                   $bagian = $this->input->post('bagian');

                  if(empty($this->input->post('progres'))){
                    $usulan = $this->m_dashboard->laporan_usulan($pencarian,$bagian)->result();

                   }elseif($this->input->post('progres')=='setujui'){
                    $usulan = $this->m_dashboard->laporan_usulan_setujui($pencarian,$bagian)->result();

                   }elseif($this->input->post('progres')=='tolak'){
                    $usulan = $this->m_dashboard->laporan_usulan_tolak($pencarian,$bagian)->result();
                    
                   }elseif($this->input->post('progres')=='proses'){
                    $usulan = $this->m_dashboard->laporan_usulan_proses($pencarian,$bagian)->result();
                    
                   }
                  $no=0;
                  foreach($usulan as $rec){
                  $no++;
                  ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?php echo $rec->nama_pengusul ?></td>
                        <td><?php echo $rec->judul_kegiatan ?></td>
                        <td><?php echo date("d M Y",strtotime($rec->tanggal_input)) ?></td>
                        <td><?php echo $rec->namabagian ?></td>
                        <td>Rp. <?php echo number_format($rec->anggaran) ?></td>
                        <td> <span class="text-primary"> <?php 
                         $progres_usulan = $this->m_dashboard->where('progres_usulan',array('idusulan' => $rec->idusulan))->row();
                         $date_now = date("Y-m-d");
                         if($rec->status_kegiatan=='2'){ echo "Kegiatan Ditolak"; }else{
                         if($progres_usulan->validasi_ppk=='1'){ echo 'Validasi PPK'; }
                         elseif($progres_usulan->validasi_bendahara=='1'){ echo 'Validasi Bendahara'; }
                         elseif($progres_usulan->validasi_dirut=='1'){ echo 'Validasi Direktur';  }
                         elseif($progres_usulan->validasi_umk=='1'){ echo "Validasi UMK"; }
                         elseif($progres_usulan->validasi_umk=='2'){
                         if($rec->tanggal < $date_now ){ echo "Kegiatan Belum Dilaksanakan"; }else{
                          if(empty($rec->upload_lpj)){ echo "Belum Upload LPJ"; }else{ echo "Berkas Lengkap"; }
                         }
                         }
                        }
                          ?>
                        </span>
                         </td>
                       
                    </tr>

                  <?php } ?>
                    </tbody>
            </table>
        </div>


    </div>
    </div>
    </div>
    </div>

<hr></hr>
<HR></HR>

<?php } ?>