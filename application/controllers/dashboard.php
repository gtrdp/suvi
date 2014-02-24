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

	public function view($address = '')
	{
		if($address == '' || strlen($address) < 7)
			redirect('dashboard');

		$data['page'] = 'dashboard';
		$data['full_name'] = 'Guntur D Putra';
		$data['notif'] = $this->session->flashdata('notif');
		$data['address'] = $address;

		// get on off status of the device
		$status = $this->m_core->get_device_status($address)->row()->status;
		$data['status_relay'] = strtoupper($status);

		if($status == 'on'){
			$data['data_percent'] = 100;
			$data['checked'] = 'checked';
		}else{
			$data['data_percent'] = 0;
			$data['checked'] = '';
		}

		// get device schedule
		$schedule = $this->m_core->get_device_schedule($address);
		$data['schedule_on'] = $schedule->schedule_on;
		$data['schedule_off'] = $schedule->schedule_off;

		$data['history'] = $this->m_core->get_device_history($address);
		
		$this->load->template('v_view', $data);
	}

	public function schedule_process()
	{
		$address = $this->input->post('address');
		$schedule_on = $this->input->post('schedule_on');
		$schedule_off = $this->input->post('schedule_off');

		if($address != '' && is_numeric($schedule_on) && is_numeric($schedule_off)) {
			if(($schedule_off + $schedule_on) > 60){
				$this->session->set_flashdata('notif', 'Sum of schedule on and schedule off must not more than 60.');
			} else {
				// update database and crontab, and get current crontab
				$crontab = $this->m_core->edit_schedule($address, $schedule_on, $schedule_off);

				$string = '';
				foreach ($crontab->result() as $row) {
					$string .= $row->row . "\n";
				}

				// write to file
				shell_exec("rm coba");
				echo shell_exec("echo '".$string."' >> coba");
				// execute crontab
				echo shell_exec("crontab coba");
			
				$this->session->set_flashdata('notif', 'Successfully updated device schedule.');
			}
		}

		redirect('dashboard/view/'.$address);
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