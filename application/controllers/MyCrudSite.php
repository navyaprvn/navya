<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MyCrudSite extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('grocery_CRUD');

	}
	public function _example_output($output = null)
	{
		$this->load->view('myview.php',(array)$output);
	}
	public function index(){
		$crud = new grocery_CRUD();
		$crud->set_table('usertable');
		$crud->set_theme('datatables');
		$crud->unset_print();
		$crud->unset_export();
		$output = $crud->render();
        $this->_example_output($output);
       /*$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));*/
	}
}