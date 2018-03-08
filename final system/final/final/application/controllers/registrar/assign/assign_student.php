<?php

class Assign_Student extends CI_Controller
{
	function index()
	{
		$this->load->view('registrar_views/header');
		$this->load->view('registrar_views/assign/assign_student_view');
		$this->load->view('registrar_views/footer');
	}
}