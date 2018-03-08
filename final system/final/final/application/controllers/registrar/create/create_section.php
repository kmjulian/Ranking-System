<?php

class Create_Section extends CI_Controller
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
		if($position == 'Registrar' || $position == 'registrar')
		{
			$this->load->view('registrar_views/header');
			$this->load->view('registrar_views/create/create_section_view');
			$this->load->view('registrar_views/footer');
		}
		else
		{
			redirect('login','refresh');
		}
	}

	function create_account()
	{
		$this->form_validation->set_rules('sectionname', 'Section Name', 'trim|required');

		if($this->form_validation->run() == FALSE)
        {
            redirect('registrar/create/create_section','refresh');
        }
        else
        {
        	$name = $this->input->post('sectionname');

        	$data = array(
        		'section_name' => $name,
        	);

        	$this->create_section_model->insert_section($data);
        	redirect('registrar/create/create_section');
        }
	}
}