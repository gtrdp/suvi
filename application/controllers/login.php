<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('m_login');
	}

	public function index()
	{
		//check login
		$user = $this->session->userdata('userid');
		
		if($user)
			redirect('dashboard');
		
		$data['notif'] = $this->session->flashdata('notif');
		$this->load->view('v_login', $data);
	}

	public function process()
	{
		$result = $this->m_login->cek_login();

		if(count($result)){
			$this->session->set_userdata('userid', $result->id);
			$this->session->set_userdata('nama', $result->nama);

			$this->session->set_flashdata('notif', 'Welcome back, ' . $result->nama . '!');
			
			redirect('dashboard');
		}else{
			$this->session->set_flashdata('notif', 'Username atau password salah!');

			redirect('login');
		}

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */