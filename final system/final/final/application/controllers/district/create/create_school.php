<?php

class Create_School extends CI_Controller
{

	function __construct()
	{
		parent:: __construct();
		$this->load->model('district/create/create_school_model');
	}

	function index()
	{
		$sess_data = $this->session->userdata('logged in');
		$position = $sess_data['Position'];
		if($position == 'District' || $position == 'district')
		{
			$this->load->view('district_views/header');
			$this->load->view('district_views/create/create_school_view');
			$this->load->view('district_views/footer');
		}
		else
		{
			redirect('login','refresh');
		}
	}

	function create_account()
	{
		$this->form_validation->set_rules('schoolname', 'School Name', 'trim|required');
		$this->form_validation->set_rules('contact', 'Contact Number', 'trim|required|numeric');
		$this->form_validation->set_rules('schooladdress', 'School Address', 'trim|required');

		if($this->form_validation->run() == FALSE)
        {
            redirect('district/create/create_school','refresh');
        }
        else
        {
        	$name = $this->input->post('schoolname');
        	$contactnumber = $this->input->post('contact');
        	$address = $this->input->post('schooladdress');

        	$data = array(
        		'school_name' => $name,
        		'school_contact' => $contactnumber,
        		'school_address' => $address
        	);

        	$this->create_school_model->insert_school($data);
        	redirect('district/create/create_school');
        }
	}
}