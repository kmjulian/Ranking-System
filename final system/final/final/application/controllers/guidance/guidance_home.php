<?php

class Guidance_Home extends CI_Controller
{
	function index()
	{
		$this->load->view('guidance_views/header');
		$this->load->view('guidance_views/guidance_home_view');
		$this->load->view('guidance_views/footer');
	}
}