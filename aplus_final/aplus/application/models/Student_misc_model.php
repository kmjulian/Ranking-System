<?php
class Student_misc_model extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
    }
    
    function get_grades($username, $subject)
    {
    	$data = array(
    			'users.username' => $username,
    			'grade_master.subject' => $subject
    		);

    	$this->db->select('*');
    	$this->db->from('grade_master');
    	$this->db->join('users', 'users.userId =grade_master.userId', 'left');
    	$this->db->join('final_grade_id', 'grade_master.userId = final_grade_id.studentId', 'left');
    	$this->db->where($data);
    	$this->db->order_by('field(grade_master.item, "assignment", "seatwork", "quiz", "gwork", "rec", "attendance")');

    	$query = $this->db->get();

    	return $query->result_array();
    }

    function get_section_students($id)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('section_students', 'users.userId = section_students.studentId', 'left');
        $this->db->where('section_students.sectionId', $id);
        $this->db->order_by('users.last_name');

        $query = $this->db->get();

        return $query->result_array();
    }

        function get_students_by_rank($id, $subject)
    {
        $data = array(
                'section.sectionId' => $id,
                'grade_master.subject' => $subject
            );
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('grade_master', 'users.userId = grade_master.userId', 'left');
        $this->db->join('final_grade_id', 'grade_master.userId = final_grade_id.studentid', 'left');
        $this->db->join('section_students', 'users.userId = section_students.studentId', 'left');
        $this->db->join('section', 'section_students.sectionId = section.sectionId', 'left');
        $this->db->where($data);
        $this->db->group_by('users.userId');
        $this->db->order_by('final_grade_id.final_grade', 'desc');

        $query = $this->db->get();

        return $query->result_array();
    }

    function get_section_name($id)
    {
        $this->db->select('*');
        $this->db->from('section');
        $this->db->join('section_levels', 'section.sectionId = section_levels.sectionId', 'left');
        $this->db->join('levels', 'section_levels.level_id = levels.level_id', 'left');
        $this->db->where('section.sectionId', $id);

        $query = $this->db->get();

        return $query->result_array();
    }

    function get_sections($id)
    {
        $this->db->select('*');
        $this->db->from('section');
        $this->db->join('section_lecturers', 'section.sectionId = section_lecturers.sectionId', 'left');
        $this->db->join('users', 'section_lecturers.lecturerId = users.userId', 'left');
        $this->db->join('section_levels', 'section.sectionId = section_levels.sectionId', 'left');
        $this->db->join('levels', 'section_levels.level_id = levels.level_id', 'left');
        $this->db->join('edu_stage', 'levels.edu_stage_id = edu_stage.edu_stage_id', 'left');
        $this->db->where('users.userId', intval($id['userId']));

        $query = $this->db->get();
        return $query->result_array();
    }

    function get_subject($username)
    {
        $this->db->select('department.dept_name');
        $this->db->from('department');
        $this->db->join('dept_lecturers', 'department.dept_id = dept_lecturers.dept_id', 'left');
        $this->db->join('users', 'dept_lecturers.lecturer_id = users.userId', 'left');
        $this->db->where('users.username', $username);

        $query = $this->db->get();

        return $query->result_array();
    }
}
?>