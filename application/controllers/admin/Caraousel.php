<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Caraousel extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('level')==NULL){
            redirect('auth');
        }
    }
	public function index(){
        $this->db->from('caraousel'); //dari table caraousel
        $caraousel = $this->db->get()->result_array();  // dapatkan semua data
		$data = array(
			'judul_halaman' => 'Halaman Caraousel',
            'caraousel'      => $caraousel
		);
		$this->template->load('template_admin','admin/caraousel_index',$data); // menigirim data array ke templat, caraousel index
	}
    public function simpan(){
        $namafoto = date('YmdHis').'.jpg'; //nama foto yang di buat berdasarkan tanggal dan waktu
        $config['upload_path']          ='assets/upload/caraousel/'; //penempatan file upload caraousel
        $config['max_size'] = 500 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited 
        $config['file_name']            = $namafoto;
        $config['allowed_types']        = '*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 500 * 1024){ // jumlah max foto yang di upload
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.
                <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    ');
            redirect('admin/caraousel');        
        } elseif(!$this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }    
        $data = array(
            'judul'   => $this->input->post('judul'), // input berdasarkan name yaitu judul
            'foto'   => $namafoto,
        );
        $this->db->insert('caraousel', $data); // kirim data ke database ke table caraousel berdasarkan array data
        $this->session->set_flashdata('alert', '
        <div class="alert alert-dark alert-dismissible fade show" role="alert">
            Berhasil menambahkan caraousel wong!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('admin/caraousel');
    }
    public function delete_data($id){ // fungsi untuk menghapus data yang telah di upload di database
        $filename=FCPATH.'/assets/upload/caraousel/'.$id;
        if(file_exists($filename)){
            unlink("./assets/upload/caraousel/".$id);
        }
        $where = array(
            'foto'   => $id   
        );
        $this->db->delete('caraousel', $where); // dari caraousel hapus berdasarkan foto dari id database
        $this->session->set_flashdata('alert', '
        <div class="alert alert-dark alert-dismissible fade show" role="alert">
            Berhasil menghapus caraousel wong!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('admin/caraousel');
    }
   
}
