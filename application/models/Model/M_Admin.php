<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model M_Admin
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    	Ryan Aprianto
 * @link      	https://github.com/Ryan1604/
 *
 */

class M_Admin extends CI_Model {
	
	// ------------------------------------------------------------------------
	public function get_data()
    {
		$this->db->from('auth');
		$this->db->where('role', 2);
		$query = $this->db->get();
		return $query;
    }
 	// ------------------------------------------------------------------------

  	// ------------------------------------------------------------------------
  	public function insert_data($data,$table)
    {
		$this->db->insert($table,$data);
	}
	
	public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
	}
	// ------------------------------------------------------------------------
	  
	public function check_img($id)
	{
		$this->db->select('*');
		$this->db->from('auth');
		$this->db->where('id', $id);
		$query = $this->db->get();

		return $query;
	}
	  
	public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

}

/* End of file M_Jurnalis.php */
/* Location: ./application/models/M_Jurnalis.php */
