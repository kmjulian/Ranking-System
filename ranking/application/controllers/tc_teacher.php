<?php

class TC_Teacher extends CI_Controller
{
	function index()
	{
		$this->load->view('teacher/header_view');
		$this->load->view('teacher/tc_teacher_view');
	}
}