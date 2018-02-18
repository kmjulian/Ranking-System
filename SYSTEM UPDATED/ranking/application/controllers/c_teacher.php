<?php

class C_teacher extends CI_Controller
{
	function __construct()
    {
        parent:: __construct();
        $this->load->model('cteacher_model');
        $this->load->model('user_model');
    }

	function index()
	{
		$sess_data = $this->session->userdata('logged in');
		$position = $sess_data['Position'];
		if($position != 'Admin')
		{
			redirect('login','refresh');
		} 
		else
		{
			$this->load->view('dashboard/header_view');
			$this->load->view('dashboard/c_teacher_view');
		}
		
	}


	function create_teacher_acct()
	{

		$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.user_username]');
		$this->form_validation->set_message('is_unique', 'username already exist!');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[teacher.Teacher_Email]');
		$this->form_validation->set_message('is_unique', '%s already exists!');

		if($this->form_validation->run() == FALSE)
        {   
            redirect('c_teacher', 'refresh');           
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
				'user_position' => 'Teacher'
			);

			$teacher_details = array(
				'Teacher_Fname' => $fname,
				'Teacher_Mname' => $mname,
				'Teacher_Lname' => $lname,
				'Teacher_Pnumber' => $pnumber,
				'Teacher_Gender' => $gender,
				'Teacher_Email' => $email,
				'Teacher_Lot' => $lot,
				'Teacher_Barangay' => $barangay,
				'Teacher_City' => $city,
				'Teacher_Zip' => $zip,
				'Teacher_Province' => $province
				
			);

			$this->cteacher_model->create_teacher_acct($acct_details);
			$this->cteacher_model->insert_teacher_details($teacher_details);
        }


class C_Teacher extends CI_Controller
{
	function index()
	{
		$this->load->view('dashboard/header_view');
		$this->load->view('dashboard/c_teacher_view');

	}
}