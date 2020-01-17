<?php
  date_default_timezone_set('asia/kolkata');
  function pageLoad($viewPage , $data=false)
  {
      $CI = & get_instance();
      $CI->load->view('panel/layout/header.php' , $data);
      $CI->load->view('panel/layout/sidebar.php' , $data);
     // $CI->load->view('panel/layout/menu.php' , $data);
      $CI->load->view($viewPage , $data);
      $CI->load->view('panel/layout/footer.php' , $data);
  }

  function validateLogin()
{

	$CI = & get_instance();
	if (!$CI->session->userdata('empId')) {
		redirect('panel/Login');
	}
	// else{
	// 	$log['lastActiveOn'] = date('Y-m-d H:i:s');
	// 	$wh['empId'] = $CI->session->userdata('empId');
	// 	$CI->db->update('tbl_emp_master' , $log , $wh);
	// }
}
 
	/*function header()
	{
		$data['content'] = "";
		$this->load->view('panel/layout/header', $data);
	}

	function sidebar()
	{
		$data['content'] = "";
		$this->load->view('panel/layout/sidebar', $data);
	}
	function menu()
	{
		$data['content'] = "";
		$this->load->view('panel/layout/menu', $data);
	}


	function footer()
	{
		$data['content'] = "";
		$this->load->view('panel/layout/footer', $data);
    }
    
  
       

	function pageLoad($page, $data)
	{
		self::header();
		self::sidebar();
		self::menu();
		$this->load->view($page, $data);
		self::footer();
	}*/
	
?>