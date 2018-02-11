<?php

class Student extends CI_Controller
{
	function index()
	{
		$this->load->view('student/header_view');
		$this->load->view('student/student_view');
		
	}
}