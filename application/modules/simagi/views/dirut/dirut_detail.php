<br><div class="container-fluid">

    <div class="card-header">
             

    <?php  $progres_usulan = $this->m_dashboard->where('progres_usulan',array('idusulan' => $usulan->idusulan))->row(); ?>
<?php 

if($progres_usulan->validasi_ppk=='99'){ ?> 
<h3 class="mb-0 text-danger"align="center"> Usulan Kegiatan Ditolak</h3>
<?php  }else{ ?>
                  <h3 class="mb-0"align="center"> Progress Validasi</h3>
              <?php } ?>
              </div>
<div class="card-body">
  <center>
  <div class="col-md-10">
<div class="row">  
    <div class="col-md-2"> 
<?php
if($progres_usulan->validasi_ppk=='1'){ ?> 
  <center>
    <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow" >
                        <i class="ni ni-time-alarm"></i>
          </div>
    </center>
<center>  
      <label for="input-judul-kegiatan" style="margin-top: 10px;width: 100%" class="text-primary">  <b>PPK</b> </label>
       
</center>
     

<?php }elseif ($progres_usulan->validasi_ppk=='2') { ?>
  <center>
    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow" >
                        <i class="ni ni-time-alarm"></i>
          </div>
    </center>
<center>  
      <label for="input-judul-kegiatan" style="margin-top: 10px;" class="text-success">  <b>PPK</b> </label>
</center>
<?php }elseif ($progres_usulan->validasi_ppk=='99'){ ?>
  <center>
    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow" >
                        <i class="ni ni-time-alarm"></i>
          </div>
    </center>
<center>  
      <label for="input-judul-kegiatan" style="margin-top: 10px;" class="text-danger">  <b>PPK</b> </label>
</center>
<?php }else{ ?>
<center>
    <div class="icon icon-shape bg-gradient-default text-white rounded-circle shadow" >
                        <i class="ni ni-time-alarm"></i>
          </div>
    </center>
<center>  
      <label for="input-judul-kegiatan" style="margin-top: 10px;" >  <b>PPK</b> </label>
</center>
  <?php
}
 ?>
    
  </div>
<div class="col-md-2"> 

  <?php
if($progres_usulan->validasi_bendahara=='1'){ ?> 
  <center>
    <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow" >
                        <i class="ni ni-time-alarm"></i>
          </div>
    </center>
<center>  
      <label for="input-judul-kegiatan" style="margin-top: 10px;" class="text-primary">  <b>Bendahara</b> </label>
</center>
<?php }elseif ($progres_usulan->validasi_bendahara=='2') { ?>
  <center>
    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow" >
                        <i class="ni ni-time-alarm"></i>
          </div>
    </center>
<center>  
      <label for="input-judul-kegiatan" style="margin-top: 10px;" class="text-success">  <b>Bendahara</b> </label>
</center>
<?php }else { ?>
<center>
    <div class="icon icon-shape bg-gradient-default text-white rounded-circle shadow" >
                        <i class="ni ni-time-alarm"></i>
          </div>
    </center>
<center>  
      <label for="input-judul-kegiatan" style="margin-top: 10px;" >  <b>Bendahara</b> </label>
</center>
  <?php
}
 ?>
  </div>

  <div class="col-md-2"> 
  <?php
if($progres_usulan->validasi_dirut=='1'){ ?> 
  <center>
    <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow" >
                        <i class="ni ni-time-alarm"></i>
          </div>
    </center>
<center>  
      <label for="input-judul-kegiatan" style="margin-top: 10px;" class="text-primary">  <b>Direktur</b> </label>
</center>
<?php }elseif ($progres_usulan->validasi_dirut=='99'){ ?>
  <center>
    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow" >
                        <i class="ni ni-time-alarm"></i>
          </div>
    </center>
<center>  
      <label for="input-judul-kegiatan" style="margin-top: 10px;" class="text-danger">  <b>Direktur</b> </label>
</center>
<?php }elseif ($progres_usulan->validasi_dirut=='2') { ?>
  <center>
    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow" >
                        <i class="ni ni-time-alarm"></i>
          </div>
    </center>
<center>  
      <label for="input-judul-kegiatan" style="margin-top: 10px;" class="text-success">  <b>Direktur</b> </label>
</center>
<?php }else { ?>
<center>
    <div class="icon icon-shape bg-gradient-default text-white rounded-circle shadow" >
                        <i class="ni ni-time-alarm"></i>
          </div>
    </center>
<center>  
      <label for="input-judul-kegiatan" style="margin-top: 10px;" >  <b>Direktur</b> </label>
</center>
  <?php
}
 ?>
  </div>

  <div class="col-md-2"> 
  <?php
