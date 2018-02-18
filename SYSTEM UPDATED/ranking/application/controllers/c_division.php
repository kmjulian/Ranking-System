<?php

class C_Division extends CI_Controller
{
<<<<<<< HEAD
	function __construct()
    {
        parent:: __construct();
        $this->load->model('cdivision_model');
        $this->load->model('user_model');
    }

	function index()
	{
		$sess_data = $this->session->userdata('logged in');
		$position = $sess_data['Position'];
		if($position == 'Admin' || $position == 'admin')
		{
			$this->load->view('dashboard/header_view');
			$this->load->view('dashboard/c_division_view');
			
		} 
		else
		{
			redirect('login','refresh');
		}
		
	}


	function create_division_acct()
	{

		$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.user_username]');
		$this->form_validation->set_message('is_unique', 'username already exist!');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[regional.Regional_Email]');
		$this->form_validation->set_message('is_unique', '%s already exists!');

		if($this->form_validation->run() == FALSE)
        {   
            redirect('c_division', 'refresh');           
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
				'user_position' => 'Division'
			);

			$division_details = array(
				'Division_Fname' => $fname,
				'Division_Mname' => $mname,
				'Division_Lname' => $lname,
				'Division_Pnumber' => $pnumber,
				'Division_Gender' => $gender,
				'Division_Email' => $email,
				'Division_Lot' => $lot,
				'Division_Barangay' => $barangay,
				'Division_City' => $city,
				'Division_Zip' => $zip,
				'Division_Province' => $province
				
			);

			$this->cdivision_model->create_division_acct($acct_details);
			$this->cdivision_model->insert_division_details($division_details);
        }

=======
	function index()
	{
		$this->load->view('dashboard/header_view');
		$this->load->view('dashboard/c_division_view');
>>>>>>> f8947a18a05ec3d77b7e0026dc5eec96e179ff15
	}
}