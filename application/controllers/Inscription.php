<?php
/**
* 
*/
class Inscription extends CI_Controller{
	
	public function __construct() {
			parent::__construct();			
			
	}

	public function index(){
		$data['contents']='inscription';
 		$this->load->view('template',$data);  		
 	}
}