if($progres_usulan->validasi_umk=='1'){ ?> 
  <center>
    <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow" >
                        <i class="ni ni-time-alarm"></i>
          </div>
    </center>
<center>  
      <label for="input-judul-kegiatan" style="margin-top: 10px;" class="text-primary">  <b>UMK</b> </label>
</center>
<?php }elseif ($progres_usulan->validasi_umk=='2') { ?>
  <center>
    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow" >
                        <i class="ni ni-time-alarm"></i>
          </div>
    </center>
<center>  
      <label for="input-judul-kegiatan" style="margin-top: 10px;" class="text-success">  <b>UMK</b> </label>
</center>
<?php }else { ?>
<center>
    <div class="icon icon-shape bg-gradient-default text-white rounded-circle shadow" >
                        <i class="ni ni-time-alarm"></i>
          </div>
    </center>
<center>  
      <label for="input-judul-kegiatan" style="margin-top: 10px;" >  <b>UMK</b> </label>
</center>
  <?php
}
 ?>
  </div>


   <div class="col-md-2"> 
  <?php
if(empty($usulan->upload_lpj)){ ?> 
 <center>
    <div class="icon icon-shape bg-gradient-default text-white rounded-circle shadow" >
                        <i class="ni ni-time-alarm"></i>
          </div>
    </center>
<center>  
      <label for="input-judul-kegiatan" style="margin-top: 10px;" >  <b>Upload LPJ</b> </label>
</center>
<?php }else{ ?>
  <center>
    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow" >
                        <i class="ni ni-time-alarm"></i>
          </div>
    </center>
<center>  
      <label for="input-judul-kegiatan" style="margin-top: 10px;" class="text-success">  <b>Upload LPJ</b> </label>
</center>
<?php } ?>
  </div>
  </div>


  

