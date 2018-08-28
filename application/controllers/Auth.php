<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
	}
	function index()
	{
		$this->load->view('auth/login');
	}

  function chek_login() {
		if (isset($_POST['submit'])){
			//proses login
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$result = $this->M_user->cheklogin($username,$password);
			if(!empty($result)){
				if($result['jabatan']=='Satpam'){
					$this->session->set_userdata($result);
					redirect('bpk_satpam');
				} else if($result['jabatan']=='Admin') {
					$this->session->set_userdata($result);
					redirect('bpk');
				}
			} else {
				// $data['message'] = 'stok yang anda masukkan sudah tidak ada !! ulangi perintah';
				// $data['_view'] = 'auth/login';
				// $this->load->view('layouts/main',$data);
						echo  'stok yang anda masukkan sudah tidak ada !! ulangi perintah';

				redirect('auth');
			}

			// print_r($result);
		}else {
			redirect('auth');
			// echo "salah";
		}
	}

	function logout()  {
		$this->session->sess_destroy();
		redirect('auth');
	}
}
