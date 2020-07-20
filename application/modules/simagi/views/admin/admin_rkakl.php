
     <!-- table -->
     <div class="card-body">
    <div class="row">
    <div class="col">
    <div class="card">
    <div class="card-header border-0">
    <div class="row align-item-center">
        <div class="col">
        <h3 class="mb-0">Laporan RKAKL</h3>
        </div>
        <div class="row">
        <div class="col-12   text-right ">
          <a href="" class="btn btn-sm btn-primary " data-toggle="modal" data-target="#modaltambah">Tambah <br> RKAKL <i class="fa fa-plus"></i></a>
        </div>
        <div class="col-5  text-right">
         <!--  <a href="" class="btn btn-sm btn-primary"data-toggle="modal" data-target="#modalpengeluaran">Pengeluaran RKAKL <i class="fa fa-plus"></i></a> -->
        </div>
        </div>

        <!-- Modal Tambah RKAKL -->
<div id="modaltambah" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah RKAKL</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <form action="<?= base_url('simagi/admin/tambah_rkakl'); ?>" method="POST">
     
    <div class="form-group">
      <label class="form-control-label" for="kegiatan" >Kegiatan</label>
      <input type="text" id="kegiatan" name="kegiatan" class="form-control" placeholder="Kegiatan">
    </div>
    <div class="form-group">
      <label class="form-control-label" for="anggaran" >Anggaran</label>
      <input type="number" id="anggaran" name="anggaran" class="form-control" placeholder="Anggaran">
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

<!-- Modal Tambah Bagian -->
<div id="modalpengeluaran" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Pengeluaran</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <form action="<?= base_url('simagi/admin/pengeluaran_rkakl'); ?>" method="POST">
    <div class="form-group">
      <label class="form-control-label" >Kategori</label>
        <select class="form-control form-control-user" id="judulkegiatan" name="idrkakl">
        <?php foreach($rkakl_daftar as $rd){ ?>
        <option value="<?php echo $rd->idrkakl ?>" ><?php echo $rd->kegiatan ?></option>
        <?php } ?>
        </select>
    </div>
     <div class="form-group">
      <label class="form-control-label" for="judulkegiatan" >Judul Kegiatan</label>
      <input type="text" id="idpengeluaran" name="judulkegiatan" class="form-control" placeholder="Jumlah Kegiatan">
    </div>
    <div class="form-group">
      <label class="form-control-label" for="idpengeluaran" >Jumlah Pengeluaran</label>
      <input type="number" id="idpengeluaran" name="jumlahpengeluaran" class="form-control" placeholder="Jumlah Pengeluaran">
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
            <table class="table align-items-center table-flush table-striped table-sm  ">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kegiatan</th>
                        <th scope="col">Total Anggaran</th>
                        <th scope="col">Sisa Anggaran</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $no=0;
                foreach($rkakl_daftar as $rec){
                $no++;
                ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td>
                          <h3><?php echo $rec->kegiatan ?></h3>   
                        </td>
                        <td>
                          <h3>Rp. <?php echo number_format($rec->jumlah_biaya) ?></h3>
                        </td>
                        <td>
                          <h3></h3>
                        </td>
                        <td>
                          <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modaledit<?php echo $no; ?>" ><i class="fa fa-edit"></i></button>
                          <!-- <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalhapus<?php echo $no; ?>"><i class="fa fa-trash"></i></button> -->
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
      <form action="<?= base_url('simagi/admin/hapus_rkakl'); ?>" method="POST">
      <input type="hidden" id="id" name="idrkakl" class="form-control" placeholder="Kegiatan" value="<?php echo $rec->idrkakl ?>">
    </div>
    <div class="form-group">
    <center>
      <label  class="form-control-label" for="warning" >Hapus data RKAKL Kegiatan <b><?php echo $rec->kegiatan ?></b>?</label>
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
                    
<!-- Modal Edit Rkakl -->
<div id="modaledit<?php echo $no; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

   <!-- Modal content-->
   <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit RKAKL</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <form action="<?= base_url('simagi/admin/edit_rkakl'); ?>" method="POST">
     
    <div class="form-group">
      <label class="form-control-label" for="kegiatan" >Kegiatan</label>
      <input type="text" id="kegiatan" name="kegiatan" class="form-control" placeholder="Kegiatan" value="<?php echo $rec->kegiatan ?>">
      <input type="hidden" id="id" name="idrkakl" class="form-control" placeholder="Kegiatan" value="<?php echo $rec->idrkakl ?>">

    </div>
    <div class="form-group">
      <label class="form-control-label" for="anggaran" >Anggaran</label>
      <input type="number" id="anggaran" name="anggaran" class="form-control" placeholder="Anggaran" value="<?php echo $rec->jumlah_biaya ?>">
      </div>


      <div class="modal-footer">
       <button type="submit" class="btn btn-success" data-target="modal">Simpan</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
      </div>
   
  </form>
      </div>
    </div>
  </div>
</div>
<!-- end modal daftar -->


<?php 
$ns = 0;
  $pengeluaran = $this->m_dashboard->where('usulankegiatan',['id_rkakl' => $rec->idrkakl,'status_kegiatan' => '0' , 'upload_umk !=' => '' ])->result();

  foreach($pengeluaran as $red ){
      $ns++;

      if($ns==1){
        $tambah = $red->anggaran;
        $hasil_pengurangan =  $rec->jumlah_biaya - $tambah;
      }else{
        $tambah = $tambah + $red->anggaran;
        $hasil_pengurangan =  $rec->jumlah_biaya - $tambah;
      }

   // echo   $tt_pengeluaran = $hasil_pengurangan ;
   ?>

<tr>
                        <td> </td>
                        <td>
                          <?php echo $red->judul_kegiatan ?>
                        </td>
                        <td>
                          Rp. <?php echo number_format($red->anggaran) ?>
                        </td>
                        <td>
                        <h3>Rp. <?php echo number_format($hasil_pengurangan) ?> </h3>
                        </td>
                      
                    </tr>

                    
   <?php
   


  }

 

?>


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