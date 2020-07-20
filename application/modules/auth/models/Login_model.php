<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Login_model extends CI_Model{

   
    public function cek_login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('pengguna');

        echo $username, $password;
    }

    public function getLoginData($user, $pass)
    {
        $u = $user;
        $p = MD5($pass);

        $query_cekLogin = $this->db->get_where('pengguna', array('username' => $u, 'password' => $p ));

        if (count($query_cekLogin->result()) > 0)
        {
            foreach ($query_cekLogin->result() as $qcek){
            foreach ($query_cekLogin->result() as $ck){
                $session_data['logged_in'] = TRUE;
                $session_data['username'] = $ck->username;
                $session_data['password'] = $ck->password;
                $session_data['level'] = $ck->level;

                $this->session->set_userdata($session_data);
            }
            redirect('Dashboard');
            }
            
        }else {
            //membuat pesan password salah
            $this->session->set_flashdata('massage',
            '<div class="alert alert-danger" role="alert">Password Salah!!</div>');

            redirect('auth/index');
        }
    }


   public function login($username, $password)
    {
        $query = $this->db->get_where('tb_user', array('username'=>$username, 'password'=>$password));
        return $query->row_array();
    }

    public function check_account($username)
    {
        //cari username lalu lakukan validasi
        $this->db->where('username', $username);
        $query = $this->db->get($this->table)->row();

        //jika bernilai 1 maka user tidak ditemukan
        if (!$query) {
            return 1;
        }
        //jika bernilai 2 maka user tidak aktif
        if ($query->active == 0) {
            return 2;
        }
        //jika bernilai 3 maka password salah
        if ($this->input->post('password') > $query->password) {
            return 3;
        }

        return $query;
    }
 
}