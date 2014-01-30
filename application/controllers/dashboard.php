<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['page'] = 'dashboard';
		$data['full_name'] = 'Guntur D Putra';
		$data['superuser'] = 1;

		// Variable for
		$this->load->template('v_dashboard', $data);
	}

	public function wawa()
	{
		return 'hash_algos(oid)';
	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/welcome.php */