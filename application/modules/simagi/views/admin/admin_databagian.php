
     <!-- table -->
     <div class="card-body">
    <div class="row">
    <div class="col">
    <div class="card">
    <div class="card-header border-0">
    <div class="row align-item-center">
        <div class="col">
        <h3 class="mb-0">Data Bagian</h3>
        </div>
        <div class="row">
        <div class="col  text-right">
            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalbagian">Tambah Bagian <i class="fa fa-plus"></i></button>
        </div>
        </div>

<!-- Modal Tambah Bagian -->
<div id="modalbagian" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Bagian</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <form action="<?= base_url('simagi/admin/tambah_bagian'); ?>" method="POST">
     <div class="form-group">
      <label class="form-control-label" for="namabagian" >Nama Bagian</label>
      <input type="text" id="namabagian" name="namabagian" class="form-control" placeholder="Nama Bagian">
    </div>
    <div class="form-group">
      <label class="form-control-label" >Level</label>
        <select class="form-control form-control-user" id="level" name="level">
    <?php foreach($level as $lvl){ ?>
        <option value="<?php echo $lvl->idlevel ?>"><?php echo $lvl->jenislevel ?></option>
    <?php } ?>
        </select>
    </div>
    <div class="form-group">
      <label class="form-control-label" >RKAKL</label>
        <select class="form-control form-control-user" id="rkakl" name="rkakl">
    <?php 
    $rkakl = $this->m_dashboard->semua('inputrkakl')->result();
    foreach($rkakl as $lvl){ 
      $bagians = $this->m_dashboard->where('bagian',['id_rkakl' => $lvl->idrkakl ])->row();
      if(empty($bagians)){ ?> 
 <option value="<?php echo $lvl->idrkakl ?>"><?php echo $lvl->kegiatan ?></option>
      <?php }else{ ?> 
 <option value="<?php echo $lvl->idrkakl ?>" disabled><?php echo $lvl->kegiatan ?> - Sudah Digunakan</option>
      <?php }
      ?>
       
    <?php } ?>
        </select>
    </div>
      <div class="modal-footer">
       <button type="submit" class="btn btn-success" data-target="modal">Tambah</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
      </div>
  </form>
      </div>
    </div>
  </div>
</div>
<!-- end modal daftar -->

    </div>
    </div>
        <div class="table-responsive">
            <table class="table align-items-center table-flush table-striped table-sm myTable">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Bagian</th>
                        <th scope="col">Level Pengguna</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  <?php 
                  $no=0;
                  foreach($bagianjoin as $bgn){
                  $no++;
                  ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?php echo $bgn->namabagian ?></td>
                        <td><?php echo $bgn->jenislevel ?></td>
                        <td>
                          <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modaledit<?php echo $no; ?>"><i class="fa fa-edit"></i></button>
                          <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalhapus<?php echo $no; ?>"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>

                    <!-- Modal Hapus -->
<div id="modalhapus<?php echo $no; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

   <!-- Modal content-->
   <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Hapus Bagian</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <form action="<?= base_url('simagi/admin/hapus_bagian'); ?>" method="POST">
      <input type="hidden" id="id" name="idbagian" class="form-control"  value="<?php echo $bgn->id ?>">
    </div>
    <div class="form-group">
    <center>
      <label  class="form-control-label" for="warning" >Hapus Data Bagian <b><?php echo $bgn->namabagian ?></b>?</label>
                </center>  
    </div>
      <div class="modal-footer">
       <button type="submit" class="btn btn-danger" data-target="modal">Hapus</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
      </div>
  </form>
      </div>
    </div>
  </div>
</div>
<!-- end modal daftar -->


<!-- Modal Edit Pengguna -->
<div id="modaledit<?php echo $no; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Data Bagian</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <form action="<?= base_url('simagi/admin/edit_bagian'); ?>" method="POST">
     <div class="form-group">
      <label class="form-control-label" for="namabagian" >Nama Bagian</label>
      <input type="text" id="namabagian" name="namabagian" class="form-control" placeholder="Nama Bagian"
      value="<?php echo $bgn->namabagian?>">
      <input type="hidden" id="id" name="idpengguna" class="form-control" placeholder="idbagian" 
      value="<?php echo $bgn->id ?>">
    </div>
    <div class="form-group">
      <label class="form-control-label" >Level</label>
        <select class="form-control form-control-user" id="level" name="level">
    <?php foreach($level as $lvl){ ?>
        <option value="<?php echo $lvl->idlevel ?>"><?php echo $lvl->jenislevel ?></option>
    <?php } ?>
        </select>
    </div>
      <div class="modal-footer">
       <button type="submit" class="btn btn-success" data-target="modal">Tambah</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
      </div>
  </form>
      </div>
    </div>
  </div>
</div>
<!-- end modal daftar -->

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