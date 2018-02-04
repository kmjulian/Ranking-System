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
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'required|callback_check_database');
        

        if ($this->form_validation->run() == false) 
        {
			$this->load->view('login/header_view');
			$this->load->view('login/login_view');
			$this->load->view('login/footer_view');
        } 
        else 
        {
            redirect('dashboard', 'refresh');
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
			   );
		   
			   $this->session->set_userdata('logged in', $sess_array);
			   $sess_data = $this->session->userdata('logged in');       
		   }
		   return TRUE;
	   } 
	   else 
	   {
		   print_r('wrong username or password');
		   return FALSE;
	   }
   } 
	
}

