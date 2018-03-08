<?php

class Teacher_Home extends CI_Controller
{
	function index()
	{
		$this->load->view('teacher_views/header');
		$this->load->view('teacher_views/teacher_home_view');
		$this->load->view('teacher_views/footer');
	}
}