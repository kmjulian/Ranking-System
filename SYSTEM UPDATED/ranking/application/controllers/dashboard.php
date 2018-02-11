<?php
class Dashboard extends CI_Controller
{


	public function index(){
		$sess_data = $this->session->userdata('logged in');
		if($sess_data == null)
		{
			redirect('login', 'refresh');
		}
		else
		{
			$this->load->view('dashboard/header_view.php');
			$this->load->view('dashboard/dashboard_view.php');
			$this->load->view('dashboard/footer_view.php'); 	
		}
	}

			function cra(){
				$this->session->userdata('logged in');
				$data['sections'] = $this->admin_misc_model->get_section();
				$data['depts'] = $this->admin_misc_model->get_departments();

				$this->load->view('admin/dashboard_header');
				$this->load->view('dashboard/cra', $data);
				$this->load->view('extra/js_admin_cra');
				$this->load->view('extra/html_close');
			}
		}

	public function logout(){
		session_destroy();
		redirect('/'); 
	}
?>