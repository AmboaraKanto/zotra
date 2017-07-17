<?php
/**
* 
*/
class Bus extends CI_Controller{
	
	public function __construct() {
			parent::__construct();			
			$this->load->model('util_model');

			$this->load->model('bus_model');
            $this->load->library('bus_lib');

			$this->load->helper(array('form', 'url')); 
			
	}
	public function index(){
		$data = array();
		$data['allBus']=$this->util_model->findAll("bus");
		$data['contents']='admin/squelette/liste-bus';
 		$this->load->view('admin/template-admin',$data);
  		
 	}
 	public function liste_bus(){
 		$data['allBus']=$this->util_model->findAll("bus");
 		$data['contents']='admin/squelette/liste-bus';
 		$this->load->view('admin/template-admin',$data);
 	}

  public function creation_bus(){
      $data['allBus']=$this->util_model->findAll("bus");
      $data['allMarque']=$this->util_model->findAll("marque");
      if($_POST){
          $idmarque =$this->input->post('marque');
          $idcooperative = $this->session->userdata['admin']['idcooperative'];
          $matricule = $this->input->post('matricule');
          $consommation = $this->input->post('consommation');
          $etat = $this->input->post('etat');
          $nbrplace = $this->input->post('nbrdeplace');
          $datesortie = $this->input->post('datesortie');
          try{
              $this->bus_lib->initialize(0,$idmarque,$idcooperative,$matricule,$consommation,$nbrplace,$datesortie,$etat);
              $donnee = array(
                  'idcooperative'=>$this->bus_lib->getIdcooperative(),
                  'marque'=>$this->bus_lib->getMarque(),
                  'matricule'=>$this->bus_lib->getMatricule(),
                  'consommation'=>$this->bus_lib->getConsommation(),
                  'nbrplace'=>$this->bus_lib->getNbrplace(),
                  'datesortie'=>$this->bus_lib->getDatesortie(),  
                  'etat'=>$this->bus_lib->getEtat(),
              );
              var_dump($this->bus_lib->getNbrplace());
              $this->bus_model->addBus($donnee,$this->bus_lib->getNbrplace());
              $this->session->set_flashdata('success_message',"Ligne inserée");
              redirect('/bus/liste_bus', 'refresh');

          }catch(Exception $ex){
              $data['error_message']= $ex->getMessage();
              $data['contents']='admin/squelette/ajout-bus';
              $this->load->view('admin/template-admin',$data);
          }

      }else{
          $data['error_message']= null;
          $data['contents']='admin/squelette/ajout-bus';
          $this->load->view('admin/template-admin',$data);
      }
    }


 	
}
?>