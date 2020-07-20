<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MX_Controller {

	//untuk memanggil method ke dalam controller
	public function __construct()
	{
		parent::__construct();
	
		$this->load->library('form_validation');
		$this->load->model('Login_model');
    }


	public function index()
	{
		//Set rules form validation
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		//Memvalidasi form
		if($this->form_validation->run() == false){

			$data['title'] = 'User Login';

            $this->load->view('layout/auth_header', $data);
            $this->load->view('login/login');
			$this->load->view('layout/auth_footer');

		} else {

			//Validasi 
			$this->_login(); //method login private
		}

	}

	private function _login()
	{

		//Mengambil data dari inputan 
		$this->load->model('Login_model');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $username;
		$pass = MD5($password);

		$cek = $this->Login_model->cek_login($user, $pass);

		if ($cek->num_rows() > 0) { //password cocok
			
			foreach ($cek->result() as $ck){
				$session_data['username'] = $ck->email;
				$session_data['level'] = $ck->level;
				$session_data['id_user'] = $ck->idpengguna;
				$this->session->set_userdata($session_data);
			}
			if ($session_data['level'] == 1) {
				
				redirect('simagi/admin');

			}elseif($session_data['level'] == 2){
				redirect('simagi/pengusul');
			}elseif($session_data['level'] == 3){
				redirect('simagi/ppk');
			}elseif($session_data['level'] == 4){
				redirect('simagi/bendahara');
			}elseif($session_data['level'] == 5){
				redirect('simagi/dirut');
			}
			
			else {

				//membuat pesan password salah
				$this->session->set_flashdata('massage',
				'<div class="alert alert-danger" role="alert">Password Salah!!</div>');

				redirect('auth/index');
			}
		}else {

			//membuat pesan password salah
			$this->session->set_flashdata('massage',
			'<div class="alert alert-danger" role="alert">Password Salah!!</div>');

			redirect('auth/index');


		}



}

public function logout()
		{
			$this->session->sess_destroy();
			redirect('Login-User');
		}
}