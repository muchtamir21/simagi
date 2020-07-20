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
                          <a href="<?php echo base_url() ?>assets/document/<?php echo $proposal->file_upload  ?>" class="btn btn-primary btn-sm">Download</a>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="" class="form-control-label">Surat Undangan</label><br>
                          <a href="<?php echo base_url() ?>assets/document/<?php echo $surat->file_upload  ?>" class="btn btn-primary btn-sm">Download</a>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="" class="form-control-label">RAB 
                            <!-- <span class="badge badge-danger">Rev</span>  -->
                         </label><br>
                          
                         
                          <?php
                          if($progres_usulan->revisi=='1'){ ?>

                              <a href="<?php echo base_url() ?>simagi/pengusul/editusulan/<?php echo $usulan->idusulan ?>" class="btn btn-warning btn-sm">Revisi</a>
                          <?php }else{ ?> 
  <a href="<?php echo base_url() ?>assets/document/<?php echo $rab->file_upload  ?>" class="btn btn-primary btn-sm">Download</a>

                          <?php }
                           ?>
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

                        <button type="button" data-toggle="modal" data-target="#uploadlpj" class="btn btn-info btn-sm" >Upload</button>
                        <?php }else{?>
                          <a href="<?php echo base_url() ?>assets/document/<?php echo $usulan->upload_lpj  ?>" target="_blank" class="btn btn-primary btn-sm">Download</a>
                          <?php } ?>
                      <?php }else{
                        ?>
                         <button type="button" data-toggle="modal" data-target="#uploadlpj" class="btn btn-default btn-sm" disabled >Upload</button>
                       
                        <?php } ?>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="" class="form-control-label">Disposisi</label><br>
                             <?php
                              $progress_usulan = $this->m_dashboard->where('progres_usulan',array('idusulan' => $usulan->idusulan ))->row();
                              if($progress_usulan->validasi_dirut=='2'){
                        if(empty($usulan->upload_disposisi)){ 
                          
                     ?>
                       <button type="button" data-toggle="modal" data-target="#modaldisposisi" class="btn btn-info btn-sm">Upload</button>
                     <?php }else{
                        ?> 
                        <a href="<?php echo base_url() ?>assets/document/<?php echo $usulan->upload_disposisi  ?>" target="_blank" class="btn btn-primary  btn-sm">Download</a>
                  <?php } 
                               }else{ 
                               ?>
                               <button type="button" class="btn btn-default btn-sm" disabled >Upload</button>
                         <?php 
                      }
                      ?>
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="" class="form-control-label">Permohonan UMK</label><br>
                             <?php
                              $progress_usulan = $this->m_dashboard->where('progres_usulan',array('idusulan' => $usulan->idusulan ))->row();
                              if($progress_usulan->validasi_umk=='2'){
                     
                     ?>
                
                        <a href="<?php echo base_url() ?>simagi/pengusul/cetak_permohonan_umk/<?php echo $usulan->idusulan  ?>" target="_blank" class="btn btn-primary btn-sm">Cetak</a>
                  <?php  }else{ 
                               ?>
                               <button type="button" class="btn btn-default btn-sm" disabled >Cetak</button>
                         <?php 
                      }
                      ?>
                        </div>
                      </div>
                    </div>


                     

<!-- Modal lpj-->
<div id="uploadlpj" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Validasi</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <form enctype="multipart/form-data" action="<?php echo base_url() ?>simagi/pengusul/upload_lpj/<?php echo $usulan->idusulan ?>"  method="POST">
      
     <div class="form-group">
      <label class="form-control-label" for="" >Perubahan Anggaran</label>
      <input type="text" name="anggaran" class="form-control" value="<?php echo $usulan->anggaran ?>">
    </div> 
     <div class="form-group">
      <label class="form-control-label" for="" >File LPJ</label>
      <input type="file" name="file_lpj" class="form-control"></input>
    </div>
      <div class="modal-footer">
       <button type="submit" class="btn btn-success" >Upload</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
      </div>
  </form>
      </div>
    </div>
  </div>
</div>
<!-- end modal daftar -->

