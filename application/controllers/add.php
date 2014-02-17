<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('m_core');

		$nama = $this->session->userdata('nama');
		if(!$nama)
			redirect('login');
	}

	public function index()
	{
		$data['page'] = 'add';
		$data['full_name'] = $this->session->userdata('nama');
		$data['notif'] = $this->session->flashdata('notif');

		// Variable for
		$this->load->template('v_add', $data);
	}

	public function process()
	{
		$address = $this->input->post('address');
		$description = $this->input->post('description');

		if($address != '' && $description != '') {
			$this->m_core->add_device($address, $description);
			$this->session->set_flashdata('notif', 'Device has been successfully inserted!');
		}

		redirect('add');
	}
}

/* End of file add.php */
/* Location: ./application/controllers/add.php */