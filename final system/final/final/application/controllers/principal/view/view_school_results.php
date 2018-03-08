<?php

class View_School_Results extends CI_Controller
{
	function index()
	{
		$this->load->view('principal_views/header');
		$this->load->view('principal_views/view/view_school_results_view');
		$this->load->view('principal_views/footer');
	}
}