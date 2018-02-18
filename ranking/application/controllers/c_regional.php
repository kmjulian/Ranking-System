<?php

class C_Regional extends CI_Controller
{
	function __construct()
    {
        parent:: __construct();
        $this->load->model('cregional_model');
        $this->load->model('user_model');
    }

	function index()
	{
		$sess_data = $this->session->userdata('logged in');
		$position = $sess_data['Position'];
		if($position == 'Admin' || $position == 'admin')
		{
			$this->load->view('dashboard/header_view');
			$this->load->view('dashboard/c_regional_view');
		} 
		else
		{
			redirect('login','refresh');
		}
		
	}


	function create_regional_acct()
	{

		$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.user_username]');
		$this->form_validation->set_message('is_unique', 'username already exist!');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[regional.Regional_Email]');
		$this->form_validation->set_message('is_unique', '%s already exists!');

		if($this->form_validation->run() == FALSE)
        {   
            redirect('c_regional', 'refresh');           
        }
        else
        {
        	$username = $this->input->post('username');
			$password = $this->input->post('password');
			$fname = $this->input->post('fname');
			$mname = $this->input->post('mname');
			$lname = $this->input->post('lname');
			$pnumber = $this->input->post('number');
			$email = $this->input->post('email');
			$gender = $this->input->post('gender');
			$region = $this->input->post('region');
			$province = $this->input->post('province');
			$city = $this->input->post('city');
			$zip = $this->input->post('zip');
			$lot = $this->input->post('lot');
			$barangay = $this->input->post('barangay');

			$acct_details = array(
				'user_username' => $username,
				'user_password' => $password,
				'user_position' => 'Regional'
			);

			$regional_details = array(
				'Regional_Fname' => $fname,
				'Regional_Mname' => $mname,
				'Regional_Lname' => $lname,
				'Regional_Pnumber' => $pnumber,
				'Regional_Gender' => $gender,
				'Regional_Email' => $email,
				'Regional_Lot' => $lot,
				'Regional_Barangay' => $barangay,
				'Regional_City' => $city,
				'Regional_Zip' => $zip,
				'Regional_Province' => $province
				
			);
			$this->cregional_model->create_regional_acct($acct_details);
			$this->cregional_model->insert_regional_details($regional_details);
        }

	}
}