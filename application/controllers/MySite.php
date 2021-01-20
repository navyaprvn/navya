<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MySite extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('grocery_CRUD');
		$this->load->model("TestModel");

	}
	public function index(){
		$this->load->view("mytestview");
	}
	public function get_data(){
		$key= $this->input->post('key');
		$data=$this->TestModel->GetData($key);
		echo json_encode($data);

	}
}