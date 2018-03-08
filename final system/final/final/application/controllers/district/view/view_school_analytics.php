<?php

class View_School_Analytics extends CI_Controller
{
	function index()
	{
		$this->load->view('district_views/header');
		$this->load->view('district_views/view/view_school_analytics_view');
		$this->load->view('district_views/footer');
	}
}