<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
	}

	public function index()
	{
		$this->load->view('login');
	}
	
	public function authentication(){
		$auth['username'] = trim($this->input->post('username'));
		$auth['password'] = $this->input->post('password');
		$response = $this->Admin_model->authUser($auth);
		if($response == 'valid'){
			redirect('panel/Dashboard');
			pageLoad('panel/main');
		}
		else{
			redirect('login/invalid');
		}
	}
}
