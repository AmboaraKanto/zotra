<?php 
class Trajet_Model extends CI_MODEL{
    private static $db;
    private static $load;

    public function __construct() {
        parent::__construct();
        self::$db = &get_instance()->db;
        self::$load = &get_instance()->load;
               
    }

    public function addtrajet($data){           
        $this->db->insert('trajet',$data);
    }

    public function getAllTrajet(){
        $sql = "SELECT * FROM TRAJET_INFO";
        $query = $this->db->query($sql);            
        return $query->result();
    }

    public function updatetarif($id,$newtarif){            
        $data = array(
            'idtrajet'=>$this->setidtrajet($id),
            'tarif'=>$this->settarif($newtarif)
        );
        $this->db->update('trajet',$data);
    }

    public function deletetrajet($idtrajet){
        $this->db->where('idtrajet',$idtrajet);
        $this->db->delete('trajet');
    }

    public static function findtrajet($date,$source,$arrivee){
        $ret=array();
        date_default_timezone_set('Europe/Moscow');
        if($date==null) $date=date('d-m-Y');
        $data=array($date,$source,$arrivee);
        $query=self::$db->query("SELECT * FROM TRAJET_INFO WHERE DATEDEPART>=? AND SOURCE=? AND DESTINATION=?",$data);    
        $i=0;
        foreach ($query->result() as $trajet){
            $ret[$i]=$trajet;
            $i++;
        }
        return $ret;
    }


    // le manao recherchee avancee ary amin'ny detail'    
    public static function findtrajetavance($date,$source,$arrivee,$voiture,$prixmin,$prixmax,$cooperative,$libremin,$libremax){
        $ret = array();
        $data = array(
            $date,
            $source,
            $arrivee,
            $voiture,
            $prixmin,
            $prixmax,
            $cooperative,
            $libremin,
            $libremax
        );
        $query=self::$db->query("SELECT * FROM TRAJET_INFO WHERE DATEDEPART=? AND SOURCE=? AND DESTINATION=? AND IDVOITURE=? AND TARIF >= ? OR TARIF <= ? AND COOPERATIVE = ? AND LIBRE >= ? OR LIBRE <= ?",$data);
        $i=0;
        foreach ($query->result() as $trajet){
            $ret[$i]=$trajet;
            $i++;
        }
        return $ret;
    }

    public static function findbyid($id){
        $ret=array();
        $data=array($id);
        $query=self::$db->query("SELECT * FROM TRAJET_INFO WHERE IDTRAJET=?",$data);    
        $i=0;
        foreach ($query->result() as $trajet){
            $ret[$i]=$trajet;
            $i++;
        }
        return $ret;
    }

    public function findoccupe($id){
        $ret=array();
        $data=array($id);
        $query=self::$db->query("SELECT * FROM PLACE_RESERVATION WHERE IDTRAJET=?",$data);    
        $i=0;
        foreach ($query->result() as $trajet){
            $ret[$i]=$trajet;
            $i++;
        }
        return $ret;
    }
}

   