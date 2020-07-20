
    <div class="card-shadow">
        
    <div class="card-body">
    <div class="row">
    <div class="col">

    <div class="card">
    <div class="card-header border-0">
    <div class="row align-item-center">
        <div class="col">
        <h2 class="mb-0" align="center">Usulan Kegiatan</h2>
        </div>

    </div>
    </div>
        <div class="table-responsive">
            <table class="table align-items-center table-flush myTable">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tangggal</th>
                        <th scope="col">Nama Pengusul</th>
                        <th scope="col">Judul Kegiatan</th>
                        <th scope="col">No Surat Kegiatan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                   
                    $daftar_usulan = $this->m_dashboard->where('usulankegiatan',array('id_user'=> $this->session->userdata('id_user')))->result();
                    $no=0;
                    foreach($daftar_usulan as $rec ){
                    $no++;
                    ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo date("d M Y ", strtotime($rec->tanggal)) ?></td>
                        <td><?php echo $rec->nama_pengusul ?></td>
                        <td><?php echo $rec->judul_kegiatan ?></td>
                        <td><?php echo $rec->no_suratusulan ?></td>
                        <td>
                            <a href="<?php echo base_url() ?>simagi/pengusul/detail_usulan/<?php echo $rec->idusulan ?>" class="btn btn-info btn-sm">Detail</a>
                            <?php
                            if($rec->status_kegiatan=='2'){ ?>

                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modaltolak<?php echo $no; ?>">Usulan Ditolak</button>
                             <?php }else{ ?> 
 
                            <a href="<?php echo base_url() ?>simagi/pengusul/editusulan/<?php echo $rec->idusulan ?>" class="btn btn-success btn-sm">Edit</a>
                             <?php }
                             ?>
                           

                        </td>
                    </tr>
                       <!-- Modal Hapus -->
<div id="modaltolak<?php echo $no; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

   <!-- Modal content-->
   <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Keterangan Usulan Kegiatan Di Tolak</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      
    
    </div>
    <div class="form-group">
    <center>
      <label  class="form-control-label" for="warning" ><?php 
      $catatan = $this->m_dashboard->tolak_catatan($rec->idusulan)->row();

      echo $catatan->catatan;
       ?></label>
                </center>  
    </div>
      <div class="modal-footer">
      
        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
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
     

    </div>

