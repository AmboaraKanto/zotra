<?php
    class Marque_Model extends CI_MODEL{
       
        public function __construct(){
             parent::__construct();          
        }

        public function __construct($libelle){
            $this->setlibelle($libelle);
        }

        public function addMarquue(){
            $libelle = $this->input->post('libelle');
            $data = array(
                'libelle'=>$libelle;
            );
            $this->db->insert('marque',$data);
        };

        public function deleteMarque($idmarque){
            $this->db->where('idmarque',$idmarque);
            $this->db->delete('marque');
        }
        
    }