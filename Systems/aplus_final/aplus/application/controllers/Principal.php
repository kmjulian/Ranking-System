<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller
{

	function __construct()
	{
		parent:: __construct();
		$this->load->model('user_model');
		$this->load->model('principal_misc_model');
	}

	function user_authentication_principal()
	{
		$validation = $this->user_model->validate_user_principal($this->session->userdata('username'));

		if ($validation == false)
			redirect(base_url().'selectlocation/error');
	}

	function index()
	{
		$this->user_authentication_principal();
		
		$this->load->view('principal/principal_header');
		$this->load->view('index');
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}
	
	function view_instructor()
	{
		$this->user_authentication_principal();

		$data['instructors'] = $this->admin_misc_model->get_instructor();
		$this->load->view('principal/principal_header');
		$this->load->view('principal/view_instructor', $data);
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}

	function view_student()
	{
		$this->user_authentication_principal();

		$data['students'] = $this->admin_misc_model->get_student();
		$this->load->view('principal/principal_header');
		$this->load->view('principal/view_student', $data);
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}

	function view_head()
	{
		$this->user_authentication_principal();

		$data['heads'] = $this->admin_misc_model->get_head();
		$this->load->view('principal/principal_header');
		$this->load->view('principal/view_head', $data);
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}


	function view_reg()
	{
		$this->user_authentication_principal();

		$data['registrar'] = $this->admin_misc_model->get_reg();
		$this->load->view('principal/principal_header');
		$this->load->view('principal/view_reg', $data);
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}
	

	function assign_lec()
	{
		$id = $this->user_model->get_id($this->session->userdata('username'));
		var_dump(intval($id['userId']));
		$data['lecturers'] = $this->principal_misc_model->get_lecturers($id);
		$data['sections'] = $this->principal_misc_model->get_section();
		$this->load->view('principal/principal_header');
		$this->load->view('principal/assign_lec', $data);
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}

	function assign_lec_form_submit()
	{
		$lec = $this->input->post('lec');
		$sec = $this->input->post('sec');

		$this->head_misc_model->insert_lec_sec($lec, $sec);

		redirect(base_url().'principal/assign_lec');
	}

	function rank()
	{
		$this->user_authentication_principal();
		
		$app_data = $this->data();
		$app_data['subjectname'] = $this->principal_misc_model->get_subject($this->session->userdata('username'));
		$app_data['students'] = $this->principal_misc_model->get_students_by_rank($this->session->userdata('section'), $app_data['subjectname'][0]['dept_name']);

		$this->load->view('principal/principal_header', $app_data);
		$this->load->view('principal/rank');
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}

	function view_breakdown()
	{
		$this->user_authentication_principal();
		
		$id = $this->uri->segment(3);
		$subjectname = $this->principal_misc_model->get_subject($this->session->userdata('username'));

		$data['breakdown'] = $this->principal_misc_model->get_student_breakdown(intval($id), $subjectname[0]['dept_name']);

		$ass = 0;
		$seat = 0;
		$gwork = 0;
		$rec = 0;
		$quiz = 0;

		foreach ($data['breakdown'] as $d)
		{
			switch ($d['item']) {
				case 'assignment':
					$ass++;
					break;
				case 'seatwork':
					$seat++;
					break;
				case 'quiz':
					$quiz++;
					break;
				case 'rec':
					$rec++;
					break;
				case 'gwork':
					$gwork++;
					break;
				
				default:
					# code...
					break;
			}
		}

		$data['max_col'] = max($ass, $seat, $gwork, $rec, $quiz);

		var_dump($data['max_col']);
	}


	function about()
	{
		$this->user_authentication_principal();
		$this->load->view('principal/principal_header');
		$this->load->view('about');
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
 	}
}

?>