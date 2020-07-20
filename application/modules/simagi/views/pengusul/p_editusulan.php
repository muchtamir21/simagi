<br><div class="container-fluid">
<div class="card shadow">
              <div class="card-header">
                <h3 class="mb-0">Usulan Kegiatan</h3>
              </div>
              <div class="card-body">

                <?php
                      $progress_usulan = $this->m_dashboard->where('progres_usulan',array('idusulan' => $usulan->idusulan))->row();
                      if(empty($progress_usulan)){ ?> 

<form method="POST" action="<?php echo base_url() ?>simagi/pengusul/update_usulan" enctype="multipart/form-data">
                  <h6 class="heading-small text-muted mb-4">User information</h6>
                  <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-pengusul" >Nama Pengusul</label>
                          <input type="text" id="input-pengusul" value="<?php echo $usulan->nama_pengusul ?>"  name="nama_pengusul" class="form-control" placeholder="Nama Lengkap" >
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-nomor-kegiatan">Nomor Surat Kegiatan</label>
                          <input type="text" name="no_surat" value="<?php echo $usulan->no_suratusulan ?>" id="input-nomor-kegiatan"  class="form-control" placeholder="Nomor Surat Kegiatan">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="input-judul-kegiatan">Judul Kegiatan</label>
                          <input type="text" name="judul_kegiatan" value="<?php echo $usulan->judul_kegiatan ?>" id="input-judul-kegiatan" class="form-control" placeholder="Nama Kegiatan">
                        </div>
                      </div>
                     </div>
                      <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="input-judul-kegiatan"> Anggaran</label>
                          <input type="number" name="anggaran" id="input-judul-kegiatan" value="<?php echo $usulan->anggaran ?>" class="form-control" placeholder="Jumlah Anggaran">
                        </div>
                      </div>
                     </div>
                     <div class="row">
                      <div class="col-md-12">
                      <div class="form-group">
                          <label  class="form-control-label">Tangggal Acara</label>
                          <input class="form-control" type="date" name="tanggal"   value="<?php echo $usulan->tanggal ?>" >
                      </div>
                      </div>
                     </div>
                     <div class="row">
                         <div class="col-md-12">
                             <div class="form-group">
                                  <label class="form-control-label">Unggah TOR/Proposal</label>
                                  <input type="file" class="form-control-file" name="file_proposal" id="customFileLang" lang="en">
                                  <input type="hidden" class="form-control-file" name="idusulan" value="<?php echo $usulan->idusulan ?>">
                                  <small>Upload File Ukuran Maksimal 2 MB</small>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md-12">
                             <div class="form-group">
                                  <label class="form-control-label">Unggah RAB</label>
                                  <input type="file" class="form-control-file" name="file_rab" id="customFileLang" lang="en">
                                  <small>Upload File Ukuran Maksimal 2 MB</small>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md-12">
                             <div class="form-group">
                                  <label class="form-control-label">Unggah Surat Kegiatan</label>
                                  <input type="file" class="form-control-file" name="file_surat" id="customFileLang" lang="en">
                                  <small>Upload File Ukuran Maksimal 2 MB</small>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                      <div class="col-sm-4 " >
                    
                      <?php
                       $rab = $this->m_dashboard->cek_rab($usulan->idusulan)->row();
                        $proposal = $this->m_dashboard->cek_proposal($usulan->idusulan)->row();
                         $surat = $this->m_dashboard->cek_surat($usulan->idusulan)->row();
                   
                      if(empty($progress_usulan)){

                      if(empty($rab) || empty($proposal) || empty($surat) ){ ?> 
 <button type="buton" class="btn btn-default " disabled="">Kirim</a>
                      
                      <?php  }else{ ?>
 <a href="<?php echo base_url() ?>simagi/pengusul/kirim_usulan/<?php echo $usulan->idusulan ?>" class="btn btn-success ">Kirim</a>
                      
                     <?php } }else{ ?>
                        <button type="button" href="#" class="btn btn-default " disabled>Kirim</button>
                      
                     <?php }
                       ?>
                     
                      <button type="submit" class="btn btn-warning">Simpan</button>
                      </div>
                  </div>
                  </div>
                </form>


                      <?php }else{
                          if($progress_usulan->revisi=='1'){ ?> 

<form method="POST" action="<?php echo base_url() ?>simagi/pengusul/update_usulan" enctype="multipart/form-data">
                  <h6 class="heading-small text-muted mb-4">User information</h6>
                  <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-pengusul" >Nama Pengusul</label>
                          <input type="text" id="input-pengusul" value="<?php echo $usulan->nama_pengusul ?>"  name="nama_pengusul" class="form-control" placeholder="Nama Lengkap" >
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-nomor-kegiatan">Nomor Surat Kegiatan</label>
                          <input type="text" name="no_surat" value="<?php echo $usulan->no_suratusulan ?>" id="input-nomor-kegiatan"  class="form-control" placeholder="Nomor Surat Kegiatan">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="input-judul-kegiatan">Judul Kegiatan</label>
                          <input type="text" name="judul_kegiatan" value="<?php echo $usulan->judul_kegiatan ?>" id="input-judul-kegiatan" class="form-control" placeholder="Nama Kegiatan">
                        </div>
                      </div>
                     </div>
                      <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="input-judul-kegiatan"> Anggaran</label>
                          <input type="number" name="anggaran" id="input-judul-kegiatan" value="<?php echo $usulan->anggaran ?>" class="form-control" placeholder="Jumlah Anggaran">
                        </div>
                      </div>
                     </div>
                     <div class="row">
                      <div class="col-md-12">
                      <div class="form-group">
                          <label  class="form-control-label">Tangggal Acara</label>
                          <input class="form-control" type="date" name="tanggal"  value="<?php echo $usulan->tanggal ?>" >
                      </div>
                      </div>
                     </div>
                     <div class="row">
                         <div class="col-md-12">
                             <div class="form-group">
                                  <label class="form-control-label">Unggah TOR/Proposal</label>
                                  <input type="file" class="form-control-file" name="file_proposal" id="customFileLang" lang="en">
                                  <input type="hidden" class="form-control-file" name="idusulan" value="<?php echo $usulan->idusulan ?>">
                                  <small>Upload File Ukuran Maksimal 2 MB</small>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md-12">
                             <div class="form-group">
                                  <label class="form-control-label">Unggah RAB</label>
                                  <input type="file" class="form-control-file" name="file_rab" id="customFileLang" lang="en">
                                  <small>Upload File Ukuran Maksimal 2 MB</small>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md-12">
                             <div class="form-group">
                                  <label class="form-control-label">Unggah Surat Kegiatan</label>
                                  <input type="file" class="form-control-file" name="file_surat" id="customFileLang" lang="en">
                                  <small>Upload File Ukuran Maksimal 2 MB</small>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                      <div class="col-sm-4 " >
                    
                      <?php
                       $rab = $this->m_dashboard->cek_rab($usulan->idusulan)->row();
                        $proposal = $this->m_dashboard->cek_proposal($usulan->idusulan)->row();
                         $surat = $this->m_dashboard->cek_surat($usulan->idusulan)->row();
                   
                      if(empty($progress_usulan)){

                      if(empty($rab) || empty($proposal) || empty($surat) ){ ?> 
 <button type="buton" class="btn btn-default " disabled="">Kirim</a>
                      
                      <?php  }else{ ?>
 <a href="<?php echo base_url() ?>simagi/pengusul/kirim_usulan/<?php echo $usulan->idusulan ?>" class="btn btn-success ">Kirim</a>
                      
                     <?php } }else{ ?>
                        <button type="button" href="#" class="btn btn-default " disabled>Kirim</button>
                      
                     <?php }
                       ?>
                     
                      <button type="submit" class="btn btn-warning">Simpan</button>
                      </div>
                  </div>
                  </div>
                </form>
                          <?php }else{
                       ?> 
                  <h6 class="heading-small text-muted mb-4">User information</h6>
                  <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-pengusul" >Nama Pengusul</label>
                          <input type="text" id="input-pengusul"  value="<?php echo $usulan->nama_pengusul ?>"  name="nama_pengusul" class="form-control" placeholder="Nama Lengkap"  disabled >
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-nomor-kegiatan">Nomor Surat Kegiatan</label>
                          <input type="text" name="no_surat" value="<?php echo $usulan->no_suratusulan ?>" id="input-nomor-kegiatan"  class="form-control" placeholder="Nomor Surat Kegiatan" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="input-judul-kegiatan">Judul Kegiatan</label>
                          <input type="text" name="judul_kegiatan" value="<?php echo $usulan->judul_kegiatan ?>" id="input-judul-kegiatan" class="form-control" placeholder="Nama Kegiatan" disabled>
                        </div>
                      </div>
                     </div>
                      <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="input-judul-kegiatan"> Anggaran</label>
                          <input type="number" name="anggaran" id="input-judul-kegiatan" value="<?php echo $usulan->anggaran ?>" class="form-control" placeholder="Jumlah Anggaran" disabled>
                        </div>
                      </div>
                     </div>
                     <div class="row">
                      <div class="col-md-12">
                      <div class="form-group">
                          <label  class="form-control-label">Tangggal Acara</label>
                          <input class="form-control" type="date" name="tanggal"  value="<?php echo $usulan->tanggal ?>" disabled >
                      </div>
                      </div>
                     </div>
                     <div class="row">
                         <div class="col-md-12">
                             <div class="form-group">
                                  <label class="form-control-label">Unggah TOR/Proposal</label>
                                  <input type="file" class="form-control-file" disabled name="file_proposal" id="customFileLang" lang="en">
                                  <input type="hidden" class="form-control-file" disabled name="idusulan" value="<?php echo $usulan->idusulan ?>">
                                  <small>Upload File Ukuran Maksimal 2 MB</small>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md-12">
                             <div class="form-group">
                                  <label class="form-control-label">Unggah RAB</label>
                                  <input type="file" class="form-control-file" disabled name="file_rab" id="customFileLang" lang="en">
                                  <small>Upload File Ukuran Maksimal 2 MB <a target="_blank" href="<?php echo base_url('assets/document/template_rab.docx') ?>">Contoh Template RAB</a></small>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md-12">
                             <div class="form-group">
                                  <label class="form-control-label">Unggah Surat Kegiatan</label>
                                  <input type="file" class="form-control-file" disabled name="file_surat" id="customFileLang" lang="en">
                                  <small>Upload File Ukuran Maksimal 2 MB</small>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                      <div class="col-sm-4 " >
                    
                      <?php
                       $rab = $this->m_dashboard->cek_rab($usulan->idusulan)->row();
                        $proposal = $this->m_dashboard->cek_proposal($usulan->idusulan)->row();
                         $surat = $this->m_dashboard->cek_surat($usulan->idusulan)->row();
                   
                      if(empty($progress_usulan)){

                      if(empty($rab) || empty($proposal) || empty($surat) ){ ?> 
                      
                      <?php  }else{ ?>
                      
                     <?php } }else{ ?>
                        
                      
                     <?php }
                       ?>
                     
                      <button type="button" class="btn btn-info" disabled="">Masih Prosess Pengecekan</button>
                      </div>
                  </div>
                  </div>

                      <?php } }
                 ?>
                
                <br>
                <br><div class="card-footer">
                <div class="table-responsive">
                  <table class="table align-items-center table-flush table-striped table-sm">
                    <thead>
                    <tr>
                   
                    <th scope="col">Jenis File</th>
                    <th scope="col">File</th>
                    <th scope="col">Option</th>
                    </tr>
                    </thead>

                    <tbody>
                      <?php
                     
                      if(empty($proposal)){ }else{
                      ?>
                    <tr>
                      
                        <td>Proposal</td>
                         <td>
                         <a href="<?php echo base_url() ?>assets/document/<?php echo $proposal->file_upload  ?>" target="_blank" class="btn btn-success btn-sm" ><i class="fa fa-download"></i> Download</a>
                        </td>
                         <td>
                         <a href="<?php echo base_url() ?>simagi/pengusul/del_file/<?php echo $proposal->id_upload.'/'.$usulan->idusulan  ?>" class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></a>

                        </td>
                        </tr>
                      <?php } ?>

                      <?php
                     
                      if(empty($rab)){ }else{
                      ?>
                    <tr>
                    
                        <td>RAB</td>
                         <td>
                         <a href="<?php echo base_url() ?>assets/document/<?php echo $rab->file_upload  ?>" target="_blank" class="btn btn-success btn-sm" ><i class="fa fa-download"></i> Download</a>  </td>
                         <td>
                         <a href="<?php echo base_url() ?>simagi/pengusul/del_file/<?php echo $rab->id_upload.'/'.$usulan->idusulan  ?>" class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></a>

                        </td>
                        </tr>
                      <?php } ?>

                      
                      <?php
                     
                      if(empty($surat)){ }else{
                      ?>
                    <tr>
                        
                        <td>Surat Kegiatan</td>
                         <td>
                         <a href="<?php echo base_url() ?>assets/document/<?php echo $surat->file_upload  ?>" target="_blank" class="btn btn-success btn-sm" ><i class="fa fa-download"></i> Download</a>
                        </td>
                         <td>
                          <a href="<?php echo base_url() ?>simagi/pengusul/del_file/<?php echo $surat->id_upload.'/'.$usulan->idusulan  ?>" class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></a>

                        </td>
                        </tr>
                      <?php } ?>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <hr></hr>
</div>
<HR></HR>