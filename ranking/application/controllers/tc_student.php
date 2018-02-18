<?php

class TC_Student extends CI_Controller
{
	function index()
	{
		$this->load->view('teacher/header_view');
		$this->load->view('teacher/tc_student_view');
	}
}