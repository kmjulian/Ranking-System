<?php

class Principal_Home extends CI_Controller
{
	function index()
	{
		$this->load->view('principal_views/header');
		$this->load->view('principal_views/principal_home_view');
		$this->load->view('principal_views/footer');
	}
}