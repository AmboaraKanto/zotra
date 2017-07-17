<?php
class ReservationPlace_Lib{
	private $idreservationplace;
    private $trajet;    
    private $reservation;
    private $idplace;

    public function __construct(){
            
    }
    public function initialize($idreservationplace,$trajet,$reservation,$idplace){
        $this->setIdreservationplace($idreservationplace);
        $this->setTrajet($trajet);
        $this->setReservation($reservation);
        $this->setIdplace($idplace);
    }       

    public function getIdreservationplace() { return $this->idreservationplace; }

    public function setIdreservationplace($newid) { $this->idreservationplace = $newid; }

    public function getTrajet(){ return $this->trajet; }

    public function setTrajet($trajet){ $this->trajet=$trajet; }

    public function getReservation(){ return $this->reservation; }

    public function setReservation($res){ $this->reservation=$res; }

    public function getIdplace(){ return $this->idplace; }

    public function setIdplace($place){ $this->idplace=$place; }
}