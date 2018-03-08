<?php

class Registrar_Home extends CI_Controller
{
	function index()
	{
		$this->load->view('registrar_views/header');
		$this->load->view('registrar_views/registrar_home_view');
		$this->load->view('registrar_views/footer');
	}
}