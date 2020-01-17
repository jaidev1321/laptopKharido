<?php
class Dashboard extends CI_Controller {

	public function __construct(){
        parent::__construct();
        validateLogin();
	}

	public function index()
	{
		pageLoad('panel/main');
	}
}
