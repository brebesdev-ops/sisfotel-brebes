<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model M_Multiple
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author   	Ryan Aprianto
 * @link      	https://github.com/Ryan1604/
 */

class M_Multiple extends CI_Model {
	
	// ------------------------------------------------------------------------
	public function multiple($warga, $user)
    {
		$this->db->insert('tb_petugas', $warga);
		$id		= $this->db->insert_id();

		$user['id']	= $id;
		$this->db->insert('auth', $user);
		return $insert_id		= $this->db->insert_id();
    }
 	
}

/* End of file M_Rt_model.php */
/* Location: ./application/models/M_Rt_model.php */
