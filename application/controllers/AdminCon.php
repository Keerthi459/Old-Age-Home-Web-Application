<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admincon extends CI_Controller{
	public function __construct(){
		parent :: __construct();
		$this->load->library("form_validation");
		$this->load->model("Admin_model");
		$this->load->helper(array('form', 'url')); 
		$this->load->library('session');
		$this->load->library('upload');
	}
	
	
	public function index(){
			
		if(!empty($this->session->userdata("sess_auth"))){	
			redirect("admin/dashboard");
		} else {

			if($this->input->post("submit")){

				$this->form_validation->set_rules('username','Username','required');
				$this->form_validation->set_rules("password",'Password','required');
				if($this->form_validation->run() == true){
					$logindata['username'] = $this->input->post("username");
					$logindata['password'] = $this->encrypt($this->input->post("password"));
					$success = $this->Admin_model->checkUserExists($logindata);

					if(!empty($success)){
						// print_r($success);die;
						$this->session->set_userdata('userdetails',$success[0]);
						$this->session->set_userdata("user",$success[0]['name']);
						$this->session->set_userdata("sess_auth","RDjhg%$43fjhnfj");
						redirect("admin/dashboard");
					}else{	
					
						$this->session->set_flashdata("ErrMsg","Invalid Login Credentials");
						redirect("admin");
					}
				}
			// else{
				// redirect("admin");
			// }
			}

		}
		
		$this->load->view("admin/adminindex");
	}

	function encrypt($plaintext)
	{
		$pass=md5($plaintext);
		return $pass;
	}

	public function AdminDashboard(){
		$this->load->view("admin/common");
	}

	public function AdminDashboardMain(){
		$data['url'] = 'admin/dashboard';
		if(!empty($this->session->userdata("sess_auth"))){		
			$data['photoscount'] = $this->Admin_model->photocount();
			$data['donations'] = $this->Admin_model->getdonations();

$data['amount'] = 0;
if ($data['donations']) {
foreach ($data['donations'] as $key => $value) {
	if ($value['status']==1) {
	$data['amount'] = $data['amount'] + $value['amount'];
	}
}
}

			if($this->input->post("submit_pass")){
				$pass_data_to_update['password'] = $this->encrypt($this->input->post("password"));
				$dbLogUpdate_pass = $this->Admin_model->UpdateAdminData($pass_data_to_update);
				if($dbLogUpdate_pass){
					$this->session->set_flashdata("Succ",'Password Updated Successfully ! ..');
					redirect('admin/dashboard');
				}else{
					$this->session->set_flashdata("Succ",'OOPS! Some Error Occured..Do it Again !..');
				}
			}
			$this->load->view("admin/common",$data);
		}else{
			session_unset();
			redirect("admin");
		}
	}

	public function donations(){
		$data['url'] = 'admin/donations';
			$data['donations'] = $this->Admin_model->getdonations();


		if(!empty($this->session->userdata("sess_auth"))){
			$this->load->view("admin/common",$data);
		}else{
			session_unset();
			redirect("admin");
		}
	}

	function donation_status_ajax(){
		$id = $this->input->post('id');
		$data['status'] = $this->input->post('status');
		$result['result'] = $this->Admin_model->common_update('id',$id,'tbl_donations',$data);
		echo "1";
	}

		function delete_donation_ajax(){
		$id = $this->input->post('id');
		$result['result'] = $this->Admin_model->common_delete('id',$id,'tbl_donations');
		echo "1";
	}

	function delete_photo_ajax(){
		$id = $this->input->post('id');
		$result['result'] = $this->Admin_model->common_delete('slno',$id,'tbl_gallery');
		echo "1";
	}
	
	
	
	
	

	
	public function notfound(){
		$this->load->view("admin/notfound");
	}

	public function logout(){
		session_destroy();
		redirect("admin");
	}



	public function Addphotos(){
		if($this->input->post("submit")){
			$config = array(
				'upload_path'   => FCPATH . "./images/gallery",
				'allowed_types' => 'jpg|png|jpeg',                           
			);

			$this->load->library('upload', $config);

			$files = $_FILES['photo'];

			foreach ($files['name'] as $key => $filename) {
				$_FILES['photo[]']['name']     = $files['name'][$key];
				$_FILES['photo[]']['type']     = $files['type'][$key];
				$_FILES['photo[]']['tmp_name'] = $files['tmp_name'][$key];
				$_FILES['photo[]']['error']    = $files['error'][$key];
				$_FILES['photo[]']['size']     = $files['size'][$key];

				$config['file_name'] = $filename;
				
				
				$this->upload->initialize($config);

				if (isset($_FILES['photo[]']['name']) && !empty($_FILES['photo[]']['name'])) {
					if ( ! $this->upload->do_upload('photo[]')) {
						$error = array('error' => $this->upload->display_errors());

					} else {
						$photo[] = $this->upload->data();
						$array = array(
							'filename'  => $_FILES['photo[]']['name'],
							'size'      => $_FILES['photo[]']['size']
						);
						$data_to_insert['name'] = $filename;
						$data_to_insert['date'] = time();
						$dbLogStored = $this->Admin_model->StoreGalleryData($data_to_insert);  	
					}
				}
			}
			if($dbLogStored){
				$this->session->set_flashdata("Succ",'Photos Uploaded Successfully ! ..');
				redirect('admin/AddPhotos');
			}else{
				$this->session->set_flashdata("Err",'OOPS! Some Error Occured..Do it Again !..');
			}
		}
		$data['url'] = 'admin/AddPhotos';
		$this->load->view("admin/common",$data);
	}


	public function Photoslist(){
		if(!empty($this->input->post("deleteid"))){
			$tid = $this->input->post("deleteid");


			$logdata = $this->Admin_model->PhotoDetailsSingle($tid);
			$path = "images/gallery/".$logdata['name'];
			
			unlink($path);

			$Taskdeleted = $this->Admin_model->DeleteGallery($tid);
			if(isset($Taskdeleted)){
				$this->session->set_flashdata("DelSucc","Photo deleted Successfully !");
				redirect("admin/PhotosList");
			}else{
				$this->session->set_flashdata("DelSucc","Technical Error! Try Again!");
				redirect("admin/PhotosList");
			}
		}
		$data['url'] = 'admin/PhotosList';
		$data['dbGalleryData'] = $this->Admin_model->getGalleryDetails();
		if(!empty($this->session->userdata("sess_auth"))){
			$this->load->view("admin/common",$data);
		}else{
			session_unset();
			redirect("admin");
		}
	}

}
?>