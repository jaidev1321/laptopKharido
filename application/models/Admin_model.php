<?php
class Admin_model extends CI_model{

	public function authUser($data){
		
		$queryResp = $this->db->get_where('tbl_admin', $data)->row();
		if($queryResp){
			$return['status'] = true;
			$return['data'] = $queryResp;
			return $return;
		}
		else{
			$return['status'] = false;
			return $return;
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