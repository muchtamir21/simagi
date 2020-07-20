
     <!-- table -->
     <div class="card-body">
    <div class="row">
    <div class="col">
    <div class="card">
    <div class="card-header border-0">
    <div class="row align-item-center">
        <div class="col">
        <h3 class="mb-0">Data Pengguna</h3>
        </div>
        <div class="row">
        <div class="col   text-right ">
          <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalpengguna">Tambah Pengguna <i class="fa fa-plus"></i></button>
        </div>
        </div>

        <!-- Modal Tambah Pengguna -->
<div id="modalpengguna" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Pengguna</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <form action="<?= base_url('simagi/admin/tambah_pengguna'); ?>" method="POST">
     <div class="form-group">
      <label class="form-control-label" for="namapengguna" >Nama Lengkap</label>
      <input type="text" id="namapengguna" name="namapengguna" class="form-control" placeholder="Nama Lengkap">
    </div>
    <div class="form-group">
      <label class="form-control-label" for="username" >Username</label>
      <input type="text" id="username" name="username" class="form-control" placeholder="Username">
    </div>
    <div class="form-group">
      <label class="form-control-label" for="password" >Password</label>
      <input type="text" id="password" name="password" class="form-control" placeholder="Password">
      </div>
    <div class="form-group">
      <label class="form-control-label" >Nama Bagian</label>
        <select class="form-control form-control-user" id="namabagian" name="namabagian">
        <?php foreach($bagian as $bg){ 
          $cek_pengguna = $this->m_dashboard->where('pengguna',['namabagian' => $bg->namabagian])->row();
          if(empty($cek_pengguna)){
?> 
 <option value="<?php echo $bg->id ?>"><?php echo $bg->namabagian ?></option>
<?php
          }else{ ?> 
 <option value="<?php echo $bg->id ?>" disabled><?php echo $bg->namabagian ?>- Sudah Digunakan</option>
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
            <table class="table align-items-center table-flush table-striped table-sm myTable" >
                <thead class="thead-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Nama Bagian</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  <?php 
                  $no=0;
                  foreach($pengguna_daftar as $pd){
                  $no++;
                  ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?php echo $pd->namapengguna ?></td>
                        <td><?php echo $pd->username ?></td>
                        <td><?php echo $pd->password ?></td>
                        <td><?php echo $pd->namabagian ?></td>
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
        <h4 class="modal-title">Hapus RKAKL</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <form action="<?= base_url('simagi/admin/hapus_pengguna'); ?>" method="POST">
      <input type="hidden" id="id" name="idpengguna" class="form-control" placeholder="Pengguna" value="<?php echo $pd->idpengguna ?>">
    </div>
    <div class="form-group">
    <center>
      <label  class="form-control-label" for="warning" >Hapus Data Pengguna <b><?php echo $pd->namapengguna ?></b>?</label>
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
        <h4 class="modal-title">Edit Data Pengguna</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <form action="<?= base_url('simagi/admin/edit_pengguna'); ?>" method="POST">
     <div class="form-group">
      <label class="form-control-label" for="namapengguna" >Nama Lengkap</label>
      <input type="text" id="namapengguna" name="namapengguna" class="form-control" placeholder="Nama Lengkap"
      value="<?php echo $pd->namapengguna?>">
      <input type="hidden" id="id" name="idpengguna" class="form-control" placeholder="idpengguna" 
      value="<?php echo $pd->idpengguna ?>">
    </div>
    <div class="form-group">
      <label class="form-control-label" for="username" >Username</label>
      <input type="text" id="username" name="username" class="form-control" placeholder="Username"
      value="<?php echo $pd->username?>">
    </div>
    <div class="form-group">
      <label class="form-control-label" >Nama Bagian</label>
        <select class="form-control form-control-user" id="namabagian" name="namabagian">
        <?php foreach($bagian as $bg){ 
          $cek_pengguna = $this->m_dashboard->where('pengguna',['namabagian' => $bg->namabagian])->row();
          if(empty($cek_pengguna)){
?> 
 <option value="<?php echo $bg->id ?>"><?php echo $bg->namabagian ?></option>
<?php
          }else{ ?> 
 <option value="<?php echo $bg->id ?>" disabled><?php echo $bg->namabagian ?>- Sudah Digunakan</option>
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