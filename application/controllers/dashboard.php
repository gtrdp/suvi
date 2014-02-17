<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		$data['page'] = 'dashboard';
		$data['full_name'] = $this->session->userdata('nama');
		$data['notif'] = $this->session->flashdata('notif');

		$data['device'] = $this->m_core->get_all_devices();



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

	public function delete($address = '')
	{
		if($address != '') {
			$this->m_core->delete_device($address);

			$this->session->set_flashdata('notif', 'Device '.$address.' has been deleted.');
		} else{
			$this->session->set_flashdata('notif', 'Nothing happened.');
		}

		redirect('dashboard');
	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/welcome.php */