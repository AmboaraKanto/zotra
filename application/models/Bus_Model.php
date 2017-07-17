<?php
    class Bus_Model extends CI_Model{
        private static $db;
        
        public function __construct(){
            parent::__construct();
            self::$db = &get_instance()->db;
           
        }        

        public function getLastInsert(){
            return $this->db->insert_id();
        }
        
        public function addBus($data,$nbrplace){           
            $this->db->insert('bus',$data);
            $idbus1=$this->db->insert_id();
            $nbr=intval($nbrplace);
            for($i=0;$i<$nbr;$i++){
                $temp=$i+1;
                $data1 = array(
                    'idbus'=>$idbus1,
                    'numero'=>$temp,
                                   
                );
                $this->db->insert('place',$data1);
            }
        }

        public function deleteBus($idbus){
            $this->db->where('idbus',$idbus);
            $this->db->delete('bus');
        }

        public static function findplaces($idbus){
            $ret=array();
            $data=array($idbus);
            $query=self::$db->query("SELECT * FROM PLACE WHERE IDBUS=?",$data);    
            $i=0;
            foreach ($query->result() as $trajet){
                $ret[$i]=$trajet;
                $i++;
            }
            return $ret;
        }
    }
