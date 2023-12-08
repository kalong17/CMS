<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
	public function index(){
		$this->load->view('login');
	}
    public function login(){
        $username = $this->input->post('username'); //mengambil input user berdasarkan nama inputan username
        $password = md5($this->input->post('password')); //mengambil input user berdasarkan nama inputan password
        $this->db->from('user'); // dari table 
        $this->db->where('username', $username);
        $cek = $this->db->get()->row();
        if($cek==NULL){ // cek apakah ada di database
            $this->session->set_flashdata('alert', '
            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                Username tidak ada wong!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect('auth');
        } else if($password==$cek->password) { // cek apakah sama dengan yang ada di database
            $data = array(
                'id_user'   => $cek->id_user,
                'nama'   => $cek->nama,
                'username'   => $cek->username,
                'level'   => $cek->level,
            );
            $this->session->set_userdata($data);
            redirect('admin/home');
        } else {
            $this->session->set_flashdata('alert', '
            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                Password salah wong!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect('auth');
        }
    }
        public function logout(){
            $this->session->sess_destroy(); // menghapus semua session
            redirect('home');   
    }
}
