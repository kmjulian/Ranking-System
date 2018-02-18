<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Head extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model('user_model');
		$this->load->model('head_misc_model');
		$this->load->model('admin_misc_model');
	}

	function index()
	{
		$this->load->view('department_head/head_navbar');
		$this->load->view('index');
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}

	function assign_lec()
	{
		$id = $this->user_model->get_id($this->session->userdata('username'));
		var_dump(intval($id['userId']));
		$data['lecturers'] = $this->head_misc_model->get_lecturers($id);
		$data['sections'] = $this->admin_misc_model->get_section();
		$this->load->view('department_head/head_navbar');
		$this->load->view('department_head/assign_lec', $data);
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}

	function assign_lec_form_submit()
	{
		$lec = $this->input->post('lec');
		$sec = $this->input->post('sec');

		$this->head_misc_model->insert_lec_sec($lec, $sec);

		redirect(base_url().'head/assign_lec');
	}

	function about()
	{
		$this->load->view('department_head/head_navbar');
		$this->load->view('about');
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}
}
?>