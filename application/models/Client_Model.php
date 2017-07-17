<?php 
    class Client_Model extends CI_MODEL{
        
        public function __construct(){
            parent::__construct();
        }

        
        
        public function login($data){
            $condition="email='".$data['email']."' and motdepasse='".$data['motdepasse']."'";
            $this->db->select('*');
            $this->db->from('client');
            $this->db->where($condition);
            $query=$this->db->get();
            if($query->num_rows()==1){
                return $query->result();
            }
            else{
                throw new Exception("Votre mot de passe ou votre email est incorrect.");
                
            }
        }

       public function signin($data){                   
            $this->db->insert('client',$data);
        }

        public static function rechercheAvancee($date,$depart,$destination){
            self::$load->model('Trajet_Model');
            // Validation
            self::validationRecherche();
            // Select au niveau de la base
            $ret=Trajet_Model::findtrajet($date,$depart,$destination);
            // Verifier si le resultat est vide
            if(count($ret)==0) throw new Exception("Aucun resultat disponible pour votre recherche");
            // Retourner la liste des trajets
            return $ret;
        }
    }
