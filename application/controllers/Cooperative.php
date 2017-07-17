<?php
/**
* 
*/
class Cooperative extends CI_Controller{
	
	public function __construct() {
			parent::__construct();			
			$this->load->model('util_model');

			$this->load->model('cooperative');

			$this->load->helper(array('form', 'url')); 
			
	}
	public function index(){
		$data = array();
		$data['allCooperative']=$this->util_model->findAll("cooperative");
		$data['contents']='cooperative';
 		$this->load->view('template',$data);
  		
 	}
 	public function getAllReservation(){
 		$data['allReservation']=$this->util_model->findAll("reservation");
 		$data['contents']='reservation';
 		$this->load->view('template',$data);
 	}
 	public function doReservation(){
 		if($_POST){
 			$this->reservation->addReservation();
 			redirect('/bus_controller/getAllReservation', 'refresh');
 		}else{
 			//redigena formulaire
 			redirect('/bus_controller/doReservation', 'refresh');

 		}
 	}
 	public function supprimerReservation(){
 		if($_GET){
 			$this->bus->deleteReservation($this->input->get('idreservation'));
 			redirect('/reservation_controller/getAllReservation', 'refresh');
 		}
 	}
 	public function modifierReservation(){
 		if($_POST){
 			$this->reservation->updateReservation();
 			redirect('/reservation_controller/getAllReservation', 'refresh');
 		}else{
 			redirect('/reservation_controller/getAllReservation', 'refresh');
 		}
 	}
 	public function annuler(){
 		if($_GET){
 			$this->reservation->annulation($this->input->get('idreservation'));
 			redirect('/reservation_controller/getAllReservation', 'refresh');
 		}else{
 			redirect('/reservation_controller/getAllReservation', 'refresh');
 		}
 	}
 	public function confirmation(){
 		if($_GET){
 			$this->reservation->confirmation($this->input->get('idreservation'));
 			redirect('/reservation_controller/getAllReservation', 'refresh');
 		}else{
 			redirect('/reservation_controller/getAllReservation', 'refresh');
 		}
 	}
}
?>