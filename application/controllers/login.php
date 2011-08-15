<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
       
        $this->load->library('form_validation');
    }


    public function index()
    {

        $this->load->view('admin2/header');
        $this->load->view('admin2/flogin');
        $this->load->view('admin2/footer');
    }
    
//    function do_login(){
//        	$identity = $this->input->post('username');;
//		$password = $this->input->post('password');
//		$remember = TRUE; // remember the user
//		if(!$this->ion_auth->login($identity, $password, $remember)){
//                    redirect('/login');
//                }else{
//                    redirect('/admin2/dashboar');
//                }
//    }
//    
//    function logout(){
//        $this->ion_auth->logout();
//        $this->session->sess_destroy();
//	redirect('/login', 'refresh');
//    }
    
    function login_exec()
	{
		if (!$this->_user_validation())
		{
			$this->session->set_userdata('ERRMSG_ARR', validation_errors());
			redirect('login');
		}
		else
		{
			$this->load->model('model_admin');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$query = $this->model_admin->validate_login($username, $password);
			
			if($query->num_rows == 1)
			{
				$row = $query->row();
				$data = array(
					'SESS_ADMIN_CODE' => $row->codeadmin,
					'SESS_NAME' => $row->nama,
					'SESS_EMAIL' => $row->email,
                                    'ADMIN' => $row->username
					
				);
				$this->session->set_userdata($data);
				redirect('admin2/dashboar');
			}
			else // incorrect username or password
			{
				$data = array(
					'SESS_LOGIN_STATEMENT' => 'Login Gagal',
					'ERRMSG_ARR' => "Username dan/atau Password salah !"
				);
				$this->session->set_userdata($data);
				redirect('login');
			}
		}
	}

	function _user_validation()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		return $this->form_validation->run();
	}

	function logout()
	{
		$this->session->unset_userdata('SESS_ADMIN_CODE');
		$this->session->unset_userdata('SESS_NAME');
		$this->session->unset_userdata('SESS_EMAIL');
		$this->session->unset_userdata('ERRMSG_ARR');
		$this->session->set_userdata('SESS_LOGIN_STATEMENT', 'Anda Telah Logout ;)');
		redirect('login');
	}
}

