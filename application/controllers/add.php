<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add extends CI_Controller {

	public function index()
	{
		$data['page'] = 'add';
		$data['full_name'] = 'Guntur D Putra';

		// Variable for
		$this->load->template('v_add', $data);
	}

}

/* End of file add.php */
/* Location: ./application/controllers/add.php */