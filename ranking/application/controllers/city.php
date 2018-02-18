<?php

class City extends CI_Controller
{
	function index()
	{
		$this->load->view('city/header_view');
		$this->load->view('city/city_view');
		$this->load->view('city/footer_view');
	}
}