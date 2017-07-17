<?php
class Trajet_Lib{
	private $idtrajet;
    private $chauffeur;
    private $bus;
    private $source;
    private $destination;
    private $dateDepart;
    private $heure;
    private $tarif; 

  	public function __construct(){
            
    }

    public function initialize($idtrajet,$chauffeur,$bus,$source,$destination,$dateDepart,$heure,$tarif){
        $this->setIdtrajet($idtrajet);
        $this->setChauffeur($chauffeur) ;
        $this->setBus($bus);
        $this->setTarif($tarif) ;
        $this->setSource($source) ;
        $this->setDestination($destination) ;
        $this->setdateDepart($dateDepart) ;
        $this->setHeure($heure) ;    
    }


    public function getIdtrajet() { return $this->idtrajet; }

    public function setIdtrajet($newid) { $this->idtrajet = $newid; }

    public function getChauffeur() { return $this->chauffeur; }

    public function setChauffeur($new){ 
        if($new!=0 || $new>0){
            $this->chauffeur = $new; 
        }else{
            throw new Exception("Selectionnez un chauffeur", 1);
            
        }
    }

    public function getTarif() { return $this->tarif; }

    public function setTarif($new) {
        if(is_numeric($newconsommation)){
            if($new>0){
                $this->tarif = $new;
            }else{
                throw new Exception("Tarif invalide", 1);                
            }
        }else{
            throw new Exception("La consommation doit être un chiffre");
        }
        
        
    }

    public function getBus(){ return $this->bus; }

    public function setBus($newbus) { $this->bus = $newbus; }

    public function getSource() { return $this->source; }

    public function setSource($new) { 
        if($new!=0 || $new>0){
            $this->source = $new; 
        }else{
            throw new Exception("Selectionnez un lieu de depart", 1);
            
        }
        
    }

    public function getDestination() { return $this->destination; }

    public function setDestination($new) { 
        if($new!=0 || $new>0){
            if(strcmp(strtolower($new),strtolower($this->getSource()))!=0){
                 $this->destination = $new; 
             }else{
                throw new Exception("Le lieu de depart et le lieu de destination sont identiques", 1);
                
             }
          
        }else{
            throw new Exception("Selectionnez un lieu d'arrivee", 1);
            
        }
        
    }

    public function getdateDepart() { return $this->dateDepart; }

    public function setdateDepart($dateDepart) {
        date_default_timezone_set('Europe/Moscow');
        $aujourdhui=date('d-m-Y');
        if($dateDepart<$aujourdhui && $date!=null){
            $this->dateDepart = $dateDepart;
        }else{
            throw new Exception("La date que vous avez entrée est déja passée");
        } 
        
    }

    public function getHeure(){ return $this->heure; }

    public function setHeure($heure) { $this->heure = $heure; }
    
}