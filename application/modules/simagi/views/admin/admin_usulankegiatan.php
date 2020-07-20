
    <div class="card-shadow">
        
        <div class="card-body">
        <div class="row">
        <div class="col">

        <!-- <div class="card">
        <div class="card-header border-0">         
    
                <form method="post" action="<?php echo base_url() ?>simagi/admin/usulan_kegiatan">

            <div class="row">
                <div class="col-md-8">
                    <select class="form-control" name="kategori">
                        <option value="">Semua</option>
                        <option value="proses">Prosess</option>
                        <option value="setujui">Di Setujui</option>
                        <option value="tolak">Di Tolak</option>
                     </select>
                </div>
                <div class="col-md-4"><button type="submit" class="btn btn-primary" >Tampilkan</button></div>

            </div>

                </form>

        </div>
            
    
        </div> -->


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
                       if(empty($this->input->post('kategori'))){
                        $daftar_usulan = $this->m_dashboard->usulan_bendahara()->result();

                       }elseif($this->input->post('kategori')=='setujui'){
                        $daftar_usulan = $this->m_dashboard->usulan_bendahara_setujui()->result();

                       }elseif($this->input->post('kategori')=='tolak'){
                        $daftar_usulan = $this->m_dashboard->usulan_bendahara_tolak()->result();
                        
                       }elseif($this->input->post('kategori')=='proses'){
                        $daftar_usulan = $this->m_dashboard->usulan_bendahara_proses()->result();
                        
                       }
                        
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
                                <a href="<?php echo base_url() ?>simagi/admin/detail/<?php echo $rec->idusulan ?>" class="btn btn-info btn-sm">Detail</a>

                                <?php 
                                $progress = $this->m_dashboard->where('progres_usulan',['idusulan' => $rec->idusulan])->row();

                                if($progress->validasi_umk=='2'){
                                ?>
                                <a href="<?php echo base_url() ?>simagi/admin/permohonan_umk/<?php echo $rec->idusulan ?>" class="btn btn-primary btn-sm">Permohonan UMK</a>
                                <?php }else{ ?> 
                                    <button type="button" class="btn btn-default btn-sm" disabled>Permohonan UMK</button>
                                    
                                    <?php } ?>
                            </td>
                        </tr>
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
    
    