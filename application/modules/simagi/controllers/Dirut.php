<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dirut extends MY_Controller {

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
        $this->template->load('dirut/dirut_header', 'dirut/dirut_usulankegiatan', $data);

	}

	public function detail_dirut($id)
	{
		$data = array(
        	    'title' =>   'Dashboard',
			    
			    
		);
		
		$data['usulan'] = $this->m_dashboard->where('usulankegiatan',array('idusulan' => $id))->row();
		$this->template->load('dirut/dirut_header', 
							  'dirut/dirut_detail', $data
							);

	}

	public function tolakusulan($id)
	{
		
		$data = array(
			'validasi_dirut' => '99',
		);

		$this->m_dashboard->update_data(array('idusulan' => $id ),$data, 'progres_usulan');
		$this->m_dashboard->update_data(array('idusulan' => $id ),['status_kegiatan' => '2'], 'usulankegiatan');
			$data_catat = array(
			'catatan' => $this->input->post('catatan'),
			'idusulan' => $id,
			'id_user' => $this->session->userdata('id_user'),
		);
		$this->m_dashboard->input_data($data_catat, 'catatan');

		redirect('simagi/dirut/detail_dirut/'.$id);

	}



	public function daftarrkakl_dirut()
	{
		$data = array(
        	    'title' =>   'Dashboard',
			    
			    
		);
		$data['rkakldaftar_dirut'] = $this->m_dashboard->semua('inputrkakl')->result();
		$this->template->load('dirut/dirut_header', 
							  'dirut/dirut_daftarrkakl', $data
							);

	}

	public function usulankegiatan_dirut()
	{
		$data = array(
        	    'title' =>   'Dashboard',
			    
			    
        );
		$this->template->load('dirut/dirut_header', 
							  'dirut/dirut_usulankegiatan', $data
							);

	}

	
	public function validasi_dirut($id)
	{
		
		$data = array(
			'validasi_dirut' => '2'
		);
			$data_catat = array(
			'catatan' => 'Kegiatan Di Setujui Oleh Direktur',
			'idusulan' => $id,
			'id_user' => $this->session->userdata('id_user'),
			'upload' => '',
		);

		$this->m_dashboard->input_data($data_catat, 'catatan');

		$this->m_dashboard->update_data(array('idusulan' => $id ),$data, 'progres_usulan');

		redirect('simagi/dirut/detail_dirut/'.$id);

	}


}
