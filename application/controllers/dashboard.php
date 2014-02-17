<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$nama = $this->session->userdata('nama');
		if(!$nama)
			redirect('login');
	}

	public function index()
	{
		$data['page'] = 'dashboard';
		$data['full_name'] = $this->session->userdata('nama');

		// Variable for
		$this->load->template('v_dashboard', $data);
	}

	public function view($id = '')
	{
		if($id == '' || strlen($id) < 7)
			redirect('dashboard');

		$data['page'] = 'dashboard';
		$data['full_name'] = 'Guntur D Putra';

		$data['id'] = $id;

		$this->load->template('v_view', $data);
	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/welcome.php */