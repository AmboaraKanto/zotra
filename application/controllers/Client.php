<?php
/**
* 
*/
class Client extends CI_Controller{
	
	public function __construct() {
		parent::__construct();			
		$this->load->model('util_model');
		$this->load->library('client_lib');
		$this->load->model('client_model');
		$this->load->helper(array('form', 'url')); 
			
	}
	public function index(){
		$data['allClient']=$this->util_model->findAll("client");
		$data['contents']='client';
 		$this->load->view('template',$data);
  		
 	}

 	public function login(){
 		$data['error_message']=null;
 		$data['contents']='connexion';
 		$this->load->view('template',$data);
 		
 	}

 	public function accueil(){
 		$data['contents']='accueil';
 		$this->load->view('template',$data);
 	}

 	public function findAll(){   	
	  	$data['allClient']=$this->util_model->findAll("client");
	  	$data['contents']='accueil';
		$this->load->view('template',$data);
 	}
 	
	 public function inscription(){		
 		if($_POST){
 			try{
 				//instancier le client 
 				$this->client_lib->initialize(0,$this->input->post('nom'),$this->input->post('prenom'),$this->input->post('cin'),$this->input->post('contact'),$this->input->post('email'),$this->input->post('mdp'));
 				$donnee = array(
	                'nom'=>$this->client_lib->getNom(),
	                'prenom'=>$this->client_lib->getPrenom(),
	                'cin'=>$this->client_lib->getCin(),
	                'contact'=>$this->client_lib->getContact(),
	                'email'=>$this->client_lib->getEmail(),
	                'motdepasse'=>$this->client_lib->getMotdePasse(),                
	            );
	            if($this->client_lib->confirmerMdp($this->input->post('mdp2'))){
	            	$this->util_model->save('client',$donnee);
	            	$temp=array(
						'email'=> $this->input->post('email'),
						'motdepasse'=> $this->input->post('mdp'),
					);
					// construire la session
					$message="Bienvenue, ".$this->client_lib->getPrenom();
	            	$this->getSession($temp,$message);
	         
	            }
	           

 			}catch(Exception $ex){
 				$data['error_message']= $ex->getMessage();
 				$data['contents']='inscription';
				$this->load->view('template',$data);
 			}
 			
 		}else{
 			
 			$data['error_message']=null;
	 		$data['contents']='inscription';
			$this->load->view('template',$data);
 		}
 	}

 	public function getSession($donnee,$message){

 		$result=$this->client_model->login($donnee);
		if($result){
			$session_data=array(
				'idclient'=>$result[0]->idclient,
				'nom'=>$result[0]->nom,
				'prenom'=>$result[0]->prenom,
				'email'=>$result[0]->email,
			);
			if(strcmp($message, "")==0){
	 			$message="Bonjour, ".$result[0]->nom;
 			}
			$this->session->set_userdata('client',$session_data);
			if (isset($this->session->userdata['listeplace']) && isset($this->session->userdata['trajet'])) {
				redirect('trajet/reservation', 'refresh');
			}else{
				$this->session->set_flashdata('success_message',$message);

				redirect('accueil', 'refresh');
			}
		}
 	}

 	public function connexion(){
 		if($_GET || $_POST){
 			try{
 				$donnee=array(
					'email'=> $this->input->get('email'),
					'motdepasse'=> $this->input->get('motdepasse'),
				);
				
				$this->getSession($donnee,"");

 			}catch(Exception $ex){
 				$data['error_message']= $ex->getMessage();
 				$data['contents']='connexion';
				$this->load->view('template',$data);
 			}

 		}else{
 			$data['error_message']=null;
 			$data['contents']='connexion';
			$this->load->view('template',$data);
 		}
 	}

	public function deconnexion() {
		// Removing session data
		$sess_array = array(
		'idclient'=>'',
		'nom'=>'',
		'prenom'=>'',
		'email' => '',
		'motdepasse'=>'',		
		);
		$this->session->unset_userdata('client', $sess_array);
		
		$this->session->sess_destroy();
		redirect('/accueil', 'refresh');
	} 	
}
?>