</div>
</center>
</div>
<div class="card shadow">
              <div class="card-header">
                <h3 class="mb-0"align="center">Detail Usulan Kegiatan</h3>
              </div>
              <div class="card-body">
                
                  <h6 class="heading-small text-muted mb-4">information</h6>
                  <div class="pl-lg-4">
                    <h3>Usulan Kegiatan</h3>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" >Nama Pengusul</label>
                          <ul><li><?php echo $usulan->nama_pengusul ?></li></ul>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" >Nama Bagian</label>
                          <ul><li><?php 
                          $pengguna = $this->m_dashboard->where('pengguna',array('idpengguna' => $usulan->id_user ))->row();
                          echo $pengguna->namabagian ?></li></ul>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" >Judul Kegiatan</label>
                          <ul><li><?php echo $usulan->judul_kegiatan ?></li></ul>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" >Nomor Surat</label>
                          <ul><li><?php echo $usulan->no_suratusulan ?></li></ul>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" >Tanggal</label>
                          <ul><li><?php echo date("d M Y", strtotime($usulan->tanggal)) ?></li></ul>
                        </div>
                      </div>
                       <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" >Anggaran</label>
                          <ul><li>Rp. <?php echo number_format($usulan->anggaran) ?></li></ul>
                        </div>
                   
                    </div>
                    </div>
                    <?php
                     $surat = $this->m_dashboard->cek_surat($usulan->idusulan)->row();
                     $rab = $this->m_dashboard->cek_rab($usulan->idusulan)->row();
                     $proposal = $this->m_dashboard->cek_proposal($usulan->idusulan)->row();
                    ?>
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="" class="form-control-label">Proposal</label><br>
                          <a href="<?php echo base_url() ?>assets/document/<?php echo $proposal->file_upload  ?>" class="btn btn-default btn-sm">Download</a>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="" class="form-control-label">Surat Undangan</label><br>
                          <a href="<?php echo base_url() ?>assets/document/<?php echo $surat->file_upload  ?>" class="btn btn-default btn-sm">Download</a>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="" class="form-control-label">RAB 
                            <!-- <span class="badge badge-danger">Rev</span>  -->
                         </label><br>
                          <a href="<?php echo base_url() ?>assets/document/<?php echo $rab->file_upload  ?>" class="btn btn-default btn-sm">Download</a>
                          <!-- <a href="" class="btn btn-danger btn-sm">Revisi</a> -->
                        </div>
                      </div>
                    </div>
                     <div class="row">
                           <div class="col-lg-4">
                        <div class="form-group">
                          <label for="" class="form-control-label">LPJ</label><br>

                        <?php
                        $tanggal_sekarang = date("Y-m-d");

                        if($usulan->tanggal<$tanggal_sekarang){ 
                          if(empty($usulan->upload_lpj)){
                          ?> 

                        <button type="button" class="btn btn-default btn-sm" disabled="" >Download</button>
                        <?php }else{?>
                          <a href="<?php echo base_url() ?>assets/document/<?php echo $usulan->upload_lpj  ?>" target="_blank" class="btn btn-primary btn-sm">Download</a>
                          <?php } ?>
                      <?php }else{
                        ?>
                         <button type="button" class="btn btn-default btn-sm" disabled="" >Download</button>
                       
                        <?php } ?>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="" class="form-control-label">Disposisi</label><br>
                             <?php
                              $progress_usulan = $this->m_dashboard->where('progres_usulan',array('idusulan' => $usulan->idusulan ))->row();
                                                     if(empty($usulan->upload_disposisi)){ 
                          
                     ?>
                       <button type="button" class="btn btn-default btn-sm" disabled="">Download</button>
                     <?php }else{
                        ?> 
                        <a href="<?php echo base_url() ?>assets/document/<?php echo $usulan->upload_disposisi  ?>" target="_blank" class="btn btn-primary  btn-sm">Download</a>
                  <?php }   
                      ?>
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="" class="form-control-label">Permohonan UMK</label><br>
                             <?php
                              $progress_usulan = $this->m_dashboard->where('progres_usulan',array('idusulan' => $usulan->idusulan ))->row();
                              if(empty($usulan->upload_umk)){
                     
                     ?>
                       <button type="button" class="btn btn-default btn-sm" disabled="">Download</button>
                     <?php }else{
                        ?> 
                        <a href="<?php echo base_url() ?>assets/document/<?php echo $usulan->upload_disposisi  ?>" target="_blank" class="btn btn-primary  btn-sm">Download</a>
                  <?php }   
                      ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-11">
                      <?php
      $progres = $this->m_dashboard->where('progres_usulan',array('idusulan' => $usulan->idusulan))->row();

      if($progres->validasi_dirut=='1'){ ?>
        <button type="button" data-toggle="modal" data-target="#modaltolak" class="btn btn-danger float-right" style="margin-left: 20px"  >Tolak</button>
                         <button type="button" data-toggle="modal" data-target="#modalvalidasi" class="btn btn-success float-right">Validasi</button>

                      
 <?php
      }else{ ?> 
          <button type="button"   class="btn btn-default float-right" data-target="modal" style="margin-left: 20px"  disabled  >
        Tolak</button>
        <button type="button"  type="submit" class="btn btn-default float-right" data-target="modal" disabled  >Validasi</button>
      
      
      <?php

      }
      ?> 
                      
                      
                        </div>
                      
                    </div>
                    
   
                  </div>

                  


<!-- Modal Revisi-->
<div id="modaltolak" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Validasi</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <form enctype="multipart/form-data" action="<?php echo base_url() ?>simagi/dirut/tolakusulan/<?php echo $usulan->idusulan ?>" method="POST"  >
            

     <div class="form-group">
      <label class="form-control-label" for="" >Catatan</label>
      <textarea name="catatan" id="" cols="30" rows="4" class="form-control"></textarea>
    </div>
      <div class="modal-footer">
       <button type="submit" class="btn btn-success" data-target="modal">Kirim</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
      </div>
  </form>
      </div>
    </div>
  </div>
</div>
<!-- end modal daftar -->

<!-- Modal Disposisi-->
<div id="modalvalidasi" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Validasi</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      
      
      <div class="form-group">
    <center>
      <label  class="form-control-label" for="warning" >Apakah Anda Memvalidasi Kegiatan <b><?php echo $usulan->judul_kegiatan ?></b> ?</label>
                </center>  
    </div>
      <div class="modal-footer">
  
      
      <a href="<?php echo base_url() ?>simagi/dirut/validasi_dirut/<?php echo $usulan->idusulan ?>" type="submit" class="btn btn-success" data-target="modal"  >Validasi</a>
      
 
       
       <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
      </div>
 
      </div>
    </div>
  </div>
</div>
<!-- end modal daftar -->
   
              </div>
            </div>
         
            <hr></hr>
</div>

