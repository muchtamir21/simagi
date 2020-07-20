<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengusul extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

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
        $this->template->load('pengusul/p_header', 'pengusul/p_usulankegiatan', $data);

	}

	public function detail_p()
	{
		$data = array(
        	    'title' =>   'Dashboard',
			    
			    
        );
		$this->template->load('pengusul/p_header', 
							  'pengusul/p_detail', $data
							);


	}

	public function tambahusulan_p()
	{
		$data = array(
        	    'title' =>   'Dashboard',
			    
			    
        );
		$this->template->load('pengusul/p_header', 
							  'pengusul/p_tambahusulan', $data
							);


	}
	
	public function editusulan($id)
	{
		$data = array(
        	    'title' =>   'Dashboard',
			    
			    
		);
		
		$data['usulan'] = $this->m_dashboard->where('usulankegiatan',array('idusulan' => $id))->row();
		
		$this->template->load('pengusul/p_header', 
							  'pengusul/p_editusulan', $data
							);
					

	}
	public function detail_usulan($id)
	{
		$data = array(
        	    'title' =>   'Dashboard',
			    
			    

		);
		
		$data['usulan'] = $this->m_dashboard->where('usulankegiatan',array('idusulan' => $id))->row();
		
		$this->template->load('pengusul/p_header', 
							  'pengusul/p_detail', $data
							);
					

	}

