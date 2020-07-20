
     <!-- table -->
     <div class="card-body">
    <div class="row">
    <div class="col">
    <div class="card">
    <div class="card-header border-0">
    <div class="row align-item-center">
        <div class="col">
        <h2 class="mb-0" align="center">Laporan RKAKL</h2>
        </div>

    </div>
    </div>
        <div class="table-responsive">
            <table class="table align-items-center table-flush table-striped table-sm">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kegiatan</th>
                        <th scope="col">Total Anggaran</th>
                        <th scope="col">Sisa Anggaran</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $no=0;
                foreach($rkakldaftar_dirut as $rdr){
                $no++;
                ?>
                    <tr>
                    <td><?= $no ?></td>
                        <td>
                          <h3><?php echo $rdr->kegiatan ?></h3>   
                        </td>
                        <td>
                          <h3>Rp. <?php echo number_format($rdr->jumlah_biaya) ?></h3>
                        </td>
                        <td>
                          <h3></h3>
                        </td>
                    </tr>



                    <?php 
$ns = 0;
$pengeluaran = $this->m_dashboard->where('usulankegiatan',['id_rkakl' => $rec->idrkakl,'status_kegiatan' => '0' , 'upload_umk !=' => '' ])->result();


  foreach($pengeluaran as $red ){
      $ns++;

      if($ns==1){
        $tambah = $red->jumlah_pengeluaran;
        $hasil_pengurangan =  $rdr->jumlah_biaya - $tambah;
      }else{
        $tambah = $tambah + $red->jumlah_pengeluaran;
        $hasil_pengurangan =  $rdr->jumlah_biaya - $tambah;
      }

   // echo   $tt_pengeluaran = $hasil_pengurangan ;
   ?>

<tr>
                        <td> </td>
                        <td>
                          <?php echo $red->judul_kegiatan ?>
                        </td>
                        <td>
                          Rp. <?php echo number_format($red->jumlah_pengeluaran) ?>
                        </td>
                        <td>
                        Rp. <?php echo number_format($hasil_pengurangan) ?>
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