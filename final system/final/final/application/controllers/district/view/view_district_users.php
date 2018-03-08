<?php

class View_District_Users extends CI_Controller
{
	function index()
	{
		$this->load->view('district_views/header');
		$this->load->view('district_views/view/view_district_users_view');
		$this->load->view('district_views/footer');
	}
}