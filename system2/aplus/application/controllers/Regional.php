<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regional extends CI_Controller
{

	function __construct()
	{
		parent:: __construct();
		$this->load->model('location_model');
		$this->load->model('user_model');
		$this->load->model('regional_model');
	}

	function index()
	{
		$this->load->view('regional/regional_header');
		$this->load->view('index');
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}

	function add_school()
	{
		$data['regions'] = $this->location_model->get_regions();
		$this->load->view('regional/regional_header');
		$this->load->view('regional/add_school', $data);
		$this->load->view('extra/js');
		$this->load->view('extra/js_regional_add_school');
		$this->load->view('extra/html_close');
	}

	function about()
	{
		$this->load->view('regional/regional_header');
		$this->load->view('about');
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}

	function add_school_submit()
	{
		$barangay = $this->input->post('barangay');
		$school = $this->input->post('school');

		$this->regional_model->ins_school($school, $barangay);

		redirect(base_url().'regional/add_school');	
	}
}

?>