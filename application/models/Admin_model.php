<?php 
class Admin_model extends CI_Model{

	function checkUserExists($logindata){		
// print_r($logindata);die;
		$this->db->select("*");
		$this->db->from("tbl_admin");
		$where="(username='".$logindata['username']."' or name='".$logindata['username']."')";
		$this->db->where($where);
		$this->db->where("password",$logindata['password']);
		$this->db->where('status','active');
		$query=$this->db->get();
		// echo $this->emp->last_query();die;
		$result  = $query->result_array();
		// print_r($result);die;
		return $result;
	}	

	public function common_update($column,$id,$table,$data)
		{  
			$this->db->where($column, $id);
			$res = $this->db->update($table, $data);
			if($res == 1)
				return true;
			else
				return false;
		}

		public function common_delete($column,$id,$table){
			$this->db->where($column, $id);
		$this->db->delete($table);
	}
	
	public function getEmployeeDetails($id=null){
		if($id){
			$this->db->where('name',$id);			
		}
		$res = $this->db->select('*')->from('tbl_admin')->get();
		return $res;
	}
	
	public function StoreGalleryData($data_to_store){
		$res = $this->db->insert("tbl_gallery",$data_to_store);
		// echo $this->db->last_query();die;
		return $res;
	}

	public function UpdateAdminData($data_to_update){
		$this->db->update("tbl_admin",$data_to_update);
		return true;
	}

	public function getGalleryDetails(){
		$res = $this->db->select("*")->from("tbl_gallery");
		$res = $this->db->order_by("slno", "desc");
		$res = $this->db->get()->result_array();
		// echo $this->db->last_query(); die;
		return $res;
	}
	
	public function DeleteGallery($tid){
		$this->db->where('slno',$tid);
		$this->db->delete("tbl_gallery");
		return true;
	}

public function getdonations(){
		$res = $this->db->select("*")->from("tbl_donations");
		$res = $this->db->order_by("id", "desc");
		$res = $this->db->get()->result_array();
		// echo $this->db->last_query(); die;
		return $res;
	}

	public function photocount(){
		$query = $this->db->get('tbl_gallery')->num_rows();
		return $query;
	}
	public function PhotoDetailsSingle($id){
		$this->db->where("slno",$id);
		$res = $this->db->select("*")->from("tbl_gallery");
		$res = $this->db->get()->row_array();
		return $res;
	}

}
?>