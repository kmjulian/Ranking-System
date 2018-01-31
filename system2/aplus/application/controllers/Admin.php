<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

	function __construct()
	{
		parent:: __construct();
		$this->load->model('user_model');
		$this->load->model('admin_misc_model');
	}

	function user_authentication_admin()
	{
		$validation = $this->user_model->validate_user_admin($this->session->userdata('username'));

		if ($validation == false)
			redirect(base_url().'selectlocation/error');
	}

	function index()
	{
		$this->user_authentication_admin();

		$this->load->view('admin/admin_header');
		$this->load->view('index');
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}

	function cia()
	{
		$this->user_authentication_admin();

		$data['sections'] = $this->admin_misc_model->get_section();
		$data['depts'] = $this->admin_misc_model->get_departments();

		$this->load->view('admin/admin_header');
		$this->load->view('admin/cia', $data);
		$this->load->view('extra/js_admin_cia');
		$this->load->view('extra/html_close');
	}

	function cs()
	{
		$this->user_authentication_admin();

		$this->load->view('admin/admin_header');
		$this->load->view('admin/cs');
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}

	function grk()
	{
		$this->user_authentication_admin();

		$this->load->view('admin/admin_header');
		$this->load->view('admin/grk');
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
		
	}

	function view_instructor()
	{
		$this->user_authentication_admin();

		$data['instructors'] = $this->admin_misc_model->get_instructor();
		$this->load->view('admin/admin_header');
		$this->load->view('admin/view_instructor', $data);
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}

	function view_student()
	{
		$this->user_authentication_admin();

		$data['students'] = $this->admin_misc_model->get_student();
		$this->load->view('admin/admin_header');
		$this->load->view('admin/view_student', $data);
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}

	function view_head()
	{
		$this->user_authentication_admin();

		$data['heads'] = $this->admin_misc_model->get_head();
		$this->load->view('admin/admin_header');
		$this->load->view('admin/view_head', $data);
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}

	function cia_form_submit()
	{
		$this->user_authentication_admin();

		$username = $this->input->post('username');

		if ($this->admin_misc_model->check_uniqueness($username))
		{
			$fname = $this->input->post('fname');
			$mname = $this->input->post('mname');
			$lname = $this->input->post('lname');
			$gender = $this->input->post('gender');
			$address = $this->input->post('address');
			$city = $this->input->post('city');
			$state = $this->input->post('state');
			$zip = $this->input->post('zip');
			$number = $this->input->post('number');
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$this->admin_misc_model->insert_lec($fname, $mname, $lname, $gender, $address, $city, $state, $zip, $number, $email, $username, $password);

			$section = $this->input->post('adv_class');

			$sectionId = $this->admin_misc_model->get_section_id($section);
			$instId = $this->admin_misc_model->get_instructor_id($username);
			$this->admin_misc_model->insert_adv_class($section, $instId[0]['userId']);
			$this->admin_misc_model->insert_user_role($instId[0]['userId']);

			// $dept = $this->input->post('dept');
			// $this->admin_misc_model->insert_lecturer_department($dept, $instId[0]['userId']);

			redirect(base_url() . 'admin/cia');
		}
	}

	function cs_form_submit()
	{
		$this->user_authentication_admin();

		$level = $this->input->post('level');
		$sec_name = $this->input->post('sec_name');
		$capacity =$this->input->post('capacity');

		$this->admin_misc_model->create_section($sec_name, $capacity);

		$id = $this->admin_misc_model->get_section_id($sec_name);

		$this->admin_misc_model->insert_section_level($id[0]['sectionId'], $level);
		
		redirect(base_url().'admin/cs');
		
	}

	function generatekey()
	{
		$this->user_authentication_admin();

		$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

		$data['key'] = '';
		$max = strlen($characters) - 1;

		for ($i = 0; $i < 5; $i++) 
		{
		    $data['key'] .= $characters[mt_rand(0, $max)];
		}

		$insert = array(
				'regkey' => $data['key'],
				'regkey_used' => 'n'
			);

		$this->admin_misc_model->insert_key($insert);

		$this->load->view('admin/admin_header');
		$this->load->view('admin/grk', $data);
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}

	function about()
	{
		$this->user_authentication_admin();
		$this->load->view('admin/admin_header');
		$this->load->view('about');
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}
}

?>