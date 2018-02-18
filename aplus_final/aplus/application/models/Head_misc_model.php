<?php
class Head_misc_model extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
    }

    function get_lecturers($id)
    {
        intval($id['userId']);
    	$this->db->select('*');
    	$this->db->from('users');
    	$this->db->join('dept_lecturers', 'users.userId = dept_lecturers.lecturer_id', 'left');
    	$this->db->join('department', 'department.dept_id = dept_lecturers.dept_id', 'left');
    	$this->db->where('department.dept_head', intval($id['userId']));

    	$query = $this->db->get();
    	return $query->result();
    }

    function insert_lec_sec($lec, $sec)
    {
        $data = array(
                'sectionId' => $sec,
                'lecturerId' => $lec
            );

        $this->db->insert('section_lecturers', $data);
    }
}

?>