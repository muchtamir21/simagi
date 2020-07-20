<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_dashboard');

			if(empty($this->session->userdata('id_user'))){
			redirect('Login-User');
		}

	}

	public function index()
	{
		$data = array(
        	    'title' =>   'Dashboard', 
        );
        $this->template->load('admin/admin_header', 'admin/admin_dashboard', $data);

	}

	public function laporan_usulan()
	{

		  if($this->input->post('bulan') == '01'){
    $bln2 = 'Januari';
}elseif($this->input->post('bulan') == '02'){
    $bln2 = 'Februari';
}elseif($this->input->post('bulan') == '03'){
    $bln2 = 'Maret';
}elseif($this->input->post('bulan') == '04'){
    $bln2 = 'April';
}elseif($this->input->post('bulan') == '05'){
    $bln2 = 'Mei';
}elseif($this->input->post('bulan') == '06'){
    $bln2 = 'Juni';
}elseif($this->input->post('bulan') == '07'){
    $bln2 = 'Juli';
}elseif($this->input->post('bulan') == '08'){
    $bln2 = 'Agustus';
}elseif($this->input->post('bulan') == '09'){
    $bln2 = 'September';
}elseif($this->input->post('bulan') == '10'){
    $bln2 = 'Oktober';
}elseif($this->input->post('bulan') == '11'){
    $bln2 = 'November';
}elseif($this->input->post('bulan') == '12'){
    $bln2 = 'Desember';
}
if(empty($this->input->post('tahun')) || empty($this->input->post('bulan'))){
	$data = array(

        	    'title' =>   'Laporan Usulan', 


        );
	
 }else{
		$data = array(

        	    'title' =>   'Rincian Laporan Usulan Kegiatan Bulan '.$bln2.' '.$this->input->post('tahun'), 


        );
	}

	

        $this->template->load('admin/admin_header', 'admin/admin_laporan_usulan', $data);

	}

	public function rkakl()
	{
		$data = array(
        	    'title' =>   'Dashboard',
			    
				
				
		);
		
		$data['rkakl_daftar'] = $this->m_dashboard->semua('inputrkakl')->result();
		$this->template->load('admin/admin_header', 
							  'admin/admin_rkakl', $data
							);

	}

	public function tambah_rkakl()
	{
		$data = array(
			'kegiatan' => $this->input->post('kegiatan'),
			'jumlah_biaya' => $this->input->post('anggaran'),
		  );
		  $this->db->insert('inputrkakl',$data);
		  redirect('simagi/admin/rkakl');
	}

	public function pengeluaran_rkakl()
	{
		$data = array(
			'idrkakl' => $this->input->post('idrkakl'),
			'judul_kegiatan' => $this->input->post('judulkegiatan'),
			'jumlah_pengeluaran' => $this->input->post('jumlahpengeluaran'),
		);
		$this->db->insert('pengeluaran_rkakl',$data);
		redirect('simagi/admin/rkakl');
	}


	public function edit_rkakl()
	{
		$data = array(
			'kegiatan' => $this->input->post('kegiatan'),
			'jumlah_biaya' => $this->input->post('anggaran'),
		  );

		  $where = array(
			'idrkakl' => $this->input->post('idrkakl')

		  );

		  $this->m_dashboard->update_data($where,$data,'inputrkakl');
		  redirect('simagi/admin/rkakl');
	}
	
	public function edit_pengeluaran_rkakl()
	{
		$data = array(
			'judul_kegiatan' => $this->input->post('kegiatan'),
			'jumlah_pengeluaran' => $this->input->post('anggaran'),
		  );

		  $where = array(
			'id_pengeluaranrkakl' => $this->input->post('idrkakl')

		  );

		  $this->m_dashboard->update_data($where,$data,'pengeluaran_rkakl');
		  redirect('simagi/admin/rkakl');
	}

	public function hapus_rkakl()
	{
		$where = array(
			'idrkakl' => $this->input->post('idrkakl')

		);

		$this->m_dashboard->hapus_data($where,'inputrkakl');
		redirect('simagi/admin/rkakl');
	}


	public function hapus_pengeluaran_rkakl()
	{
		$where = array(
			'id_pengeluaranrkakl' => $this->input->post('idrkakl')

		);

		$this->m_dashboard->hapus_data($where,'pengeluaran_rkakl');
		redirect('simagi/admin/rkakl');
	}

	public function data_pengguna()
	{
		$data = array(
        	    'title' =>   'Dashboard',
			    
			   
		);
		
		$data['pengguna_daftar'] = $this->m_dashboard->semua('pengguna')->result();
		$data['level'] = $this->m_dashboard->semua('level')->result();
		$data['bagian'] = $this->m_dashboard->semua('bagian')->result();
		$data['penggunajoin'] = $this->m_dashboard->join_datapengguna()->result();
		$this->template->load('admin/admin_header', 
							  'admin/admin_datapengguna', $data
							);

	}

	public function tambah_pengguna()
	{

		$namabagian = $this->m_dashboard->where('bagian',array('id' => $this->input->post('namabagian')))->row();

		$data = array(
			'idpengguna' => $this->input->post('idpengguna'),
			'namapengguna' => $this->input->post('namapengguna'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'level' => $namabagian->level,
			'namabagian' => $namabagian->namabagian,
			'idrkakl' => $namabagian->id_rkakl,
		);
		$this->db->insert('pengguna',$data);
		redirect('simagi/admin/data_pengguna');
	}

	public function hapus_pengguna()
	{
		$where = array(
			'idpengguna' => $this->input->post('idpengguna')

		);

		$this->m_dashboard->hapus_data($where,'pengguna');
		redirect('simagi/admin/data_pengguna');
	}

	public function edit_pengguna()
	{

		$bagian = $this->m_dashboard->where('bagian', ['id' => $this->input->post('namabagian') ])->row();
		$data = array(
			'idpengguna' => $this->input->post('idpengguna'),
			'namapengguna' => $this->input->post('namapengguna'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'level' => $bagian->level,
			'namabagian' => $bagian->namabagian,
		  );

		  $where = array(
			'idpengguna' => $this->input->post('idpengguna')

		  );

		  $this->m_dashboard->update_data($where,$data,'pengguna');
		  redirect('simagi/admin/data_pengguna');
	}

	public function data_bagian()
	{
		$data = array(
        	    'title' =>   'Dashboard',
			    
			   
		);
		
		$data['level'] = $this->m_dashboard->semua('level')->result();
		$data['bagian'] = $this->m_dashboard->semua('bagian')->result();
		
		$data['bagianjoin'] = $this->m_dashboard->join_bagian()->result();
		$this->template->load('admin/admin_header', 
							  'admin/admin_databagian', $data
							);

	}

	public function tambah_bagian()
	{
		if($this->input->post('level')!= '2'){
			$data = array(
				'id' => $this->input->post('idbagian'),
				'namabagian' => $this->input->post('namabagian'),
				'level' => $this->input->post('level'),
				'id_rkakl' => '0',
			);
		}else{
			$data = array(
				'id' => $this->input->post('idbagian'),
				'namabagian' => $this->input->post('namabagian'),
				'level' => $this->input->post('level'),
				'id_rkakl' => $this->input->post('rkakl'),
			);
		}
	
		$this->db->insert('bagian',$data);
		redirect('simagi/admin/data_bagian');
	}

	public function hapus_bagian()
	{
		$where = array(
			'id' => $this->input->post('idbagian')

		);

		$this->m_dashboard->hapus_data($where,'bagian');
		redirect('simagi/admin/data_bagian');
	}

	public function edit_bagian()
	{
		$data = array(
			'id' => $this->input->post('idbagian'),
			'namabagian' => $this->input->post('namabagian'),
			'level' => $this->input->post('level'),
		  );

		  $where = array(
			'id' => $this->input->post('idbagian')

		  );

		  $this->m_dashboard->update_data($where,$data,'bagian');
		  redirect('simagi/admin/data_bagian');
	}


	public function usulan_kegiatan()
	{
		$data = array(
        	    'title' =>   'Dashboard',
			    
			   
		);
		

		$this->template->load('admin/admin_header', 
							  'admin/admin_usulankegiatan', $data
							);

	}

	public function detail($id)
	{
		$data = array(
        	    'title' =>   'Dashboard',
			    
			   
		);
		
		$data['usulan'] = $this->m_dashboard->where('usulankegiatan',array('idusulan' => $id))->row();
		
		$this->template->load('admin/admin_header', 
							  'admin/admin_detail', $data
							);

	}

	public function permohonan_umk()
	{
		$data = array(
        	    'title' =>   'Dashboard',
			    
				
				
		);
		
		$data['rkakl_daftar'] = $this->m_dashboard->semua('inputrkakl')->result();
		$this->template->load('admin/admin_header', 
							  'admin/admin_umk', $data
							);

	}

	
	public function upload_umk($idusulan)
	{
		$this->load->library( 'upload' );
		  // Upload Proposal
		  $nmfile = "umk_" . time(); // deklarasi penamaan file  yg akan di upload
		  $config[ 'upload_path' ] = './assets/document'; // direktori uplad
		  $config[ 'allowed_types' ] = 'docx|pdf|pptx|xls|ppsx|xlsx|doc'; // jenis extensi file img
		  //$config[ 'max_size' ] = 10000; // size foto
		  $config[ 'file_name' ] = $nmfile; // config penamaan file img 
		  $this->upload->initialize( $config );
		  if($_FILES['file_umk']['name']){ // jika input type file sudah ada inputan
			  if ($this->upload->do_upload('file_umk')){ // upload foto
				  $file_umk = $this->upload->data(); // deklarasi upload foto
				  
				  $data = array(
					'upload_umk' => $file_umk['file_name'],
				);
				$where = array(
					'idusulan' => $idusulan
				);
				$this->m_dashboard->update_data($where,$data,'usulankegiatan');

	
		

			  }else{
			  }

			}
		
		redirect('simagi/admin/detail/'.$idusulan);


	}
	
	public function validasi_bendahara($id)
	{
		
		$data = array(
			'validasi_bendahara' => '2',
			'validasi_dirut' => '1',
			'revisi' => '0'
		);
	$data_catat = array(
			'catatan' => ' Kegiatan Di Setujui Oleh Bendahara',
			'idusulan' => $id,
			'id_user' => $this->session->userdata('id_user'),
			'upload' => '',
		);

		$this->m_dashboard->input_data($data_catat, 'catatan');
		$this->m_dashboard->update_data(array('idusulan' => $id ),$data, 'progres_usulan');

		redirect('simagi/admin/detail/'.$id);

	}	

	public function validasi_notif($idusulan)
	{
		
		$data = array(
			'notif' => '1'
		);
		$this->m_dashboard->update_data(['idusulan' => $idusulan],$data,'catatan');
		redirect('simagi/admin/detail/'.$idusulan);

	}

	public function revisi_bendahara($id)
	{
		$this->load->library( 'upload' );
		  // Upload Proposal
		  $nmfile = "revisi_" . time(); // deklarasi penamaan file  yg akan di upload
		  $config[ 'upload_path' ] = './assets/document'; // direktori uplad
		  $config[ 'allowed_types' ] = 'docx|pdf|pptx|xls|ppsx|xlsx|doc'; // jenis extensi file img
		  //$config[ 'max_size' ] = 10000; // size foto
		  $config[ 'file_name' ] = $nmfile; // config penamaan file img 
		  $this->upload->initialize( $config );
		  if($_FILES['file_catatan']['name']){ // jika input type file sudah ada inputan
			  if ($this->upload->do_upload('file_catatan')){ // upload foto
				  $file_catatan = $this->upload->data(); // deklarasi upload foto
			
			$data = array(
			'revisi' => '1',
		);
		$this->m_dashboard->update_data(array('idusulan' => $id ),$data, 'progres_usulan');


		$data_catat = array(
			'catatan' => $this->input->post('catatan'),
			'idusulan' => $id,
			'id_user' => $this->session->userdata('id_user'),
			'upload' => $file_catatan['file_name'],
		);

		$this->m_dashboard->input_data($data_catat, 'catatan');

	
		

			  }else{

			}
		}

			if(empty($file_catatan['file_name'])){

			  		$data = array(
			'revisi' => '1',
		);
		$this->m_dashboard->update_data(array('idusulan' => $id ),$data, 'progres_usulan');


		$data_catat = array(
			'catatan' => $this->input->post('catatan'),
			'idusulan' => $id,
			'id_user' => $this->session->userdata('id_user'),
		);

		$this->m_dashboard->input_data($data_catat, 'catatan');


			  

			}
					redirect('simagi/admin/detail/'.$id);


	}

	public function validasi_umk($id)
	{
		
		$data = array(
			'validasi_umk' => '2'
		);

		$data_catat = array(
			'catatan' => 'UMK Kegiatan Di Setujui',
			'idusulan' => $id,
			'id_user' => $this->session->userdata('id_user'),
			'upload' => '',
		);

		$this->m_dashboard->input_data($data_catat, 'catatan');

		$this->m_dashboard->update_data(array('idusulan' => $id ),$data, 'progres_usulan');
		redirect('simagi/admin/permohonan_umk/'.$id);

	}


	public function tambah_permohonan_umk($id){

		$tanggal = date("Y-m-d");
		$usulan = $this->m_dashboard->where('usulankegiatan',['idusulan' => $id])->row(); 
		$data = array(
			'idusulan' => $id,
			'nomor_umk' => $this->input->post('nomorumk'),
			'lampiran' => $this->input->post('lampiran'),
			'perihal' => $this->input->post('perihal'),
			'tanggal_umk' => $tanggal,
			'anggaran_kegiatan' => $usulan->anggaran

		);
		
	$this->m_dashboard->input_data($data,'umk');
	redirect('simagi/admin/usulan_kegiatan/');

	}

	
	public function update_permohonan_umk($id){

		$tanggal = date("Y-m-d",strtotime($this->input->post('tanggal')));
		$data = array(
			'nomor_umk' => $this->input->post('nomorumk'),
			'lampiran' => $this->input->post('lampiran'),
			'perihal' => $this->input->post('perihal'),
			'tanggal_umk' => $tanggal

		);
		

	$this->m_dashboard->update_data(array('idumk' => $id),$data,'umk');
	redirect('simagi/admin/usulan_kegiatan/');
	
	}



}
