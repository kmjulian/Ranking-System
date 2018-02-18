<?php

class adCharts extends CI_Controller
{
	function index()
	{
		$this->load->view('charts/header_view-admin');
		$this->load->view('charts/charts_view-admin');
	}
}