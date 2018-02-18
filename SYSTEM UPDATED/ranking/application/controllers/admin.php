<?php

class Admin extends CI_Controller
{
	function index()
	{
		
		$sess_data = $this->session->userdata('logged in');
		$position = $sess_data['Position'];
		if($position == 'Admin' || $position == 'admin')
		{
			$this->load->view('dashboard/header_view');
			$this->load->view('dashboard/dashboard_view');
			$this->load->view('dashboard/footer_view');		
		} 
		else
		{
			redirect('login','refresh');
		}
		$this->load->view('dashboard/header_view');
		$this->load->view('dashboard/dashboard_view');
		$this->load->view('dashboard/footer_view');
	}
}