<?php
    class Reservation_Model extends CI_MODEL{
        private static $db;

        public function __construct(){    
            parent::__construct();
            self::$db = &get_instance()->db;
        }
     
        public static function add($idclient,$date){            
            $data = array(
                'idclient'=>$idclient,               
                'statut'=> 0,
                'datereservation'=>$date,
            );
            self::$db->insert('reservation',$data);
        }

        public function annuler($id){
            $data = array(
                'idreservation' =>$this->setidreservation($id),
                'statut'=> -1
            );
            $this->db->update("reservation",$data);
        }

        public function confirmation($id){
            $data = array(
                'idreservation' =>$this->setidreservation($id),
                'statut' => 10
            );
            $this->db->update("reservation",$data);
        }

    }