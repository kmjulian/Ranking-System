<?php

class Admin extends CI_Controller
{
	function index()
	{
		$this->load->view('dashboard/header_view');
		$this->load->view('dashboard/dashboard_view');
	}
}