<?php

class View_Student_Analytics extends CI_Controller
{
	function index()
	{
		$this->load->view('student_views/header');
		$this->load->view('student_views/view/view_student_analytics_view');
		$this->load->view('student_views/footer');
	}
}