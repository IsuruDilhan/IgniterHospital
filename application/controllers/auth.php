<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('login/index');
	}

	public function check_login()
	{
		$data = array('username' => $this->input->post('username') , 
					  'password' => $this->input->post('password')
					  );
		$check = $this->model_user->check_user($data);
		if ($check->num_rows() == 1){
			foreach($check->result() as $sess)
            {
              $sess_data['logged_in'] = 'Login';
              $sess_data['username'] = $sess->username;
              $sess_data['level'] = $sess->level;
              $this->session->set_userdata($sess_data);
            }
			if ($this->session->userdata('level')=='admin'){
				redirect('admin');
			}
			elseif ($this->session->userdata('level')=='manager'){
				redirect('manager');
			}
            elseif ($this->session->userdata('level')=='boss'){
                redirect('chief');
            }
		}
		else
		{
			echo " <script>alert('Check username and password');history.go(-1);</script>";

		}
		
	}

	public function logout() {
        $user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
        }
        $this->session->sess_destroy();
		redirect('auth');
	}


}