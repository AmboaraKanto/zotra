<?php
/**
* 
*/
class Accueil extends CI_Controller{
	
	public function __construct() {
		parent::__construct();	
		$this->load->model('util_model');
			
	}

	public function index(){
		// $data['listeVille']=$this->util_model->
		$data['contents']='accueil';
 		$this->load->view('template',$data);  		
 	}
 	public function index_admin(){
		// $data['contents']='accueil';
 		$this->load->view("admin/accueil"); 		
 	}
 	public function test(){
		$data['contents']='admin/squelette/dashboard';
 		$this->load->view("admin/template-admin",$data); 		
 	}
}