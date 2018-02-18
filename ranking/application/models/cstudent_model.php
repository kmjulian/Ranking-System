<<?php

class Cstudent_Model extends CI_Model
{
	public function __construct()
	{
		parent:: __construct();
	}

	function create_student_acct($details)
	{
		$query = $this->db->insert('user', $details);
	}

	function insert_student_details($details)
	{
		$this->db->select_max('user_id');
        $query = $this->db->get('user');
        $id = $query->result();
        $ui = array();
        foreach($id as $row){
            $ui = array(
                'uid' => $row->user_id
            );
        }

        $this->db->set('user_id', $ui['uid']);
        $query = $this->db->insert('student', $details);
        return $this->db->insert_id();
	}
}