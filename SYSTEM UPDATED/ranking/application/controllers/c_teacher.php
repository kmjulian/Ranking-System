<?php

class C_Teacher extends CI_Controller
{
	function index()
	{
		$this->load->view('dashboard/header_view');
		$this->load->view('dashboard/c_teacher_view');
	}
}