<?php

class Student_Home extends CI_Controller
{
	function index()
	{
		$this->load->view('student_views/header');
		$this->load->view('student_views/student_home_view');
		$this->load->view('student_views/footer');
	}
}