<?php
class Admin_model extends CI_model{

	public function authUser($data){
		
		$queryResp = $this->db->get_where('tbl_admin', $data)->num_rows();
		if($queryResp > 0){
			return 'valid';
		}
		else{
			return 'invalid';
		}
	}

	public function getCategory(){
		$q = $this->db->get('tbl_category')->result_array();
		return $q;
		//echo "model";
		//pre($q);exit;	
		$sql = "select * from tbl_category";
		$res = $this->db->query($sql)->result_array();
		
		
	
	}

	
}
?>