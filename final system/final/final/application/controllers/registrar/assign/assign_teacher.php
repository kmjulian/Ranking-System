<?php

class Assign_Teacher extends CI_Controller
{
	function index()
	{
		$this->load->view('registrar_views/header');
		$this->load->view('registrar_views/assign/assign_teacher_view');
		$this->load->view('registrar_views/footer');
	}
}