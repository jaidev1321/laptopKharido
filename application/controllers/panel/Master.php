<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function category(){
		//echo "category";exit;
		$result['data'] =  $this->admin_model->getCategory();
		pageLoad('panel/master/index_category',$result);
		//$this->load->view('panel/master/index_category',$result);
	}
	public function addEditCategory(){
		$data = false;
		//pageLoad('panel/master/add_edit_category',$data);
		$this->load->view('panel/master/add_edit_category' , $data);
	}
	public function perfromCategory(){
		/* "<pre>";
		var_dump($_POST);
		echo "</pre>";
		exit;*/
		$data = $this->input->post();
		$this->db->insert('tbl_category',$data);
	}
	public function getCategory(){
		$data =  $this->db->get('tbl_category')->result_array();	
		echo json_encode($data);
	
	}
	
}