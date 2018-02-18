<?php

class C_Student extends CI_Controller
{
	function __construct()
    {
        parent:: __construct();
        $this->load->model('cstudent_model');
        $this->load->model('user_model');
    }

	function index()
	{
		$sess_data = $this->session->userdata('logged in');
		$position = $sess_data['Position'];
		if($position == 'Admin' || $position == 'admin')
		{
			$this->load->view('dashboard/header_view');
			$this->load->view('dashboard/c_student_view');
			
		} 
		else
		{
			redirect('login','refresh');
		}
		
	}


	function create_student_acct()
	{

		$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.user_username]');
		$this->form_validation->set_message('is_unique', 'username already exist!');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[regional.Regional_Email]');
		$this->form_validation->set_message('is_unique', '%s already exists!');

		if($this->form_validation->run() == FALSE)
        {   
            redirect('c_student', 'refresh');           
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
				'user_position' => 'Student'
			);

			$student_details = array(
				'Student_Fname' => $fname,
				'Student_Mname' => $mname,
				'Student_Lname' => $lname,
				'Student_Pnumber' => $pnumber,
				'Student_Gender' => $gender,
				'Student_Email' => $email,
				'Student_Lot' => $lot,
				'Student_Barangay' => $barangay,
				'Student_City' => $city,
				'Student_Zip' => $zip,
				'Student_Province' => $province
				
			);

			$this->cstudent_model->create_student_acct($acct_details);
			$this->cstudent_model->insert_student_details($student_details);
        }

	}
}