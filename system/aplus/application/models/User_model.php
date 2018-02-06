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
				'password' => $password
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
		$this->db->update('regkey_used', 'y');
	}

	public function register($fname, $mname, $lname, $gender, $address, $city, $province, $phone, $zip, $email, $username, $password)
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
				'email' => $email
			);

		$this->db->insert('users', $data);
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