<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class UnderConst extends CI_Controller{
	public function __construct(){
		parent :: __construct();
		$this->load->library("form_validation");
		$this->load->model("Admin_model");
		
		// $this->empdb=$this->load->database('emp',true);
		$this->load->helper(array('form', 'url')); 
		$this->load->library('session');
		$this->load->library('upload');		
	}
	public function index(){

$this->load->view("under-construction.html");

	}
}
