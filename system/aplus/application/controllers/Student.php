<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller
{

	function __construct()
	{
		parent:: __construct();
		$this->load->model('user_model');
		$this->load->model('student_misc_model');
	}

	function user_authentication_student()
	{
		$validation = $this->user_model->validate_user_student($this->session->userdata('username'));

		if ($validation == false)
			redirect(base_url().'selectlocation/error');
	}

	function index()
	{
		$this->user_authentication_student();

		$this->load->view('student/student_header');
		$this->load->view('index');
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}

	function view_grades($subject)
	{
		$this->user_authentication_student();

		$data['breakdown'] = $this->student_misc_model->get_math($this->session->userdata('username'), $subject);

		$data['ass'] = 0;
		$data['seat'] = 0;
		$data['gwork'] = 0;
		$data['rec'] = 0;
		$data['quiz'] = 0;

		foreach ($data['breakdown'] as $d)
		{
			switch ($d['item']) {
				case 'assignment':
					$data['ass']++;
					break;
				case 'seatwork':
					$data['seat']++;
					break;
				case 'quiz':
					$data['quiz']++;
					break;
				case 'rec':
					$data['rec']++;
					break;
				case 'gwork':
					$data['gwork']++;
					break;
				
				default:
					# code...
					break;
			}
		}

		$this->load->view('student/student_header');
		$this->load->view('student/view_grades', $data);
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}

	function view_rank()
	{
		$this->user_authentication_student();

		$this->load->view('student/student_header');
		$this->load->view('student/view_rank');
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}

	function about()
	{
		$this->user_authentication_student();

		$this->load->view('student/student_header');
		$this->load->view('about');
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}
}

?>