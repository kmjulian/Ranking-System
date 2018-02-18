<?php


class V_Regional_accts extends CI_Controller
{
	public function __construct()
    {
        parent:: __construct();
        
        $this->load->model('v_regional_model');
        $this->load->model('user_model');
    }

	function index()
	{
		$sess_data = $this->session->userdata('logged in');
		$position = $sess_data['Position'];
		if($position == 'Admin' || $position == 'admin')
		{
			$data['list'] = $this->v_regional_model->select_accts();
			$this->load->view('dashboard/header_view');
			$this->load->view('dashboard/v_regional_accts_view', $data);
			$this->load->view('dashboard/footer_view');	
		}
		else
		{
			redirect('login', 'refresh');
		}	
	}



}