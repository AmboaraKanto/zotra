<?php
class Admin extends CI_Controller{
    public function __construct() {
		parent::__construct();			
		$this->load->model('admin_model');
		$this->load->library('admin_lib');
		$this->load->model('util_model');			
		$this->load->helper(array('form', 'url'));             
    }

   	public function index(){
   		$data['error_message']=null;
   		$this->load->view("admin/accueil",$data); 	
   	}
   	public function accueil(){
   		$data['contents']='admin/squelette/dashboard';
 		$this->load->view("admin/template-admin",$data); 
   	}

   	public function connexion(){
   		if($_GET){
   			try{
 				$donnee=array(
					'email'=> $this->input->get('email'),
					'motdepasse'=> $this->input->get('motdepasse'),
				);
				
				$this->getSession($donnee,"");

 			}catch(Exception $ex){
 				$data['error_message']= $ex->getMessage();
				$this->load->view('admin/accueil',$data);
 			}

   		}else{
   			$data['error_message']=null;
   			$this->load->view("admin/accueil",$data);
   		}
   		
   	}

   	public function inscription(){
   		$data['listeCooperative']=$this->util_model->findOrderBy('cooperative','libelle','asc');
   		if($_GET){
   			try{
   				$this->admin_lib->initialize(0,$this->input->get('nom'),$this->input->get('prenom'),$this->input->get('email'),$this->input->get('motdepasse'),1,$this->input->get('cooperative'));
   				$donnee = array(
	                'nom'=>$this->admin_lib->getNom(),
	                'prenom'=>$this->admin_lib->getPrenom(),
	                'email'=>$this->admin_lib->getEmail(),
	                'motdepasse'=>$this->admin_lib->getMotdePasse(), 
	                'idcooperative'=> $this->admin_lib->getIdcooperative(),               
	            );
	            if($this->admin_lib->confirmerMdp($this->input->get('mdp2'))){
	            	$this->util_model->save('admin',$donnee);
	            	$temp=array(
						'email'=> $this->input->get('email'),
						'motdepasse'=> $this->input->get('motdepasse'),
					);
					// construire la session
					$message="Bienvenue, ".$this->admin_lib->getPrenom();
	            	$this->getSession($temp,$message);
	         
	            }
   			}catch(Exception $ex){
   				$data['error_message']= $ex->getMessage();
 				
				$this->load->view('admin/inscription',$data);
   			}

   		}else{
   			$data['error_message']=null;
   			$this->load->view("admin/inscription",$data);
   		}
   		

   	}

   	public function getSession($donnee,$message){
   		$result=$this->admin_model->login($donnee);
		if($result){
			$session_data=array(
				'idadmin'=>$result[0]->idadmin,
				'nom'=>$result[0]->nom,
				'prenom'=>$result[0]->prenom,
				'email'=>$result[0]->email,
				'idcooperative'=>$result[0]->idcooperative,
			);
			if(strcmp($message, "")==0){
	 			$message="Bonjour, ".ucfirst($result[0]->prenom)." ".ucfirst($result[0]->nom);
 			}
			$this->session->set_userdata('admin',$session_data);
			
			$this->session->set_flashdata('success_message',$message);

			redirect('admin/accueil', 'refresh');
			
		}
  	}
  	public function getNomComplet(){
  		echo ucfirst($nom)." ".ucfirst($prenom);
  	}


	public function deconnexion(){
		$sess_array = array(
			'idadmin'=>'',
			'nom'=>'',
			'prenom'=>'',
			'email'=>'',	
		);
		$this->session->unset_userdata('admin', $sess_array);
		
		$this->session->sess_destroy();
		redirect('/admin', 'refresh');
	}

}