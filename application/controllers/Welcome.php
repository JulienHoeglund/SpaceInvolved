<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
class Welcome extends CI_Controller {
	function __construct() {
		parent::__construct();
	}

	public function login() {
		$this->load->model('M_Login');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'You must provide a %s.'));

		$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'));
		$username = $this->input->post('username');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('V_Home',$data);
		}
		else
		{
			if($this->M_Login->checkUsernameExists($username)){
				$db_username=$this->M_Login->getPasswordHash($username);			
				if(password_verify($this->input->post('password'),$db_username)){
					$this->load->view('V_AccountPage',$data);				
				}
				else{
					$this->load->view('V_HomeLoginError');
				}
			}
			else{
				$this->load->view('V_HomeLoginError');
			}
		}
		
	}
	public function index() {
		$this->load->model('M_Registration');
		$this->form_validation->set_rules('username', 'username', 'trim|required|min_length[5]|max_length[20]');
		$this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]', array('required' => 'You must provide a %s.'));
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		
		$data = array(
				'username' => $this->input->post('username'),
				'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
				'email' => $this->input->post('email'));

		if ($this->form_validation->run() == FALSE)
		{
				$this->load->view('V_Home',$data);
		}
		else
		{
			$this->M_Registration->insert($data);			
			$this->load->view('V_AccountPage',$data);				
		}
		
		/*
		$login=$this->session->userdata('login');
		if(isset($login))
		{
			$link=$_POST[''];
			redirect('');			
		}
		else
		{
					
		}
		*/
	
	}
}
?>