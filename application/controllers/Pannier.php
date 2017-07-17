<?php
/**
* 
*/
class Pannier extends CI_Controller{
	
	public function __construct() {
			parent::__construct();			
			$this->load->model('util_model');

			$this->load->model('bus_model');

			$this->load->helper(array('form', 'url')); 
	}

	public function index(){
		$data['allBus']=$this->util_model->findAll('bus');
		$data['contents']='pannier';
 		$this->load->view('template',$data);  		
 	}
 	
}