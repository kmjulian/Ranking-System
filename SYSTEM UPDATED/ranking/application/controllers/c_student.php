<?php

class C_Student extends CI_Controller
{
	function index()
	{
		$this->load->view('dashboard/header_view');
		$this->load->view('dashboard/c_student_view');
	}
}