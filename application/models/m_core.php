<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_core extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_all_devices()
    {
    	return $this->db->get('device');
    }

    function delete_device($address = '')
    {
    	if($address != '')
    		$this->db->delete('device', array('address' => $address));
    }

    function add_device($address = '', $description = '')
    {
        if($address != '' && $description != '') {
            $data = array(
                        'address' => strtoupper($address),
                        'description' => $description
                    );

            $this->db->insert('device', $data);
        }
    }

    function edit_device($address = '', $description = '')
    {
        if($address != '' && $description != '') {
            $data = array(
                        'description' => $description
                    );

            $this->db->where('address', $address);
            $this->db->update('device', $data); 
        }
    }

    function get_device($address = '')
    {
        if($address != '') {
            return $this->db->get_where('device', array('address' => substr($address, 1)));
        }
    }

    function get_device_status($address = '')
    {
        if($address != '') {
            $this->db->select('status');
            $this->db->where('address', substr($address, 1));

            return $this->db->get('device');
        }
    }

    function get_device_schedule($address = '')
    {
        if($address != '') {
            $this->db->select('schedule_on, schedule_off');
            $this->db->where('address', substr($address, 1));

            return $this->db->get('device')->row();
        }
    }

    function edit_schedule($address = '', $schedule_on = '', $schedule_off = '')
    {
        if($address != '' && $schedule_on != '' && $schedule_off != '') {


            $data = array(
                        'schedule_on' => $schedule_on,
                        'schedule_off' => $schedule_off
                    );

            $this->db->where('address', substr($address, 1));
            $this->db->update('device', $data);

            // edit crontab table
            // check if current address exist
            $this->db->where('device_address', substr($address, 1));
            $this->db->from('crontab');

            $sum = $schedule_on + $schedule_off;

            if($this->db->count_all_results() > 0) {
                // update
                $data = array(
                            'device_address' => substr($address, 1),
                            'row' => '*/'.$sum.' * * * * sudo perl /var/www/suvi/script/schedule.pl '.$address.' '.$schedule_on*60
                        );

                $this->db->where('device_address', substr($address, 1));
                $this->db->update('crontab', $data);
            } else {
                // insert
                $data = array(
                            'device_address' => substr($address, 1),
                            'row' => '*/'.$sum.' * * * * sudo perl /var/www/suvi/script/schedule.pl '.$address.' '.$schedule_on*60
                        );

                $this->db->insert('crontab', $data);
            }

            // fetch all crontab
            
            return $this->db->get('crontab');
        }
    }

    function get_device_history($address = '')
    {
        if($address != '') {
            $this->db->select('datetime, current');
            $this->db->where('device_address', substr($address, 1));
            $this->db->order_by('datetime', 'desc');
            $this->db->limit(24);

            return $this->db->get('history');
        }
    }
}