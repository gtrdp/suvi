<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data['page'] = 'about';
		$data['full_name'] = 'Guntur D Putra';

		// Variable for
		$this->load->template('v_about', $data);
	}

}

/* End of file about.php */
/* Location: ./application/controllers/about.php */