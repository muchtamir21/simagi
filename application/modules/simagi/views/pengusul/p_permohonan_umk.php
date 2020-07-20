<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiva="X-UA-Compatible" content="IE=edge">

        <title>Cetak Surat</title>

        <link rel="stylesheet" href="" >

        <style>
            .line-title{
                border: 0;
                border-style: inset;
                border-top: 1px solid #000;
            }
        </style>

        <script type="text/javascript">
    window.print();
    </script>

        

       

</head>
   
    <body>
        <?php $umk = $this->m_dashboard->where('umk',['idusulan' => $this->uri->segment('4')])->row(); ?>
        <img src="<?php echo base_url() ?>assets/logo_poliwangi.png" style="position: absolute"; width="100px" height="auto" >
        <table style="width: 100%;">
            <tr>
                <td align="center">
                    <span style="line-height: 1.1; font-weight: bold; font-family: 'Times New Roman', Times, serif">
                         KEMENTERIAN RISET, TEKNOLOGI DAN PENDIDIKAN TINGGI<br>
                         POLITEKNIK NEGERI BANYUWANGI<br>
                        <a style="line-height: 1.1; font-size: 11px"> Jl. Raya Jember KM 13 Labanasem, Kabat, Banyuwangi, 68461 </a> <br>
                        <a style="line-height: 1.1; font-size: 11px"> Telepon / Faks : (0333) 636780 </a> <br>
                        <a style="line-height: 1.1; font-size: 11px"> E-mail : poliwangi@poliwangi.ac.id ; Website : http://www.poliwangi.ac.id </a> <br>
                    </span>
                </td>
            </tr>
        </table>
        <hr class="line-title">

        <!-- <table border="1" align="center">
            <tr style="">
                <td style="border-collapse: collapse; border: 1px solid black;">
                    <span style=" line-height: 1.5; font-weight: bold; font-family: 'Times New Roman', Times, serif">
                    SURAT KETERANGAN AKTIF KULIAH
                    </span> <br>
                    
                </td>
            </tr>
            <tr style="text-align: center;" style="padding-top: 0%;">
                <td style="border-collapse: collapse; border: 1px solid black;">
                <span>
                        Nomor : <?php echo $data->nomor_surat ?> /PL36/PK.05.00/2019
                    </span>
                </td>
            </tr>
        </table> -->
        <?php

$tahun = substr($umk->tanggal_umk,0,4);
$bulan = substr($umk->tanggal_umk,5,2);
$tanggal = substr($umk->tanggal_umk,8,2);
$cari_tanngal = $tahun.'-'.$bulan;

