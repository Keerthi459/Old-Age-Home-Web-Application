<?php 
class User_model extends CI_Model{
	
	function checkUserExists($logindata){		
		$this->db->select("*");
		$this->db->from("tbl_admin");
		$where="(username='".$logindata['username']."' or name='".$logindata['username']."')";
		$this->db->where($where);
		$this->db->where("password",$logindata['password']);
		$this->db->where('status','active');
		$query=$this->db->get();
		$result  = $query->result_array();
		return $result;
	}	

	public function getEmployeeDetails($id=null){
		if($id){
			$this->db->where('name',$id);			
		}
		$res = $this->db->select('*')->from('tbl_admin')->get();
		return $res;
	}
	
	public function getPhotosDetails(){	
		$res = $this->db->select("*")->from("tbl_gallery");
		$res = $this->db->order_by("slno", "desc");
		$res = $this->db->get()->result_array();
		return $res;
	}
	public function StoreDonation($data_to_store){
		$res = $this->db->insert("tbl_donations",$data_to_store);
		// echo $this->db->last_query();die;
		return $res;
	}
}
?>