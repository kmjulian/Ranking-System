<?php

class District_Home extends CI_Controller
{
	function index()
	{
		$sess_data = $this->session->userdata('logged in');
		$position = $sess_data['Position'];
		if($position == 'District' || $position == 'district')
		{
			$this->load->view('district_views/header');
			$this->load->view('district_views/district_home_view');
			$this->load->view('district_views/footer');
		}
		else
		{
			redirect('login','refresh');
		}
	}
}