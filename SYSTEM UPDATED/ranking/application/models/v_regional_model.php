<?php 

class V_Regional_Model extends CI_Model
{
	public function __construct()
	{
		parent:: __construct();
	}

	function select_accts()
	{
		$this->db->select('r.Regional_ID, u.user_id');
		$this->db->from('regional AS r');
		$this->db->join('user AS u', 'u.user_id = r.user_id');
		$query = $this->db->get();
		return $query->result_array();
	}
}