public function kirim_catatan($id)
	{
		
		$data_catat = array(
			'catatan' => $this->input->post('catatan'),
			'idusulan' => $id,
			'id_user' => $this->session->userdata('id_user'),
		);
		$this->m_dashboard->input_data($data_catat, 'catatan');
		


		redirect('simagi/pengusul/detail_usulan/'.$id);

	}
	
	public function add_usulan()
	{
		$tanggal = date("Y-m-d",strtotime($this->input->post('tanggal')));
		$user = $this->m_dashboard->where('pengguna',['idpengguna' => $this->session->userdata('id_user') ])->row();
		$tanggal_now = date("Y-m-d");
		$data = array(
			'nama_pengusul' => $this->input->post('nama_pengusul'),
			'no_suratusulan' => $this->input->post('no_surat'),
			'anggaran' => $this->input->post('anggaran'),
			'tanggal' => $tanggal,
			'judul_kegiatan' => $this->input->post('judul_kegiatan'),
			'id_user' => $this->session->userdata('id_user'),
			'id_rkakl' => $user->idrkakl,
			'tanggal_input' => $tanggal_now,
		);
		$this->db->insert('usulankegiatan',$data);
		$data_terakhir = $this->m_dashboard->data_terakhir_usulan()->row();
		redirect('simagi/pengusul/editusulan/'.$data_terakhir->idusulan);

	}

	
	public function kirim_usulan($id)
	{
		
		$data = array(
			'idusulan' => $id,
			'kirimusulan' => '1',
			'validasi_ppk' => '1'
		);
		$this->db->insert('progres_usulan',$data);
		redirect('simagi/pengusul/editusulan/'.$id);

	}


	
	public function validasi_notif($idusulan)
	{
		
		$data = array(
			'notif' => '1'
		);
		$this->m_dashboard->update_data(['idusulan' => $idusulan],$data,'catatan');
		redirect('simagi/pengusul/detail_usulan/'.$idusulan);

	}
		
	public function upload_disposisi($idusulan)
	{
		$this->load->library( 'upload' );
		  // Upload Proposal
		  $nmfile = "disposisi_" . time(); // deklarasi penamaan file  yg akan di upload
		  $config[ 'upload_path' ] = './assets/document'; // direktori uplad
		  $config[ 'allowed_types' ] = 'docx|pdf|pptx|xls|ppsx|xlsx|doc'; // jenis extensi file img
		  //$config[ 'max_size' ] = 10000; // size foto
		  $config[ 'file_name' ] = $nmfile; // config penamaan file img 
		  $this->upload->initialize( $config );
		  if($_FILES['file_disposisi']['name']){ // jika input type file sudah ada inputan
			  if ($this->upload->do_upload('file_disposisi')){ // upload foto
				  $file_disposisi = $this->upload->data(); // deklarasi upload foto
				  
				  $data = array(
					'upload_disposisi' => $file_disposisi['file_name'],
				);
				$where = array(
					'idusulan' => $idusulan
				);
				$this->m_dashboard->update_data($where,$data,'usulankegiatan');

				$data_val = array(
			
					'validasi_umk' => '1'
				);
		
				$this->m_dashboard->update_data(array('idusulan' => $idusulan ),$data_val, 'progres_usulan');
		

			  }else{
			  }

			}
		
		redirect('simagi/pengusul/detail_usulan/'.$idusulan);


	}

	public function upload_lpj($idusulan)
	{
		$this->load->library( 'upload' );
		  // Upload Proposal
		  $nmfile = "lpj_" . time(); // deklarasi penamaan file  yg akan di upload
		  $config[ 'upload_path' ] = './assets/document'; // direktori uplad
		  $config[ 'allowed_types' ] = 'docx|pdf|pptx|xls|ppsx|xlsx|doc'; // jenis extensi file img
		  //$config[ 'max_size' ] = 10000; // size foto
		  $config[ 'file_name' ] = $nmfile; // config penamaan file img 
		  $this->upload->initialize( $config );
		  if($_FILES['file_lpj']['name']){ // jika input type file sudah ada inputan
			  if ($this->upload->do_upload('file_lpj')){ // upload foto
				  $file_lpj = $this->upload->data(); // deklarasi upload foto
				  
				  $data = array(
					'upload_lpj' => $file_lpj['file_name'],
					'anggaran' => $this->input->post('anggaran'),
				);


				$where = array(
					'idusulan' => $idusulan
				);
				$this->m_dashboard->update_data($where,$data,'usulankegiatan');


			  }else{
			  }

			}
		
		redirect('simagi/pengusul/detail_usulan/'.$idusulan);


	}

	public function update_usulan()
	{
		$tanggal = date("Y-m-d",strtotime($this->input->post('tanggal')));
		  // library upload
		  $this->load->library( 'upload' );

$progres_usulan = $this->m_dashboard->where('progres_usulan',['idusulan' => $this->input->post('idusulan')])->row();

 // Upload Proposal
 $nmfile = "lpj_" . time(); // deklarasi penamaan file  yg akan di upload
 $config[ 'upload_path' ] = './assets/document'; // direktori uplad
 $config[ 'allowed_types' ] = 'docx|pdf|pptx|xls|ppsx|xlsx|doc'; // jenis extensi file img
 //$config[ 'max_size' ] = 10000; // size foto
 $config[ 'file_name' ] = $nmfile; // config penamaan file img 
 $this->upload->initialize( $config );
 if($_FILES['file_proposal']['name']){ // jika input type file sudah ada inputan
	 if ($this->upload->do_upload('file_proposal')){ // upload foto
		 $file_proposal = $this->upload->data(); // deklarasi upload foto
		 
		 $data = array(
			'jenis_upload' => 'Proposal',
			'idusulan' => $this->input->post('idusulan'),
			'file_upload' => $file_proposal['file_name'],
	   );
	   $this->m_dashboard->input_data($data,'upload_file');
	 }else{
	 }

   }

			 // Upload rab
			 $nmfile = "rab_" . time(); // deklarasi penamaan file img yg akan di upload
			 $config[ 'upload_path' ] = './assets/document'; // direktori uplad
			 $config[ 'allowed_types' ] = 'docx|pdf|pptx|xls|ppsx|xlsx|doc'; // jenis extensi file img
			 //$config[ 'max_size' ] = 10000; // size foto
			 $config[ 'file_name' ] = $nmfile; // config penamaan file img 
			 $this->upload->initialize( $config );
			 if($_FILES['file_rab']['name']){ // jika input type file sudah ada inputan
				 if ($this->upload->do_upload('file_rab')){ // upload foto
					 $file_rab = $this->upload->data(); // deklarasi upload foto
					
				 $data = array(
					 'jenis_upload' => 'RAB',
					 'idusulan' => $this->input->post('idusulan'),
					 'file_upload' => $file_rab['file_name'],
				 );
				 $this->m_dashboard->input_data($data,'upload_file');

if(empty($progres_usulan)){

}else{

		$data = array(
			'revisi' => '0'
		);

		$this->m_dashboard->update_data(array('idusulan' => $this->input->post('idusulan') ),$data, 'progres_usulan');
}
				 }else{
				 }
   
			   }
			    // Upload surat
		  $nmfile = "surat_" . time(); // deklarasi penamaan file img yg akan di upload
		  $config[ 'upload_path' ] = './assets/document'; // direktori uplad
		  $config[ 'allowed_types' ] = 'docx|pdf|doc|jpg|jpeg|png'; // jenis extensi file img
		  //$config[ 'max_size' ] = 10000; // size foto
		  $config[ 'file_name' ] = $nmfile; // config penamaan file img 
		  $this->upload->initialize( $config );
		  if($_FILES['file_surat']['name']){ // jika input type file sudah ada inputan
			  if ($this->upload->do_upload('file_surat')){ // upload foto
				  $file_surat = $this->upload->data(); // deklarasi upload foto
				 
			  $data = array(
				  'jenis_upload' => 'Surat Kegiatan',
				  'idusulan' => $this->input->post('idusulan'),
				  'file_upload' => $file_surat['file_name'],
			  );
			  $this->m_dashboard->input_data($data,'upload_file');
			  }else{
			  }

			}

		$data = array(
			'nama_pengusul' => $this->input->post('nama_pengusul'),
			'no_suratusulan' => $this->input->post('no_surat'),
			'anggaran' => $this->input->post('anggaran'),
			'tanggal' => $tanggal,
			'judul_kegiatan' => $this->input->post('judul_kegiatan')
		);

		$this->m_dashboard->update_data(array('idusulan'=> $this->input->post('idusulan')),$data,'usulankegiatan');
		$data_terakhir = $this->m_dashboard->data_terakhir_usulan()->row();
		redirect('simagi/pengusul/editusulan/'.$this->input->post('idusulan'));

	}

	public function del_file($id,$id_usulan){

		$this->m_dashboard->hapus_data(array('id_upload'=> $id),'upload_file');
		redirect('simagi/pengusul/editusulan/'.$id_usulan);

	}



	public function usulankegiatan_p()
	{
		$data = array(
        	    'title' =>   'Dashboard',
			    
			    
        );
		$this->template->load('pengusul/p_header', 
							  'pengusul/p_usulankegiatan', $data
							);


	}

	
	public function cetak_permohonan_umk()
	{
	
		$this->template->load('pengusul/p_permohonan_umk'
		,'pengusul/p_permohonan_umk'
							);


	}
}
