<?php

class View_Student_Result extends CI_Controller
{
	function index()
	{
		$this->load->view('student_views/header');
		$this->load->view('student_views/view/view_student_result_view');
		$this->load->view('student_views/footer');
	}
}