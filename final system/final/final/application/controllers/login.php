<?php

class Login extends CI_Controller
{

	public function __construct() 
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    function index()
    {
    	$this->form_validation->set_rules('username', 'Username', 'trim|required'); //constraints
        $this->form_validation->set_rules('password', 'Password', 'required|callback_check_database');

        if ($this->form_validation->run() == false) 
        {
			$this->load->view('login_view');
        } 
        else
        {
        	$sess_data = $this->session->userdata('logged in');
            $position = $sess_data['Position'];  
            if($position == 'District' || $position == 'district')
            {
                redirect('district/district_home', 'refresh'); //controller lagi pag redirect
            }
            else if($position == 'Principal' || $position == 'principal')
            {
                redirect('principal/principal_home', 'refresh');
            }
            else if($position == 'Registrar' || $position == 'registrar')
            {
                redirect('registrar/registrar_home', 'refresh');
            }
            else if($position == 'School' || $position == 'school')
            {
                redirect('school/school_home', 'refresh');
            }
            else if($position == 'Guidance' || $position == 'guidance')
            {
                redirect('guidance/guidance_home', 'refresh');
            }
        	else if($position == 'Teacher' || $position == 'teacher')
            {
                redirect('teacher/teacher_home', 'refresh');
            }
            else if($position == 'Student' || $position == 'student')
            {
                redirect('student/student_home', 'refresh');
            }

        }
    }

    function check_database($password)
	{

	   $username = $this->input->post('username');

	   $result = $this->login_model->get_data($username, $password);
	   
	   if ($result) 
	   {
		   $sess_array = array();
		   foreach ($result as $row) 
		   {
			   $sess_array = array(
				   'UserID'   => $row->user_id,
				   'Username' => $row->user_username,
				   'Password' => $row->user_password,
				   'Position' => $row->user_position

			   );
		   
			   $this->session->set_userdata('logged in', $sess_array);
			   $sess_data = $this->session->userdata('logged in');
			   $position = $sess_data['Position'];        
		   }
		   return TRUE;
	   } 
	   else 
	   {
		   print_r('wrong username or password');
		   return FALSE;
	   }
   } 

   function logout()
   {
   		$sess_data = $this->session->userdata('logged in');
        $userid = $sess_data['UserID'];
        $username = $sess_data['Username'];
        $password = $sess_data['Password'];
        $position = $sess_data['Position'];

        $this->session->unset_userdata($userid);
        $this->session->unset_userdata($username);
        $this->session->unset_userdata($password);
        $this->session->unset_userdata($position);
        $this->session->sess_destroy();
        redirect('login','refresh');
   }

}