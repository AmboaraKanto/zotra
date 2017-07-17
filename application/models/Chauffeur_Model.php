<?php
    class Chauffeur_Model extends CI_MODEL{
        
        public function __construct(){
            parent::__construct();
                       
        }
        
        public function addChauffeur($data){
           $this->db->insert('chauffeur',$data);
        }

        public function deletechauffeur($idchauffeur){
            $this->db->where('idchauffeur',$idchauffeur);
            $this->db->delete('chauffeur');
        }

    }