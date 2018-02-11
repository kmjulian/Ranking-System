<?php

class Regional extends CI_Controller
{
	function index()
	{
		$this->load->view('regional/header_view');
		$this->load->view('regional/regional_view');
	}
}