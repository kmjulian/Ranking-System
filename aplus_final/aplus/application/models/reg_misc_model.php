<?php
class reg_misc_model extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
    }
     //Admin Functions 
     function get_section()
   	{
   		$this->db->select('*');
   		$this->db->from('section');

   		$query = $this->db->get();

   		return $query->result();
   	}

     function get_freesection()
    {
      $this->db->select('*');
      $this->db->from('section');
      $this->db->where('section.lecturerId = 0');
      $query = $this->db->get();

      return $query->result();
    }


    function getschool($regusername)
    {
      //$this->db->select('schoolId');
      //$this->db->from('users');
      //$this->db->where('username',$regusername);
       $query = $this->db->select('schoolId as school')->from('users')->where('username', $regusername)->get();

   //   $query = $this->db->get();

      return $query->row()->school;
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

     function insert_lec($fname, $mname, $lname, $gender, $address, $city, $province, $zip, $number, $email, $username, $password,$school)
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
        'password' => $password,
        'schoolId' => $school
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

    function insert_lec_role($id)
    {
      
        $data = array(
          'roleId' => 2,
          'userId' => $id 
        );
      
      $this->db->insert('user_roles', $data);
    }


    function insert_lecturer_department($dept, $id)
    {
      if($dept = 'math')
        $deptid = '1';
      
      else if($dept = 'english')
        $deptid = '2';
     
      else if($dept = 'science')
        $deptid = '3';
      
      else if($dept = 'filipino')
        $deptid = '4';
      
      else if($dept = 'mapeh')
        $deptid = '5';
      
      else if($dept = 'history')
        $deptid = '6';
      else
      	$deptid='0';

      $data = array(
          'dept_id' => $deptid,
          'lecturer_id' => $id 
        );
      $this->db->insert('dept_lecturers', $data);
    }


    function create_section($sec_name, $capacity,$grdlevel)
    {
    	$data = array(
    		'sectionname' => $sec_name,
    		'capacity' => $capacity,
        'level' => $grdlevel
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

    //Dept Head Functions
function get_lecturers($id)
    {
        //intval($id['userId']);
      //$this->db->select('*');
      //$this->db->from('users');
      //$this->db->join('dept_lecturers', 'users.userId = dept_lecturers.lecturer_id', 'left');
      //$this->db->join('department', 'department.dept_id = dept_lecturers.dept_id', 'left');
      //$this->db->where('department.dept_head', intval($id//['userId']));

      //$query = $this->db->get();
      //return $query->result();
      
      $this->db->select('*');
      $this->db->from('users');
      $this->db->join('dept_lecturers', 'users.userId = dept_lecturers.lecturer_id', 'left');
      $this->db->join('user_roles','user_roles.userId = users.userId','left');
      $this->db->where('user_roles.roleId','2');

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
        $this->db->set('section.lecturerId',$lec,False);
        $this->db->where('section.sectionId',$sec);
        $this->db->update('section');
              
    }

    function check_section($sec)
    {
        $this->db->select('lecturerId');
        $this->db->from('section');
        $this->db->where('sectionId',$sec);
        $query = $this->db->get();
        
        if($query = 0)
          return true;
        else
          return false;

    }


      

}

?>