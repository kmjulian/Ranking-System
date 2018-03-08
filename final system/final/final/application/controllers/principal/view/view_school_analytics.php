<?php

class View_School_Analytics extends CI_Controller
{
	function index()
	{
		$this->load->view('principal_views/header');
		$this->load->view('principal_views/view/view_school_analytics_view');
		$this->load->view('principal_views/footer');
	}
}