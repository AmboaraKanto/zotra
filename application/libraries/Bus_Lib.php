<?php
class Bus_Lib{
	private $idbus;
    private $marque;
    private $idcooperative;
    private $matricule;
    private $consommation;
    private $nbrplace;
    private $datesortie;
    private $etat;

    public function __construct(){
            
    }
    public function initialize($idbus,$marque,$idcooperative,$matricule,$consommation,$nbrplace,$datesortie,$etat){
        $this->setIdbus($idbus);
        $this->setMarque($marque);
        $this->setIdcooperative($idcooperative);
        $this->setMatricule($matricule);
        $this->setConsommation($consommation);
        $this->setNbrplace($nbrplace);
        $this->setDatesortie($datesortie);
        $this->setEtat($etat);
    }

    public function getIdbus() { return $this->idbus; }

    public function setIdbus($newid) { $this->idbus = $newid; }
    
    public function getMarque() { return $this->marque; }

    public function setMarque($newid) { $this->marque = $newid; }

    public function getIdcooperative() { return $this->idcooperative; }

    public function setIdcooperative($newid) {return $this->idcooperative = $newid; }

    public function getMatricule() { return $this->matricule; }

    public function setMatricule($matricule) { return $this->matricule = $matricule; }

    public function getConsommation() { return $this->consommation; }

    public function setConsommation($newconsommation) {
        if(is_numeric($newconsommation)){
            if($newconsommation<=100){
                $this->consommation = $newconsommation; 
            }else{
                throw new Exception("La consommation ne doit pas dépasser 100 litres/100 km");
                
            }
        }else{
            throw new Exception("La consommation doit être un chiffre");
            
        }
        
      
    }

    public function getNbrplace() { return $this->nbrplace; }

    public function setNbrplace($newplace) { 
        if(is_numeric($newplace)){           
            $this->nbrplace = $newplace; 
        }else{
            throw new Exception("Le nombre de place doit être un chiffre");
            
        }
        
    }

    public function getEtat() { return $this->etat; }

    public function setEtat($new) { 
        if(is_numeric($new)){
            if($new<=10){
               $this->etat = $new;
            }else{
                throw new Exception("L'état ne doit pas dépasser 10 sur 10");
                
            }
        }else{
            throw new Exception("L'état doit être un chiffre");
            
        }
        
    }

    public function getDatesortie()  { return $this->datesortie; }

    public function setDatesortie($datesortie) { $this->datesortie = $datesortie; }

}