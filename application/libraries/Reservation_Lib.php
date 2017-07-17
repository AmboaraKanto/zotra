<?php
class Reservation_Lib{
	private $idreservation;
    private $client;    
    private $statut;
    private $datereservation;
    private $total;
    private $paye;

    public function __construct(){
            
    }
    public function initialize($idreservation,$client,$statut,$datereservation,$total,$paye){
    	$this->setIdreservation($idreservation);
    	$this->setClient($client);
    	$this->setStatut($statut);
    	$this->setDateReservation($datereservation);
    	$this->setTotal($total);
    	$this->setPaye($paye);
    }        

    public function getIdreservation() { return $this->idreservation; }

    public function setIdreservation($newid) { $this->idreservation = $newid; }

    public function getClient() { return $this->client; }
    
    public function setClient($newid) { $this->client = $newid; }

    public function getStatut() { return $this->statut; }

    public function setStatut($statut) { $this->statut = $statut; }

    public function getDateReservation() { return $this->datereservaton; }

    public function setDateReservation($newdate) { $this->datereservation = $newdate; }

    public function getTotal(){ $this->total; }

    public function setTotal($total){ $this->total=$total; }
    
    public function getPaye(){ $this->paye; }

    public function setPaye($paye){ $this->paye=$paye; }

    public function annuler(){
        $this->setStatut(-1);
    }
}