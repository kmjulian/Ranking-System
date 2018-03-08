<?php

class Create_School_Model extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
	}

	function insert_school($data)
	{
		$this->db->insert('school', $data);
	}

	
}