<?php
class Login extends CI_Controller
{
	public function __construct() 
    {
        parent::__construct();
        $this->load->model('user_model');
    }

	function index() 
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required'); //constraints
        $this->form_validation->set_rules('password', 'Password', 'required|callback_check_database');
        

        if ($this->form_validation->run() == false) 
        {
			$this->load->view('login/header_view');
			$this->load->view('login/login_view');
        } 
        else 
        {
            $sess_data = $this->session->userdata('logged in');
            $position = $sess_data['Position'];  
            if($position == 'Admin' || $position == 'admin')
            {
                redirect('admin', 'refresh'); //controller lagi pag redirect
            }
            else if($position == 'Teacher' ||$position == 'teacher')
            {
                redirect('teacher', 'refresh');
            }
            else if($position == 'Student' ||$position == 'student')
            {
                redirect('student', 'refresh');
            }
            else if($position == 'School' ||$position == 'school')
            {
                redirect('school', 'refresh');
            }
            else if($position == 'District' ||$position == 'district')
            {
                redirect('district', 'refresh');
            }
            else if($position == 'Regional' ||$position == 'regional')
            {
                redirect('regional', 'refresh');
            }
        } 
	}
	
	function check_database($password)
	{

	   $username = $this->input->post('username');

	   $result = $this->user_model->get_data($username, $password);
	   
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

