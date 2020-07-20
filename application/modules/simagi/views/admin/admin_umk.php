<div class="container-fluid">
<div class="card shadow">
              <div class="card-header">
                <h3 class="mb-0">Permohonan UMK</h3>
              </div>
              <div class="card-body">
                
              <?php
              $umk = $this->m_dashboard->where('umk',array('idusulan' => $this->uri->segment('4')))->row();

              if(empty($umk)){

              
              ?>
              <form method="POST" action="<?php echo base_url() ?>simagi/admin/tambah_permohonan_umk/<?php echo $this->uri->segment('4') ?>">
                  <h6 class="heading-small text-muted mb-4">User information</h6>
                  <div class="pl-lg-4">
                      <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="input-nomorumk">Nomor Surat Permohonan UMK</label>
                          <input type="text" id="input-nomorumk" name="nomorumk" class="form-control" placeholder="Nomor">
                        </div>
                      </div>
                     </div>
                     <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="input-lampiranumk">Lampiran</label>
                          <input type="text" id="input-lampiranumk" name="lampiran" class="form-control" placeholder="Lampiran">
                        </div>
                      </div>
                     </div>
                     <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="input-lampiranumk">Perihal</label>
                          <input type="text" id="input-lampiranumk" name="perihal" class="form-control" placeholder="Lampiran">
                        </div>
                      </div>
                     </div>
                     

                     <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="input-lampiranumk">Anggaran Kegiatan</label>
                          <?php $usulan = $this->m_dashboard->where('usulankegiatan',['idusulan' => $this->uri->segment('4')])->row(); ?>
                          <input type="text" id="input-lampiranumk" name="anggaran" class="form-control" value="Rp <?php echo number_format($usulan->anggaran) ?>" placeholder="Lampiran" disabled>
                        </div>
                      </div>
                     </div>

                     <div class="row">
                      <div class="col-sm-4 " >
                      <button type="submit" class="btn btn-primary ">Tambah</button>
                      </div>
                      </div>
                  </div>
                </form>

<?php
              }else{

              
?>

<form method="POST" action="<?php echo base_url() ?>simagi/admin/update_permohonan_umk/<?php echo $umk->idumk ?>">
                  <h6 class="heading-small text-muted mb-4">User information</h6>
                  <div class="pl-lg-4">
                      <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="input-nomorumk">Nomor Surat Permohonan UMK</label>
                          <input type="text" id="input-nomorumk" name="nomorumk" value="<?php echo $umk->nomor_umk ?>" class="form-control" placeholder="Nomor">
                        </div>
                      </div>
                     </div>
                     <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="input-lampiranumk">Lampiran</label>
                          <input type="text" id="input-lampiranumk" name="lampiran" value="<?php echo $umk->lampiran ?>" class="form-control" placeholder="Lampiran">
                        </div>
                      </div>
                     </div>
                     <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="input-lampiranumk">Perihal</label>
                          <input type="text" id="input-lampiranumk" name="perihal" value="<?php echo $umk->perihal ?>" class="form-control" placeholder="Lampiran">
                        </div>
                      </div>
                     </div>
                     <div class="row">
                      <div class="col-md-12">
                      <div class="form-group">
                          <label  class="form-control-label">Tangggal</label>
                          <input class="form-control"  name="tanggal" type="date" value="<?php echo $umk->tanggal_umk ?>"  >
                      </div>
                      </div>
                     </div>

                     <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="input-lampiranumk">Anggaran Kegiatan</label>
                          <input type="text" id="input-lampiranumk" name="anggaran" value="Rp.<?php echo number_format($umk->anggaran_kegiatan) ?>" class="form-control" placeholder="Lampiran" disabled>
                        </div>
                      </div>
                     </div>

                     <div class="row">
                      <div class="col-sm-4 " >
                      <button type="submit" class="btn btn-primary ">Edit</button>
                      </div>
                      </div>
                  </div>
                </form>

              <?php }
               ?>

                      <hr></hr>

<!-- 

                      <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="input-nomorumk">Nomor</label>
                          <input type="text" id="input-nomorumk" class="form-control" placeholder="Nomor">
                        </div>
                      </div>
                     </div>
                      <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="input-uraiankegiatan">Uraian Kegiatan</label>
                          <input type="text" id="input-uraiankegiatan" class="form-control" placeholder="Uraian Kegiatan">
                        </div>
                      </div>
                     </div>
                      <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="input-satuan">Satuan</label>
                          <input type="text" id="input-satuan" class="form-control" placeholder="Satuan">
                        </div>
                      </div>
                     </div>
                      <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="input-jumlah">Jumlah</label>
                          <input type="text" id="input-jumlah" class="form-control" placeholder="Jumlah">
                        </div>
                      </div>
                     </div>
                      <hr></hr>
                     <div class="row">
                      <div class="col-sm-4 " >
                      <a href="#!" class="btn btn-primary ">Kirim</a>
                      </div>
                  </div>
                  </div>
                </form>
              </div>
              <hr><br>
              <div class="table-responsive">
                <table class="table align-items-center table-flush myTable">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tangggal</th>
                            <th scope="col">Nama Pengusul</th>
                            <th scope="col">Judul Kegiatan</th>
                            <th scope="col">Surat UMK</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
    
                    <tbody>
                        <?php
                        $no=0;
                        $no++;
                        ?>
                        <tr>
                          <td>1</td>
                          <td>12/12/12</td>
                          <td>Anton</td>
                          <td>Lomba</td>
                          <td>file</td>
                          <td>
                            
                          </td>
                        </tr>
                        <?php  ?>
    
                    </tbody>
                </table>
            </div>
            <div class="card-footer py-4">
                <nav aria-label="...">
                    <ul class="pagination justify-content-end mb-0">
                        <li class="page-item disable">
                            <a href="" tabindex="-1" class="page-link">
                                <i class="fas fa-angle-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a href="" class="page-link">1</a>
                        </li>
                        <li class="page-item ">
                            <a href="" class="page-link">2<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item ">
                            <a href="" class="page-link">3</a>
                        </li>
                        <li class="page item">
                            <a href="" class="page-link">
                                <i class="fas fa-angle-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
     -->
<!-- 
              
            </div>
            <hr></hr> -->