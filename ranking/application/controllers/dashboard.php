<?php
class Dashboard extends CI_Controller
{

	public function index(){
		$sess_data = $this->session->userdata('logged in');
		if($sess_data == null)
		{
			redirect('login', 'refresh');
		}
		else
		{
			$this->load->view('dashboard/header_view.php');
			$this->load->view('dashboard/dashboard_view.php');
			$this->load->view('dashboard/footer_view.php'); 	
		}
	}

	public function logout(){
		session_destroy();
		redirect('/'); 
	}
}

?> 