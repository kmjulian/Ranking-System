<?php

class View_School_Results extends CI_Controller
{
	function index()
	{
		$this->load->view('district_views/header');
		$this->load->view('district_views/view/view_school_results_view');
		$this->load->view('district_views/footer');
	}
}