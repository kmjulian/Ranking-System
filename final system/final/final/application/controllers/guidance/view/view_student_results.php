<?php

class View_Student_Results extends CI_Controller
{
	function index()
	{
		$this->load->view('guidance_views/header');
		$this->load->view('guidance_views/view/view_student_results_view');
		$this->load->view('guidance_views/footer');
	}
}