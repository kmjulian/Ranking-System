<?php

class Teacher extends CI_Controller
{
	function index()
	{
		$this->load->view('school/header_view');
		$this->load->view('teacher/teacher_view');
		
	}
}