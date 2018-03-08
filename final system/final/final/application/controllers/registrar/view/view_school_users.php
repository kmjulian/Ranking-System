<?php

class View_School_Users extends CI_Controller
{
	function index()
	{
		$this->load->view('registrar_views/header');
		$this->load->view('registrar_views/view/view_school_users_view');
		$this->load->view('registrar_views/footer');
	}
}