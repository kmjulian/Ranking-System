<?php

class Admin extends CI_Controller
{
	function index()
	{
<<<<<<< HEAD
		
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
=======
		$this->load->view('dashboard/header_view');
		$this->load->view('dashboard/dashboard_view');
		$this->load->view('dashboard/footer_view');
>>>>>>> f8947a18a05ec3d77b7e0026dc5eec96e179ff15
	}
}