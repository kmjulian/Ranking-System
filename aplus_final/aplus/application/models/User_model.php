<?php
class User_model extends CI_Model
{

	public function __construct()
	{
		parent:: __construct();
	}

	public function validate_user($username, $password)
	{
		$array = array(
				'username' => $username,
				'password' => $password,
				);

		$this->db->select('*');
		$this->db->from('users');
		$this->db->where($array);

		$query = $this->db->get();

		if ($query->num_rows() > 0)
			return $query->row();
		else
			return false;
	}

	public function validate_school($username,$schoolnum)
{
	$array = array(
			'username' =>$username,
			'schoolId' =>$schoolnum
		);
	$query = $this->db->get();
	if($query->num_rows()>0)
		return $query->row();
	else
		return false;
}

		public function validate_user_principal($username)
	{
		$data = array(
				'users.username' => $username,
				'roles.rolename' => 'principal'
			);
		$this->db->select('rolename');
		$this->db->from('roles');
		$this->db->join('user_roles', 'roles.roleId = user_roles.roleId', 'left');
		$this->db->join('users', 'user_roles.userId = users.userId', 'left');
		$this->db->where($data);

		$query = $this->db->get();

		if ($query->num_rows() >= 1)
			return true;
		else 
			return false;
	}

	public function validate_user_admin($username)
	{
		$data = array(
				'users.username' => $username,
				'roles.rolename' => 'admin'
			);
		$this->db->select('rolename');
		$this->db->from('roles');
		$this->db->join('user_roles', 'roles.roleId = user_roles.roleId', 'left');
		$this->db->join('users', 'user_roles.userId = users.userId', 'left');
		$this->db->where($data);

		$query = $this->db->get();

		if ($query->num_rows() >= 1)
			return true;
		else 
			return false;
	}

	public function validate_user_registrar($username)
	{
		$data = array(
				'users.username' => $username,
				'roles.rolename' => 'registrar'
			);
		$this->db->select('rolename');
		$this->db->from('roles');
		$this->db->join('user_roles', 'roles.roleId = user_roles.roleId', 'left');
		$this->db->join('users', 'user_roles.userId = users.userId', 'left');
		$this->db->where($data);

		$query = $this->db->get();

		if ($query->num_rows() >= 1)
			return true;
		else 
			return false;
	}

	public function validate_user_lecturer($username)
	{
		$data = array(
				'users.username' => $username,
				'roles.rolename' => 'instructor'
			);

		$this->db->select('rolename');
		$this->db->from('roles');
		$this->db->join('user_roles', 'roles.roleId = user_roles.roleId', 'left');
		$this->db->join('users', 'user_roles.userId = users.userId', 'left');
		$this->db->where($data);

		$query = $this->db->get();

		if ($query->num_rows() >= 1)
			return true;
		else 
			return false;
	}

	public function validate_user_student($username)
	{
		$data = array(
				'users.username' => $username,
				'roles.rolename' => 'student'
			);

		$this->db->select('rolename');
		$this->db->from('roles');
		$this->db->join('user_roles', 'roles.roleId = user_roles.roleId', 'left');
		$this->db->join('users', 'user_roles.userId = users.userId', 'left');
		$this->db->where($data);

		$query = $this->db->get();

		if ($query->num_rows() >= 1)
			return true;
		else 
			return false;
	}

	public function check_regkey($key)
	{
		$this->db->select('*');
		$this->db->from('regkey');
		$this->db->where('regkey', $key);
		$this->db->where('regkey_used', 'n');

		$query = $this->db->get();

		if ($query->num_rows() == 1)
			return true;
		else
			return false;
	}

	public function update_regkey($key)
	{
		$this->db->where('regkey', $key);
		$this->db->from('regkey');
		$this->db->set('regkey_used', 'y');
		$this->db->update('regkey');
	}

	public function register($fname, $mname, $lname, $gender, $address, $city, $province, $phone, $zip, $email, $username, $password,$school)
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
				'phone_number' => $phone,
				'email' => $email,
				'schoolId' => $school
			); 

		$this->db->insert('users', $data);
	}


	public function sectioninsert($id,$grdlvl)
	{
			
		 //$this->db->select('section_levels.level_id',$grdlvl);
		//selects available section
		$this->db->select('sectionId');
		$this->db->from('section');
		$this->db->where('currentcap < capacity');
		$this->db->where('level',$grdlvl);
		$this->db->limit(1);
		$query = $this->db->get();
		$section = $query->row_array();
		echo var_dump($this->db->last_query());

		//increments currentcap
		$this->db->where('currentcap < capacity');
		$this->db->set('section.currentcap','currentcap+1',FALSE);		
		$this->db->limit(1);
		$this->db->update('section');

		$data = array(
				'sectionId' => $section['sectionId'],
				'studentId' => $id
			);	

		//Inserts section and sectionid to student table 
		$this->db->insert('section_students',$data);

		
	}


	public function get_role($userId)
	{
		$this->db->select('roles.rolename');
		$this->db->from('roles');
		$this->db->join('user_roles', 'roles.roleId = user_roles.roleId', 'left');
		$this->db->join('users', 'users.userId = user_roles.userId', 'left');
		$this->db->where('users.userId = ' . $userId);

		$query = $this->db->get();

		return $query->row();
	}

	public function get_id($username)
	{
		$this->db->select('userId');
		$this->db->from('users');
		$this->db->where('username', $username);

		$query = $this->db->get();

		return $query->row_array();
	}

	public function get_sid($username)
	{
		$this->db->select('userId');
		$this->db->from('users');
		$this->db->where('username', $username);

		$query = $this->db->get();

		return $query;
	}

	public function get_students()
	{
		$this->db->select("*");
		$this->db->from('users');
		$this->db->join('user_roles', 'users.userId = user_roles.userId', 'left');
		$this->db->where('user_roles.roleId = 3');

		$query = $this->db->get();

		return $query->result();
	}

	public function insert_role_student($id)
	{
		$data = array(
				'roleId' => 3,
				'userId' => intval($id)
			);

		$this->db->insert('user_roles', $data);
	}
}
?>	