if($bulan == '01'){
    $bln = 'Januari';
}elseif($bulan == '02'){
    $bln = 'Februari';
}elseif($bulan == '03'){
    $bln = 'Maret';
}elseif($bulan == '04'){
    $bln = 'April';
}elseif($bulan == '05'){
    $bln = 'Mei';
}elseif($bulan == '06'){
    $bln = 'Juni';
}elseif($bulan == '07'){
    $bln = 'Juli';
}elseif($bulan == '08'){
    $bln = 'Agustus';
}elseif($bulan == '09'){
    $bln = 'September';
}elseif($bulan == '10'){
    $bln = 'Oktober';
}elseif($bulan == '11'){
    $bln = 'November';
}elseif($bulan == '12'){
    $bln = 'Desember';
}


 
?>
		<p style="margin-left: 0px; margin-right: 50px; text-align: justify;">
            <span style="margin-left: 0px;">
            <a style="margin-right: 100px">Nomor</a> : <?php echo  $umk->nomor_umk ?>
            <a style="margin-left: 170px;">Banyuwangi, <?php echo $tanggal.' '.$bln.' '.$tahun;  ?></a>
            </span> <br>
            <span style="margin-left: 0px;">
            <a style="margin-right: 83px">Lampiran</a> : <?php echo  $umk->lampiran ?>
            </span> <br>
            <span style="margin-left: 0px;">
            <a style="margin-right: 100px">Perihal</a> : <?php echo  $umk->perihal ?>
            </span>
        </p>

        <p style="margin-left: 0px; margin-right: 50px; text-align: justify;">
            <span style="margin-left: 0px;">
            <a style="margin-right: 100px">Kepada Yth.</a>
            <span style="margin-left: 0px;"><br>
            <a style="margin-right: 107px">Direktur Politeknik Banyuwangi</a>
            </span> <br>
            <span style="margin-left: 0px;">
            <a style="margin-right: 45px">di-</a>
            </span> <br>
            <span style="margin-left: 10px;">
            <a style="margin-right: 79px">B a n y u w a n g i</a>
            </span>
        </p>

        <p style="margin-left: 0px; margin-right: 0px; text-align: justify;">
            Untuk Pelaksanaan Kegiatan Akademik, dengan ini kami ajukan permohonan uang muka kerja dengan perincian sebagai berikut :
        <br style="line-height: 1;">
        </p>

        <table width="800" style="border-collapse: collapse; border: 1px solid black;">
        	<thead>
        		<tr style="border-collapse: collapse; border: 1px solid black;">
        			<th style="border-collapse: collapse; border: 1px solid black;">NO</th>
        			<th style="border-collapse: collapse; border: 1px solid black;">URAIAN KEGIATAN</th>
        			<th style="border-collapse: collapse; border: 1px solid black;">SATUAN</th>
        			<th style="border-collapse: collapse; border: 1px solid black;">JUMLAH</th>
        		</tr>
            </thead>
            <?php  ?>
        	<tbody>
                <?php $usulan = $this->m_dashboard->where('usulankegiatan',['idusulan' => $this->uri->segment('4')] )->row() ?>
        		<tr>
        			<td style="border-collapse: collapse; border: 1px solid black;" align="center">1</td>
        			<td style="border-collapse: collapse; border: 1px solid black;"><?php echo $usulan->judul_kegiatan ?></td>
        			<td style="border-collapse: collapse; border: 1px solid black;" align="center">1 Kegiatan</td>
        			<td style="border-collapse: collapse; border: 1px solid black;" align="center">Rp. <?php echo  number_format($umk->anggaran_kegiatan) ?></td>
        		</tr>
        		<tr>
        			<td align="center" style="border-collapse: collapse; border: 1px solid black;">2</td>
        			<td style="border-collapse: collapse; border: 1px solid black;"></td>
        			<td style="border-collapse: collapse; border: 1px solid black;"></td>
        			<td style="border-collapse: collapse; border: 1px solid black;"></td>
        		</tr>
        		<tr>
        			<td align="center" style="border-collapse: collapse; border: 1px solid black;">3</td>
        			<td style="border-collapse: collapse; border: 1px solid black;"></td>
        			<td style="border-collapse: collapse; border: 1px solid black;"></td>
        			<td style="border-collapse: collapse; border: 1px solid black;"></td>
        		</tr>
        		<tr>
        			<td align="center" style="border-collapse: collapse; border: 1px solid black;">4</td>
        			<td style="border-collapse: collapse; border: 1px solid black;"></td>
        			<td style="border-collapse: collapse; border: 1px solid black;"></td>
        			<td style="border-collapse: collapse; border: 1px solid black;"></td>
        		</tr>
        		<tr>
        			<td align="center" style="border-collapse: collapse; border: 1px solid black;">5</td>
        			<td style="border-collapse: collapse; border: 1px solid black;"></td>
        			<td style="border-collapse: collapse; border: 1px solid black;"></td>
        			<td style="border-collapse: collapse; border: 1px solid black;"></td>
        		</tr>
        		<tr>
        			<td align="center" style="border-collapse: collapse; border: 1px solid black;">6</td>
        			<td style="border-collapse: collapse; border: 1px solid black;"></td>
        			<td style="border-collapse: collapse; border: 1px solid black;"></td>
        			<td style="border-collapse: collapse; border: 1px solid black;"></td>
        		</tr>
        		<tr>
        			<td align="center" style="border-collapse: collapse; border: 1px solid black;">7</td>
        			<td style="border-collapse: collapse; border: 1px solid black;"></td>
        			<td style="border-collapse: collapse; border: 1px solid black;"></td>
        			<td style="border-collapse: collapse; border: 1px solid black;"></td>
        		</tr>
        		<tr>
        			<td align="center" style="border-collapse: collapse; border: 1px solid black;">8</td>
        			<td style="border-collapse: collapse; border: 1px solid black;"></td>
        			<td style="border-collapse: collapse; border: 1px solid black;"></td>
        			<td style="border-collapse: collapse; border: 1px solid black;"></td>
        		</tr>
        		<tr>
        			<td align="center" style="border-collapse: collapse; border: 1px solid black;">9</td>
        			<td style="border-collapse: collapse; border: 1px solid black;"></td>
        			<td style="border-collapse: collapse; border: 1px solid black;"></td>
        			<td style="border-collapse: collapse; border: 1px solid black;"></td>
        		</tr>
        		<tr>
        			<td align="center" style="border-collapse: collapse; border: 1px solid black;">10</td>
        			<td style="border-collapse: collapse; border: 1px solid black;"></td>
        			<td style="border-collapse: collapse; border: 1px solid black;"></td>
        			<td style="border-collapse: collapse; border: 1px solid black;"></td>
        		</tr>
        		<tr>
        			<td align="center" style="border-collapse: collapse; border: 1px solid black;">11</td>
        			<td style="border-collapse: collapse; border: 1px solid black;"></td>
        			<td style="border-collapse: collapse; border: 1px solid black;"></td>
        			<td style="border-collapse: collapse; border: 1px solid black;"></td>
        		</tr>
        		<tr>
        			<td align="center"></td>
        			<td align="center">JUMLAH</td>
        			<td style="border-collapse: collapse; border: 1px solid black;"></td>
        			<td style="border-collapse: collapse; border: 1px solid black;" align="center">Rp. <?php echo  number_format($umk->anggaran_kegiatan) ?></td>
        		</tr>
        	</tbody>
        </table>

        <p style="margin-left: 0px; margin-right: 0px; text-align: justify;">
        Uang Muka Kerja ini akan kami pertanggungjawabkan paling lambat 7(tujuh) hari sejak tanggal pengambilan<br style="line-height: 1;">
        </p>

        <p style="margin-left: 20px; margin-right: 0px; text-align: justify;">Menyetujui :
        	<span style="margin-left: 190px; margin-right: 0px;"><b>Pejabat Pembuat Komitmen</b></span><br>
        	<span style="margin-left: 0px; margin-right: 0px; text-align: justify;">Direktur</span>
        	<span style="margin-left: 290px; margin-right: 0px text-align: justify;"><b>( PPK )</b></span>
        	<span style="margin-right: 0px; margin-left: 195px; ">Pemohon UMK</span>
        </p><br><br><br><br>

        <!-- <p style="margin-left: 50px; margin-right: 0px; text-align: justify;">
        Menyetujui <span></span> -->

        </p>

        <p style="margin-left: 0px; margin-right: 0px; text-align: justify;">
        PERSETUJUAN PEMBAYARAN UANG MUKA KERJA<br style="line-height: 1;">
        <span style="margin-left: 0px;">
        Telah terima uang dari bendahara Pengeluaran sebesar RP........................................................</span><br>
        <span style="margin-left: 0px;">(....................................................................................................................................................................................)</span>
        </p>
        
        <p style="margin-left: 110px; margin-right: 0px; text-align: justify;">Pembayar <br>
        <span style="margin-left: -3px;">Bendahara,</span>
        <span style="margin-left: 420px">Pembayar</span>
        </p><br><br>

        <p style="margin-left:95px; margin-right: 50px; text-align: justify;"><u>(.....................)</u>
        <span style="margin-left: 395px"><u>(.....................)</u></span>
        </p>

        <p style="margin-left: 20px">
        Keterangan : <br>
        <span style="margin-left: -20px">*Uang Muka yang belum di SPJ kan : Rp...................................................</p></span>
        </p>
        <p>(....................................................................................................................................................................................)</p>


        