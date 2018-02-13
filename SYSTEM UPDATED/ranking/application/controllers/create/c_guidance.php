<?php

class C_Guidance extends CI_Controller
{
	function index()
	{
		$this->load->view('dashboard/header_view');
		$this->load->view('dashboard/c_guidance_view');
		$this->load->view('dashboard/footer_view');
	}
}