<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('Home');
		}
		else
		{
			$this->load->view('formsuccess');
		}
		$login=$this->session->userdata('login');
		if(isset($login))
		{
			$link=$_POST[''];
			redirect('');			
		}
		else
		{
					
		}
	
	}
}
