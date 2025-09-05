<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Usercon extends CI_Controller{
	public function __construct(){
		parent :: __construct();
		$this->load->library("form_validation");
		$this->load->model("Admin_model");
		$this->load->model("User_model");
		$this->load->helper(array('form', 'url')); 
		$this->load->library('session');
		$this->load->library('upload');	
	}

	public function index(){
		$this->load->view("index");
	}

	public function services(){
		$this->load->view("services");
	}

	public function facilities(){
		$this->load->view("facilities");
	}

	public function contact(){
		$this->load->view("contact");
	}


	public function gallery(){
		$data['url'] = 'gallery';
		$data['photos'] = $this->User_model->getPhotosDetails();
		$this->load->view("gallery",$data);
	}

	public function event(){
		$this->load->view("event");
	}

	public function donation(){




		if($this->input->post("submit")){
				
			$this->form_validation->set_rules("name","name","required");
			$this->form_validation->set_rules("email","email","required");
			$this->form_validation->set_rules("amount","amount","required");

			if($this->form_validation->run()==TRUE){
				$task_to_store['inserted_date'] =time();
				$task_to_store['name'] = $this->input->post("name");	
				$task_to_store['email'] = $this->input->post("email");
				$task_to_store['mobile'] = $this->input->post("mobile");
				$task_to_store['category'] = $this->input->post("category");
				$task_to_store['type'] = $this->input->post("type");
				$task_to_store['amount'] = $this->input->post("amount");
				$task_to_store['message'] = $this->input->post("message");	
				$task_to_store['status'] = 2;	
				// $dbduplicate = $this->User_model->CheckDuplicatequery($task_to_store);
				// if($dbduplicate<=0){	
					$dbTaskStored = $this->User_model->StoreDonation($task_to_store);
					if($dbTaskStored){
						$this->session->set_flashdata("Succ",' Your donation  Added Successfully');
					}else{
						$this->session->set_flashdata("Err",'OOPS! Some Error Occured..Do it Again !..');
					}
				// }else{
				// 	$this->session->set_flashdata("Err",'OOPS! Your Response Already Exist !..');
				// }
			} else {
				$this->session->set_flashdata("Err",'All Fields Are Mandatory');
			}

		}

		$this->load->view("donation");
	}


}

?>