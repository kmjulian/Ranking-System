<?php
class Student_misc_model extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
    }
    
    function get_math($username, $subject)
    {
    	$data = array(
    			'users.username' => $username,
    			'grade_master.subject' => $subject
    		);

    	$this->db->select('*');
    	$this->db->from('grade_master');
    	$this->db->join('users', 'users.userId =grade_master.userId', 'left');
    	$this->db->join('final_grade_id', 'grade_master.final_grade_id = final_grade_id.id', 'left');
    	$this->db->where($data);
    	$this->db->order_by('field(grade_master.item, "assignment", "seatwork", "quiz", "gwork", "rec", "attendance")');

    	$query = $this->db->get();

    	return $query->result_array();
    }
}
?>