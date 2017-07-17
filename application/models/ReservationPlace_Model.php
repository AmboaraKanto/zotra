<?php
class ReservationPlace_Model extends CI_MODEL{
    private static $db;

    public function __construct(){    
        parent::__construct();
        self::$db = &get_instance()->db;
    }

    public static function add($trajet,$reservation,$place){            
        $data = array(
            'idtrajet'=> $trajet,               
            'idreservation'=> $reservation,
            'idplace'=> $place,
        );
        var_dump($data);
         self::$db->insert('place_reservation',$data);
    }
}