<!-- Modal Disposisi-->
<div id="modaldisposisi" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Validasi</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <form enctype="multipart/form-data" action="<?php echo base_url() ?>simagi/pengusul/upload_disposisi/<?php echo $usulan->idusulan ?>" method="POST">
      <div class="form-group">
      <label class="form-control-label" for="" >File Disposisi</label>
      <input type="file" name="file_disposisi" class="form-control"></input>
    </div>
      <div class="modal-footer">
       <button type="submit" class="btn btn-success" >Upload</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
      </div>
  </form>
      </div>
    </div>
  </div>
</div>
<!-- end modal daftar -->





<!-- Modal Revisi-->
<div id="modalrevisi" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Validasi</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <form action="" method="POST">
        <div class="form-group">
          <label for="" class="form-control-label">Revisi</label>
          <button class="btn btn-info btn-sm">Upload</button>
        </div>
     <div class="form-group">
      <label class="form-control-label" for="" >Catatan</label>
      <textarea name="" id="" cols="30" rows="4" class="form-control"></textarea>
    </div>
      <div class="modal-footer">
       <button type="submit" class="btn btn-success" data-target="modal">Upload</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
      </div>
  </form>
      </div>
    </div>
  </div>
</div>
<!-- end modal daftar -->


                    </div>
                    <div class="row">
                <div class="col-lg-11">
                         </div>
            </div>
                    
        
                  </div>
                </form>
              </div>
            </div>

            <div class="card shadow">
              <div class="card-body">

<?php
$daftar_catatan = $this->m_dashboard->where('catatan',['idusulan' => $usulan->idusulan] )->result();

foreach ($daftar_catatan as $rec ) {

  # code...
if($rec->id_user==$this->session->userdata('id_user')){ ?>
     <div class="col-md-12">
                    <div class="col-md-12 " >
                      <label class="text-success"><b><?php
                      $pengguna = $this->m_dashboard->where('pengguna',['idpengguna' => $rec->id_user])->row(); echo $pengguna->namapengguna;
                       ?></b></label>
                    </div>
                    <div class="col-md-12 ">
                      <label class="text-default"><?php echo $rec->catatan ?></label>
                    </div>
                      <?php if(empty($rec->upload)){}else{ ?>
                    <div class="col-md-12 ">

                       <a href="<?php echo base_url() ?>assets/document/<?php echo $rec->upload  ?>" target="_blank" class="btn btn-primary btn-sm">Download</a>
                    </div>
                  <?php } ?>
                  </div>
                  <hr>
 <?php }else{ ?> 

     <div class="col-md-12">
                    <div class="col-md-12 text-right" >
                      <label class="text-primary"><b><?php
                      $pengguna = $this->m_dashboard->where('pengguna',['idpengguna' => $rec->id_user])->row(); echo $pengguna->namapengguna;
                       ?></b></label>
                    </div>
                    <div class="col-md-12 text-right">
                      <label class="text-default"><?php echo $rec->catatan ?></label>
                    </div>
                      <?php if(empty($rec->upload)){}else{ ?>
                    <div class="col-md-12 text-right">

                       <a href="<?php echo base_url() ?>assets/document/<?php echo $rec->upload  ?>" target="_blank" class="btn btn-primary btn-sm">Download</a>
                    </div>
                  <?php } ?>
                  </div>
                  <hr>
 <?php }
 ?>
             

<?php } ?>

                  <div class="col-md-12">
                    <form action="<?php echo base_url() ?>simagi/pengusul/kirim_catatan/<?php echo $usulan->idusulan ?>" method="POST" >
       <?php 
        if($usulan->status_kegiatan=='2'){ }else{ 


       ?>
                    <div class="col-md-12">
                     <div class="form-group">
      <label class="form-control-label" for="" >Catatan</label>
      <textarea name="catatan" id="" cols="30" rows="4" class="form-control"></textarea>
    <button type="submit" class="btn btn-primary" style="margin-top: 10px;float: right;" data-target="modal">Kirim</button>
    </div>
                    </div>
                  <?php } ?>

                      </form>
                  </div>
                    
              </div>
            </div>
            <hr></hr>


</div>

