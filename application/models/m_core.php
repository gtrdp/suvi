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