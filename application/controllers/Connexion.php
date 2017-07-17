<?php
/**
* 
*/
class Connexion extends CI_Controller{
	
	public function __construct() {
			parent::__construct();			
			
	}

	public function index(){
		$data['error_message']=null;
		$data['contents']='connexion';
 		$this->load->view('template',$data);  		
 	}
}