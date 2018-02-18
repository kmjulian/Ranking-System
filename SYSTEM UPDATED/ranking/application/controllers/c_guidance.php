<?php

class C_Guidance extends CI_Controller
{

	function __construct()
    {
        parent:: __construct();
        $this->load->model('cguidance_model');
        $this->load->model('user_model');
    }

	function index()
	{
		$sess_data = $this->session->userdata('logged in');
		$position = $sess_data['Position'];
		if($position == 'Admin' || $position == 'admin')
		{
			$this->load->view('dashboard/header_view');
			$this->load->view('dashboard/c_guidance_view');
		} 
		else
		{
			redirect('login','refresh');
		}
		
	}


	function create_guidance_acct()
	{

		$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.user_username]');
		$this->form_validation->set_message('is_unique', 'username already exist!');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[regional.Regional_Email]');
		$this->form_validation->set_message('is_unique', '%s already exists!');

		if($this->form_validation->run() == FALSE)
        {   
            redirect('c_guidance', 'refresh');           
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
				'user_position' => 'Guidance'
			);

			$guidance_details = array(
				'Guidance_Fname' => $fname,
				'Guidance_Mname' => $mname,
				'Guidance_Lname' => $lname,
				'Guidance_Pnumber' => $pnumber,
				'Guidance_Gender' => $gender,
				'Guidance_Email' => $email,
				'Guidance_Lot' => $lot,
				'Guidance_Barangay' => $barangay,
				'Guidance_City' => $city,
				'Guidance_Zip' => $zip,
				'Guidance_Province' => $province
				
			);

			$this->cguidance_model->create_guidance_acct($acct_details);
			$this->cguidance_model->insert_guidance_details($guidance_details);
        }


	function index()
	{
		$this->load->view('dashboard/header_view');
		$this->load->view('dashboard/c_guidance_view');
		$this->load->view('dashboard/footer_view');

	}
}