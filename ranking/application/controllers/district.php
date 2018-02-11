<?php

class District extends CI_Controller
{
	function index()
	{
		$this->load->view('district/header_view');
		$this->load->view('district/district_view');
	}
}