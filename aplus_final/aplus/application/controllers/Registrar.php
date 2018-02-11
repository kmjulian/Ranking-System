<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrar extends CI_Controller
{
	//Admin Functions
	function __construct()
	{
		parent:: __construct();
		$this->load->model('user_model');
		$this->load->model('reg_misc_model');
	}

	function user_authentication_reg()
	{
		$validation = $this->user_model->validate_user_registrar($this->session->userdata('username'));

		if ($validation == false)
			redirect(base_url().'selectlocation/error');
	}

	function index()
	{
		$this->user_authentication_reg();

		$this->load->view('registrar/registrar_header');
		$this->load->view('index');
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}

	function cia()
	{
		$this->user_authentication_reg();

		$data['sections'] = $this->reg_misc_model->get_section();
		$data['depts'] = $this->reg_misc_model->get_departments();

		$this->load->view('registrar/registrar_header');
		$this->load->view('registrar/cia', $data);
		$this->load->view('extra/js_admin_cia');
		$this->load->view('extra/html_close');
	}


	function cra()
	{
		$this->user_authentication_reg();

		$data['sections'] = $this->reg_misc_model->get_section();
		$data['depts'] = $this->reg_misc_model->get_departments();

		$this->load->view('registrar/registrar_header');
		$this->load->view('registrar/cra', $data);
		$this->load->view('extra/js_admin_cra');
		$this->load->view('extra/html_close');
	}	

	function cs()
	{
		$this->user_authentication_reg();

		$this->load->view('registrar/registrar_header');
		$this->load->view('registrar/cs');
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}

	function grk()
	{
		$this->user_authentication_reg();

		$this->load->view('registrar/registrar_header');
		$this->load->view('registrar/grk');
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
		
	}

	function view_instructor()
	{
		$this->user_authentication_reg();

		$data['instructors'] = $this->reg_misc_model->get_instructor();
		$this->load->view('registrar/registrar_header');
		$this->load->view('registrar/view_instructor', $data);
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}

	function view_student()
	{
		$this->user_authentication_reg();

		$data['students'] = $this->reg_misc_model->get_student();
		$this->load->view('registrar/registrar_header');
		$this->load->view('registrar/view_student', $data);
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}

	function view_head()
	{
		$this->user_authentication_reg();

		$data['heads'] = $this->reg_misc_model->get_head();
		$this->load->view('registrar/registrar_header');
		$this->load->view('registrar/view_head', $data);
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}

	function cia_form_submit()
	{
		$this->user_authentication_reg();
		$username = $this->input->post('username');
		

		if ($this->reg_misc_model->check_uniqueness($username))
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
			$regusername = $this->session->userdata('username');
			$school = $this->reg_misc_model->getschool($regusername);
			


			$dept[] =  $this->input->post('check_list');
			
				

				if(!empty($_POST['check_list'])) {
					// Counting number of checked checkboxes.
						$checked_count = count($_POST['check_list']);
						$this->reg_misc_model->insert_lec($fname, $mname, $lname, $gender, $address, $city, $state, $zip, $number, $email, $username, $password,$school);
						$instId = $this->reg_misc_model->get_instructor_id($username);
						$this->reg_misc_model->insert_lec_role($instId[0]['userId']);
						//echo "You have selected following ".$checked_count." option(s): <br/>";
						// Loop to store and display values of individual checked checkbox.
						foreach($_POST['check_list'] as $selected) {
						$this->reg_misc_model->insert_lecturer_department($selected[0], $instId[0]['userId']);
					}
						echo "<script type='text/javascript'>
						alert('Success! $fname $lname has been added.');
						window.location.href='cia';
					</script>";				
				}
			
			else{
				echo "<script type='text/javascript'>
						alert('Please choose a department');
						window.location.href='cia';
					</script>";
			}
			

			//$section = $this->input->post('adv_class');

			//$sectionId = $this->reg_misc_model->get_section_id($section);
			//$instId = $this->reg_misc_model->get_instructor_id($username);
			//$this->reg_misc_model->insert_adv_class($section, $instId[0]['userId']);
			 
				
			//redirect(base_url() . 'registrar/cia');
		
		}
	}
function cs_form_submit()
	{
		$this->user_authentication_reg();

		$level = $this->input->post('level');
		$sec_name = $this->input->post('sec_name');
		$capacity =$this->input->post('capacity');

		$this->reg_misc_model->create_section($sec_name, $capacity,$level);

		$id = $this->reg_misc_model->get_section_id($sec_name);

		$this->reg_misc_model->insert_section_level($id[0]['sectionId'], $level);
		
		echo "<script type='text/javascript'>alert('Success! $sec_name has been created.');
				window.location.href='cs';
		</script>";

		
	}

	function generatekey()
	{
		$this->user_authentication_reg();

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

		$this->reg_misc_model->insert_key($insert);

		$this->load->view('registrar/registrar_header');
		$this->load->view('registrar/grk', $data);
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}

	function about()
	{
		$this->user_authentication_reg();
		$this->load->view('registrar/registrar_header');
		$this->load->view('about');
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}
	//Dept Head Functions
	function assign_lec_form_submit()
	{
		$lec = $this->input->post('lec');
		$sec = $this->input->post('sec');
		//$check = $this->reg_misc_model->check_section($sec);
		//if($check != false)
		//{
		$this->reg_misc_model->insert_lec_sec($lec, $sec);
		echo "<script type='text/javascript'>
						alert('Success! $lec has been assigned to $sec.');
						window.location.href='assign_lec';
					</script>";
		//}
		//else
		//redirect('registrar/errorassign');

		
	}

	function assign_lec()
	{
		$id = $this->user_model->get_id($this->session->userdata('username'));
		var_dump(intval($id['userId']));
		$data['lecturers'] = $this->reg_misc_model->get_lecturers($id);
		$data['sections'] = $this->reg_misc_model->get_section();
		$this->load->view('registrar/registrar_header');
		$this->load->view('registrar/assign_lec', $data);
		$this->load->view('extra/js');
		$this->load->view('extra/html_close');
	}


}
?>
