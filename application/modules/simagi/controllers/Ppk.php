<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppk extends MY_Controller {

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
        	    'title'     =>   'Data Pengguna',
			  
		);
		$data['pengguna'] = $this->m_dashboard->getnamabagian();
		$data['namabagian'] = $this->db->get('bagian')->result_array();
		// var_dump($data); die;
        $this->template->load('ppk/ppk_header', 'ppk/ppk_usulankegiatan', $data);

	}
	
	public function detail_ppk($id)
	{
		$data = array(
        	    'title' =>   'Dashboard',
			    
			    
		);
		
		$data['usulan'] = $this->m_dashboard->where('usulankegiatan',array('idusulan' => $id))->row();
		
		$this->template->load('ppk/ppk_header', 
							  'ppk/ppk_detail', $data
							);

	}

	public function usulankegiatan_ppk()
	{
		$data = array(
        	    'title' =>   'Dashboard',
			    
			    
        );
		$this->template->load('ppk/ppk_header', 
							  'ppk/ppk_usulankegiatan', $data
							);

	}


	public function validasi_ppk($id)
	{
		
		$data = array(
			'validasi_ppk' => '2',
			'validasi_bendahara' => '1'
		);
			$data_catat = array(
			'catatan' => 'Kegiatan Di Setujui Oleh PPK',
			'idusulan' => $id,
			'id_user' => $this->session->userdata('id_user'),
			'upload' => '',
		);

		$this->m_dashboard->input_data($data_catat, 'catatan');

		$this->m_dashboard->update_data(array('idusulan' => $id ),$data, 'progres_usulan');



		redirect('simagi/ppk/detail_ppk/'.$id);

	}
	
public function tolakusulan($id)
	{
		
		$data = array(
			'validasi_ppk' => '99',
		);

		$this->m_dashboard->update_data(array('idusulan' => $id ),$data, 'progres_usulan');
		$this->m_dashboard->update_data(array('idusulan' => $id ),['status_kegiatan' => '2'], 'usulankegiatan');
			$data_catat = array(
			'catatan' => $this->input->post('catatan'),
			'idusulan' => $id,
			'id_user' => $this->session->userdata('id_user'),
		);
		$this->m_dashboard->input_data($data_catat, 'catatan');

		redirect('simagi/ppk/detail_ppk/'.$id);

	}



	public function daftarrkakl_ppk()
	{
		$data = array(
        	    'title' =>   'Dashboard',
			    
			    
		);
		$data['rkakl_daftar'] = $this->m_dashboard->semua('inputrkakl')->result();
		$this->template->load('ppk/ppk_header', 
							  'ppk/ppk_daftarrkakl', $data
							);

	}

	public function tambah_rkakl()
	{
		$data = array(
			'kegiatan' => $this->input->post('kegiatan'),
			'jumlah_biaya' => $this->input->post('anggaran'),
		  );
		  $this->db->insert('inputrkakl',$data);
		  redirect('simagi/ppk/daftarrkakl_ppk');
	}

	public function pengeluaran_rkakl()
	{
		$data = array(
			'idrkakl' => $this->input->post('idrkakl'),
			'judul_kegiatan' => $this->input->post('judulkegiatan'),
			'jumlah_pengeluaran' => $this->input->post('jumlahpengeluaran'),
		);
		$this->db->insert('pengeluaran_rkakl',$data);
		redirect('simagi/ppk/daftarrkakl_ppk');
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
		  redirect('simagi/ppk/daftarrkakl_ppk');
	}

	public function hapus_rkakl()
	{
		$where = array(
			'idrkakl' => $this->input->post('idrkakl')

		);

		$this->m_dashboard->hapus_data($where,'inputrkakl');
		redirect('simagi/ppk/daftarrkakl_ppk');
	}



}