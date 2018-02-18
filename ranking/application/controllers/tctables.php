<?php

class tcTables extends CI_Controller
{
	function index()
	{
		$this->load->view('tables/header_view-tc');
		$this->load->view('tables/tables_view-tc');
	}
}