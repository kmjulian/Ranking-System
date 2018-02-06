<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Selectlocation extends CI_Controller 
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent:: __construct();
		$this->load->model('location_model');
		$this->load->model('user_model');
	}

	function index()
	{
		$this->session->sess_destroy();
		$data['regions'] = $this->location_model->get_regions();

		$this->load->view('select_location', $data);
	}

	function get_provinces()
	{
		$regionId = $this->input->post('region');
		$provinces = $this->location_model->get_provinces($regionId);

		if (count($provinces) > 0)
		{
			$select_box = '<option value = "0">-- Select Province --</option>';

			foreach ($provinces as $province)
			{
				var_dump($province->provinceId);
				$select_box .= '<option value = "'.$province->provinceId.'">'.$province->provinceName.'</option>'; 
			}
			echo ($select_box);
		}
	}

	function get_cities()
	{
		$provinceId = $this->input->post('province');
		$cities = $this->location_model->get_cities($provinceId);

		if (count($cities) > 0)
		{
			$select_box = '<option value="0">-- Select City --</option>';

			foreach ($cities as $city)
			{
				$select_box .= '<option value="'.$city->cityId.'"">'.$city->cityName.'</option>'; 
			}
			echo ($select_box);
		}
	}

	function get_barangays()
	{
		$cityId = $this->input->post('city');
		$barangays = $this->location_model->get_barangays($cityId);

		if (count($barangays) > 0)
		{
			$select_box = '<option value="0">-- Select Barangay --</option>';

			foreach ($barangays as $barangay)
			{
				$select_box .= '<option value="'.$barangay->barangayId.'"">'.$barangay->barangayName.'</option>'; 
			}
			echo ($select_box);
		}
	}

	function get_schools()
	{
		$barangayId = $this->input->post('barangay');
		$schools = $this->location_model->get_schools($barangayId);

		if (count($schools) > 0)
		{
			$select_box = '<option value="0">-- Select School --</option>';

			foreach ($schools as $school)
			{
				$select_box .= '<option value="'.$school->schoolId.'"">'.$school->schoolName.'</option>'; 
			}
			echo ($select_box);
		}
	}

	function validate_location()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('region', 'Region', 'required');
		$this->form_validation->set_rules('province', 'Province', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('barangay', 'Barangay', 'required');
		$this->form_validation->set_rules('school', 'School', 'required');

		$region = $this->input->post("region");
		$province = $this->input->post("province");
		$city = $this->input->post("city");
		$barangay = $this->input->post("barangay");
		$school = $this->input->post("school");

		$validate = $this->location_model->validate_location($region, $province, $city, $barangay, $school);

		if ($validate != null)
		{
			$session_data = array(
					'region' => $region,
					'province' => $province,
					'city' => $city,
					'barangay' => $barangay,
					'school' => $school
				);

			$this->session->set_userdata($session_data);
			echo "";
		}
	}

	function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$validate = $this->user_model->validate_user($username, $password);
		$userId = $validate->userId;

		if ($validate != false)
		{
			$role = $this->user_model->get_role(intval($userId));

			$session_data = array(
					'username' => $username,
				);

			$this->session->set_userdata($session_data);

			if ($role->rolename == 'admin')
				redirect(base_url().'admin/index');
			else if ($role->rolename == 'instructor')
				redirect(base_url().'lecturer/index');
			else if ($role->rolename == 'department head')
				redirect(base_url().'head/index');
			else
				redirect(base_url().'student/index');
			// $this->load->view('extra/navbar_sidebar');
			// $this->load->view('index');
			// $this->load->view('extra/js');
		}
	}

	function logout()
	{
		$this->session->sess_destroy();

		redirect(base_url().'selectlocation/index');
	}

	function get_edulvl()
	{
		$grdlvl = $this->input->post('lvl');

		$grdint = intval($grdlvl);

		if ($grdint >= 1 && $grdint <= 4)
			$output = "You are under Primary Level";
		else if ($grdint >= 5 && $grdint <= 7)
			$output = "You are under Intermediate Level";
		else if ($grdint >= 8 && $grdint <= 10)
			$output = "You are under Junior High Level";
		else
			$output = "You are under Senior High Level";

		echo $output;
	}

	function register()
	{
		$key = $this->input->post('key');

		if ($this->user_model->check_regkey($key))
		{
			$grdlvl =  $this->input->post('grdlvl');
			$fname =  $this->input->post('fname');
			$mname =  $this->input->post('mname');
			$lname =  $this->input->post('lname');
			$gender =  $this->input->post('gender');
			$address =  $this->input->post('address');
			$city = $this->input->post('city');
			$province = $this->input->post('province');
			$zip = $this->input->post('zip');
			$phone =  $this->input->post('phone');
			$email =  $this->input->post('email');
			$username =  $this->input->post('username');
			$password =  $this->input->post('password');

			$this->user_model->register($fname, $mname, $lname, $gender, $address, $city, $province, $zip, $phone, $email, $username, $password);

			$id = $this->user_model->get_id($username);

			$this->user_model->insert_role_student(intval($id['userId']));

			// $this->user_model->update_regkey($key);

			redirect(base_url());
		}
	}

	function error()
	{
		$this->session->sess_destroy();
		$this->load->view('error');
	}
}

?>