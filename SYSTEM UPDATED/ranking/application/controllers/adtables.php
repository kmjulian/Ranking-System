a<?php

class adTables extends CI_Controller
{
	function index()
	{
		$this->load->view('tables/header_view-admin');
		$this->load->view('tables/tables_view-admin');
	}
}