<?php

class C_Regional extends CI_Controller
{
	function index()
	{
		$this->load->view('dashboard/header_view');
		$this->load->view('dashboard/c_regional_view');
	}
}