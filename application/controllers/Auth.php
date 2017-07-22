<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		die('hard');
	}

	public function register()
	{
		if (isset($_POST['submit'])) {
			#die('hard');
			$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
	        $this->form_validation->set_rules('password', 'Password', 'required');
	        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|matches[password]');

	        if ($this->form_validation->run() === false) {
	            $this->load->view('layouts/header');
	            $this->load->view('auth/register');
	        } else {
	            $this->user_model->insert_user();//save user
	            $this->send_email_verification($this->input->post('email'), $_SESSION['token']); //verifikasi email
	            redirect('register');
	        }
		}else {
			$this->load->view('layouts/header');
            $this->load->view('auth/register');
		}		
	}


	public function send_email_verification($email, $token) // ambil dari parameter send_email_verification
    {
        $this->load->library('email');
        $this->email->from('dediapudin@yahoo.com', 'Dedi Apudin');
        $this->email->to($email);
        $this->email->subject('ini subjectnya register aplikasi auth local');
        #$this->email->message("confrm email <a href='http://localhost/pastibisa/verify/$email/$token'>Konfirmasi Email</a>");
        $this->email->message($this->getEmailBody($email, $token));
        $this->email->set_mailtype('html');
        $this->email->send();
    }

     public function getEmailBody($email, $token)
    {
        $data = array('email'=>$email,'token'=>$token);
        $msg = $this->load->view('templatesemail/email_registrasi', $data, true);
        return $msg;
    }

    public function verify_register($email, $token)
    {
        $user = $this->user_model->get_user('email', $email);
           
        //cek email ada atau tidak
        if(!$user)
          die('email not exists');

         if($user['token'] !== $token)
          die('token not match');

          //update user role
          $this->user_model->update_role($user['id'], 1);

          //set session
          $_SESSION['user_id']   = $user['id'];
          $_SESSION['email']   = $user['email'];
          $_SESSION['logged_in'] = true;

          //redirect profile
          redirect('profile');
    }

    public function login()
    {
        if ($this->user_model->is_LoggedIn()) {
            redirect('profile');
        }

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|callback_checkPassword');

        if ($this->form_validation->run() === false) {
            $this->load->view('layouts/header');
            $this->load->view('auth/login');
        } else {
            $user = $this->user_model->get_user('email', $this->input->post('email'));
            /*print_r($user);
            die();*/
            //set session
             $_SESSION['user_id']   = $user['id'];
             $_SESSION['logged_in'] = true;

             //redirect profile
             redirect('profile');
        }
    }


    public function checkEmail($email)
    {
        if (!$this->user_model->get_user('email', $email)) {
            $this->form_validation->set_message('checkEmail', 'email is not on database');
            return false;
        }

        return true;
    }

    public function checkPassword($password)
    {
        $user = $this->user_model->get_user('email',$this->input->post('email'));

        if(!$this->user_model->checkPassword($user['email'], $password)) {
            $this->form_validation->set_message('checkPassword', 'password is incorrect');
            return false;
        }

        return true;
    }

    public function checkRole($email)
    {
        $user = $this->user_model->get_user('email', $email);
        if($user['role'] == 0) {
            $this->form_validation->set_message('checkRole', 'email is not actived yet');
            return false;
        }

        return true;
    }

    public function logout()
    {
        unset($_SESSION['user_id'], $_SESSION['logged_in']);
        redirect('login');
    }


}



/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */