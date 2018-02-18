<?php

class User_model extends CI_Model
{

	public function __construct()
	{
		parent:: __construct();
	}

	function get_data($username, $password)
	{
		$this -> db	->select('user_id, user_position, user_username, user_password')
					->from('user')
					->where('user_username', $username)
					->where('user_password', $password)
					->limit(1);

		$query = $this -> db -> get();

        if($query -> num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }

	}
}