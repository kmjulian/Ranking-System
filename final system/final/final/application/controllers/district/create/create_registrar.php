<?php

class Create_Registrar extends CI_Controller
{

	function __construct()
	{
		parent:: __construct();
		$this->load->model('district/create/create_registrar_model');
		$this->load->model('login_model');
	}
	

	function index()
	{
		$sess_data = $this->session->userdata('logged in');
		$position = $sess_data['Position'];
		if($position == 'District' || $position == 'district')
		{
			$data['schools'] = $this->create_registrar_model->get_school_name();
			$this->load->view('district_views/header');
			$this->load->view('district_views/create/create_registrar_view', $data);
			$this->load->view('district_views/footer');
		}
		else
		{
			redirect('login', 'refresh');
		}
	}

	function create_registrar_account()
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
				'user_position' => 'Registrar'
			);

        	$data = array(
        		'registrar_fname' => $fname,
        		'registrar_mname' => $mname,
        		'registrar_lname' => $lname,
        		'registrar_district' => $district,
        		'school_id' => $school,
        		'registrar_address' => $address,
        		'registrar_email' => $email,
        		'registrar_contact' => $contact
        	);

        	$this->create_registrar_model->insert_user_account($user_details);
			$this->create_registrar_model->insert_registrar_account($data);
	}
}