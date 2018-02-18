<?php

class tcCharts extends CI_Controller
{
	function index()
	{
		$this->load->view('charts/header_view-tc');
		$this->load->view('charts/charts_view-tc');
	}
}