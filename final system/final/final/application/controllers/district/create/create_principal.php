<?php

class Create_Principal extends CI_Controller
{

	function __construct()
	{
		parent:: __construct();
		$this->load->model('district/create/create_principal_model');
		$this->load->model('login_model');
	}
	

	function index()
	{
		$sess_data = $this->session->userdata('logged in');
		$position = $sess_data['Position'];
		if($position == 'District' || $position == 'district')
		{
			$data['schools'] = $this->create_principal_model->get_school_name();
			$this->load->view('district_views/header');
			$this->load->view('district_views/create/create_principal_view', $data);
			$this->load->view('district_views/footer');
		}
		else
		{
			redirect('login','refresh');
		}
	}

	function create_principal_account()
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
            redirect('district/create/create_principal','refresh');
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
				'user_position' => 'Principal'
			);

        	$data = array(
        		'principal_fname' => $fname,
        		'principal_mname' => $mname,
        		'principal_lname' => $lname,
        		'principal_district' => $district,
        		'school_id' => $school,
        		'principal_address' => $address,
        		'principal_email' => $email,
        		'principal_contact' => $contact
        	);

        	$this->create_principal_model->insert_user_account($user_details);
			$this->create_principal_model->insert_principal_account($data);

        }
	}
}