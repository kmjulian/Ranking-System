<?php

class Create_Section_Model extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
	}

	function insert_section($data)
	{
		$this->db->insert('section', $data);
	}

	
}