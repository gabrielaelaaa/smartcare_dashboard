<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        // if($this->session->userdata('logged_in')==TRUE) {
		// 	redirect(base_url(), 'refresh');
		// }
        $this->load->model('M_login');
    }
    public function cek() {
        $username = $this->input->post('login_username');
        $password = $this->input->post('login_password');
        if($this->M_login->login($username, $password)) {
            echo "Sukses";
            redirect(base_url(), 'refresh');
            // echo "Sukses";
        } else {
            echo "Gagal";
        }
    }
    public function azax() {
        if(!$this->input->is_ajax_request()){
            echo "Bukan ajax";
        }
    }
    public function coba() {
        $data = array(
            'title'=>"COBA"
        );
        $this->load->view('dashboard', $data);
    }
	public function index()
	{
    //     if($this->session->userdata('logged_in')==TRUE) {
	// 		redirect(base_url(), 'refresh');
    //     }
        $data['title'] = "Login";
		$this->load->view('login', $data);
	}
}
