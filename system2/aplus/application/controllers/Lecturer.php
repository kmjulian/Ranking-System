<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lecturer extends CI_Controller 
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model('location_model');
		$this->load->model('user_model');
		$this->load->model('lecturer_misc_model');
	}	

	function user_authentication_lecturer()
	{
		$validation = $this->user_model->validate_user_lecturer($this->session->userdata('username'));

		if ($validation == false)
			redirect(base_url().'selectlocation/error');
	}

	function data()
	{
		$username = $this->session->userdata('username');
		$id = $this->user_model->get_id($username);
		$data['adv'] = $this->lecturer_misc_model->get_adv_section($username);
		$data['sections'] = $this->lecturer_misc_model->get_sections($id);
		$data['subject'] = $this->lecturer_misc_model->get_subject($username);

		return $data;
	}

	function index()
	{
		$this->user_authentication_lecturer();
		
		$app_data = $this->data();
		$this->load->view('lecturer/navbar_sidebar', $app_data);
		$this->load->view('index');
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}	

	function first_grading($id)
	{
		$this->user_authentication_lecturer();

		var_dump($id);

		$session_data['section'] = $id;
		$this->session->set_userdata($session_data);

		$app_data = $this->data();
		$data['students'] = $this->user_model->get_students();
		$data['sectionname'] = $this->lecturer_misc_model->get_section_name($this->session->userdata('section'));
		$data['section_students'] = $this->lecturer_misc_model->get_section_students($this->session->userdata('section'));

		$this->load->view('lecturer/navbar_sidebar', $app_data);
		$this->load->view('lecturer/grading', $data);
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}

	function computation_menu()
	{
		$this->user_authentication_lecturer();
		
		$app_data = $this->data();
		$this->load->view('lecturer/navbar_sidebar', $app_data);
		$this->load->view('lecturer/computation_menu');
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}

	function computation_table()
	{
		$this->user_authentication_lecturer();
		
		$app_data = $this->data();
		$app_data['sectionname'] = $this->lecturer_misc_model->get_section_name($this->session->userdata('section'));
		$app_data['subjectname'] = $this->lecturer_misc_model->get_subject($this->session->userdata('username'));

		$data['ww_percentage'] = $this->input->post('ww_percentage');
		$data['assignment'] = $this->input->post('assignment');
		$data['seatwork'] = $this->input->post('seatwork');
		$data['perf_percentage'] = $this->input->post('perf_percentage');
		$data['gwork'] = $this->input->post('gwork');
		$data['quiz'] = $this->input->post('quiz');
		$data['recitation'] = $this->input->post('recitation');
		$data['students'] = $this->lecturer_misc_model->get_section_students($this->session->userdata('section'));

		$this->load->view('lecturer/navbar_sidebar', $app_data);
		$this->load->view('lecturer/computation_table', $data);
		$this->load->view('extra/js');
		$this->load->view('extra/js_compute');
		$this->load->view('extra/html_close');
	}

	function save_grades()
	{
		$grade_data = $this->input->post('grades');
		$subjectname = $this->lecturer_misc_model->get_subject($this->session->userdata('username'));

		$count = 0;

		foreach ($grade_data as $student)
		{

			$id = $this->lecturer_misc_model->save_final_grade($student[2]);

			foreach ($grade_data[$count][1] as $grades)
			{
				$this->lecturer_misc_model->save_grades($grades[0], $grades[1], $subjectname[0]['dept_name'], $student[0], $id);
			}
			
			$count++;
		}

		echo redirect(base_url().'lecturer/rank');
	}

	function rank()
	{
		$this->user_authentication_lecturer();
		
		$app_data = $this->data();
		$app_data['subjectname'] = $this->lecturer_misc_model->get_subject($this->session->userdata('username'));
		$app_data['students'] = $this->lecturer_misc_model->get_students_by_rank($this->session->userdata('section'), $app_data['subjectname'][0]['dept_name']);

		$this->load->view('lecturer/navbar_sidebar', $app_data);
		$this->load->view('lecturer/rank'	);
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}

	function view_breakdown()
	{
		$this->user_authentication_lecturer();
		
		$id = $this->uri->segment(3);
		$subjectname = $this->lecturer_misc_model->get_subject($this->session->userdata('username'));

		$data['breakdown'] = $this->lecturer_misc_model->get_student_breakdown(intval($id), $subjectname[0]['dept_name']);

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
		$app_data = $this->data();
		$this->load->view('lecturer/navbar_sidebar', $app_data);
		$this->load->view('about');
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}
}

?>