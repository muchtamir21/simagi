<br><div class="container-fluid">
<div class="card shadow">
              <div class="card-header">
                <h3 class="mb-0">Usulan Kegiatan</h3>
              </div>
              <div class="card-body">
                <form method="POST" action="<?php echo base_url() ?>simagi/pengusul/add_usulan">
                  <h6 class="heading-small text-muted mb-4">User information</h6>
                  <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-pengusul" >Nama Pengusul</label>
                          <input type="text" id="input-pengusul"  name="nama_pengusul" class="form-control" placeholder="Nama Lengkap" >
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-nomor-kegiatan">Nomor Surat Kegiatan</label>
                          <input type="text" name="no_surat" id="input-nomor-kegiatan"  class="form-control" placeholder="Nomor Surat Kegiatan">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="input-judul-kegiatan">Judul Kegiatan</label>
                          <input type="text" name="judul_kegiatan" id="input-judul-kegiatan" class="form-control" placeholder="Nama Kegiatan">
                        </div>
                      </div>
                     </div>
                      <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="input-judul-kegiatan"> Anggaran</label>
                          <input type="number" name="anggaran" id="input-judul-kegiatan" value="" class="form-control" placeholder="Jumlah Anggaran">
                        </div>
                      </div>
                     </div>
                     <div class="row">
                      <div class="col-md-12">
                      <div class="form-group">
                          <label  class="form-control-label">Tangggal Acara</label>
                          <input class="form-control" type="text" name="tanggal" id="datepicker"  >
                      </div>
                      </div>
                     </div>
                   
                     <div class="row">
                      <div class="col-sm-4 " >
                    
                      <button type="button" class="btn btn-default " disabled>Kirim</button>
                      
                      <button type="submit" class="btn btn-warning">Simpan</button>
                      </div>
                  </div>
                  </div>
                </form><br>
                <br>
                
                <div class="card-footer">
                
              </div>
            </div>
            <hr></hr>
</div>
<HR></HR>