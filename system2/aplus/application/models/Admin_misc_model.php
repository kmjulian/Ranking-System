<?php
class Admin_misc_model extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
    }

     function get_section()
   	{
   		$this->db->select('*');
   		$this->db->from('section');

   		$query = $this->db->get();

   		return $query->result();
   	}

    function get_instructor_id($username)
    {
      $this->db->select('userId');
      $this->db->from('users');
      $this->db->where('username', $username);

      $query = $this->db->get();

      return $query->result_array();
    }

    function get_instructor()
    {
      $this->db->select('*');
      $this->db->from('users');
      $this->db->join('user_roles', 'users.userId = user_roles.userId', 'left');
      $this->db->where('roleId', 2);

      $query = $this->db->get();

      return $query->result();
    }

    function get_student()
    {
      $this->db->select('*');
      $this->db->from('users');
      $this->db->join('user_roles', 'users.userId = user_roles.userId', 'left');
      $this->db->where('roleId', 3);

      $query = $this->db->get();

      return $query->result();
    }

    function get_head()
    {
      $this->db->select('*');
      $this->db->from('users');
      $this->db->join('user_roles', 'users.userId = user_roles.userId', 'left');
      $this->db->join('department', 'users.userId = department.dept_head', 'left');
      $this->db->where('roleId', 4);

      $query = $this->db->get();

      return $query->result();
    }

    function get_departments()
    {
      $this->db->select('*');
      $this->db->from('department');

      $query = $this->db->get();

      return $query->result();
    }

     function insert_lec($fname, $mname, $lname, $gender, $address, $city, $province, $zip, $number, $email, $username, $password)
   	{
   		$data = array(
   			'username' => $username,
   			'password' => $password,
   			'first_name' => $fname,
   			'middle_name' => $mname,
   			'last_name' => $lname,
   			'gender' => $gender,
   			'address' => $address,
   			'city' => $city,
   			'province' => $province,
   			'zipcode' => $zip,
   			'phone_number' => $number,
   			'email' => $email,
        'password' => $password
   			);

   		$this->db->insert('users', $data);
   	}

    function check_uniqueness($username)
    {
      $this->db->select('*');
      $this->db->from('users');
      $this->db->where('username', $username);

      $query = $this->db->get();

      if ($query->num_rows() != 0)
        return false;
      else
        return true;
    }

     function insert_adv_class($section, $id)
   	{
      $data = array(
        'sectionId' => $section,
        'adv_Id' => $id
        );
   		$this->db->insert('section_adv', $data);
   	}

    function insert_user_role($id)
    {
      $data = array(
          'roleId' => 2,
          'userId' => $id 
        );
      $this->db->insert('user_roles', $data);
    }

    function insert_lecturer_department($deptid, $id)
    {
      $data = array(
          'dept_id' => $deptid,
          'lecturer_id' => $id 
        );
      $this->db->insert('dept_lecturers', $data);
    }

    function create_section($sec_name, $capacity)
    {
    	$data = array(
    		'sectionname' => $sec_name,
    		'capacity' => $capacity
    		);

    	$this->db->insert('section', $data);
    }

    function insert_section_level($section, $level)
    {
      $data = array(
          'sectionId' => intval($section),
          'level_id' => intval($level)
        );

      $this->db->insert('section_levels', $data);
    }

    function get_section_id($section)
    {
      $this->db->select('sectionId');
      $this->db->from('section');
      $this->db->where('sectionname', $section);

      $query = $this->db->get();

      return $query->result_array();
    }

    function insert_key($data)
    {
    	$this->db->insert('regkey', $data);
    }
}

?>