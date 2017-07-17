<?php
    class Chauffeur extends CI_Controller{
        public function __construct() {
			parent::__construct();			
				$this->load->model('util_model');

			$this->load->model('chauffeur_model');

			$this->load->helper(array('form', 'url')); 
    	}   

        public function index(){}

        public function lister_chauffeur(){
            $data['allDrivers']=$this->util_model->findAll("chauffeur");
 	    	$data['contents']='admin/squelette/liste-chauffeur';
 		    $this->load->view('admin/template-admin',$data);
        }

        public function ajout_chauffeur(){           
            $data['contents']='admin/squelette/ajout-chauffeur';
            $this->load->view('admin/template-admin',$data);
 	    }

        public function embauche_chauffeur(){
            if($_POST){                                   
                $data = array(                   
                    'nom'=>$this->input->post('nom'),
                    'prenom'=>$this->input->post('prenom'),
                    'cin'=>$this->input->post('cin'),
                    'dateembauche'=>$this->input->post('dateembauche'),          
                );              
                $this->chauffeur_model->addChauffeur($data);
                // $this->creation_bus();
                redirect('/chauffeur/lister_chauffeur', 'refresh');
            }else{
                //redigena formulaire
               redirect('/chauffeur/ajout_chauffeur', 'refresh');

            }
        }

        public function supprimerChauffeur(){
            if($_GET){
                $this->chauffeur_model->deletechauffeur($this->input->get('idchauffeur'));
 			    redirect('/chauffeur/lister_chauffeur', 'refresh');
            }
        }
    }