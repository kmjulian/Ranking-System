<?php

class Create_Teacher extends CI_Controller
{

	function __construct()
	{
		parent:: __construct();
		$this->load->model('registrar/create/create_teacher_model');
		$this->load->model('login_model');
	}

	function index()
	{
		$sess_data = $this->session->userdata('logged in');
		$position = $sess_data['Position'];
		if($position == 'Registrar' || $position == 'registrar')
		{
			$data['schools'] = $this->create_teacher_model->get_school_name();
			$this->load->view('registrar_views/header');
			$this->load->view('registrar_views/create/create_teacher_view', $data);
			$this->load->view('registrar_views/footer');
		}
		else
		{
			redirect('login','refresh');
		}
	}

	function create_teacher_account()
	{
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required');
		$this->form_validation->set_rules('mname', 'Middle Name', 'trim|required');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('district', 'District', 'trim|required');
		$this->form_validation->set_rules('school', 'School', 'trim|required');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('contact', 'Contact', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if($this->form_validation->run() == FALSE)
        {
            redirect('registrar/create/create_teacher','refresh');
        }
        else
        {
        	$fname = $this->input->post('fname');
        	$mname = $this->input->post('mname');
        	$lname = $this->input->post('lname');
        	$district = $this->input->post('district');
        	$school = $this->input->post('school');
        	$address = $this->input->post('address');
        	$email = $this->input->post('email');
        	$contact = $this->input->post('contact');
        	$username = $this->input->post('username');
        	$password = $this->input->post('password');

        	$user_details = array(
				'user_username' => $username,
				'user_password' => $password,
				'user_position' => 'Teacher'
			);

        	$data = array(
        		'teacher_fname' => $fname,
        		'teacher_mname' => $mname,
        		'teacher_lname' => $lname,
        		'teacher_district' => $district,
        		'school_id' => $school,
        		'teacher_address' => $address,
        		'teacher_email' => $email,
        		'teacher_contact' => $contact
        	);

        	$this->create_teacher_model->insert_user_account($user_details);
			$this->create_teacher_model->insert_teacher_account($data);

        }
	}
}