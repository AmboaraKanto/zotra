<?php
class Cooperative_Lib{
	private $idcooperative;
    private $libelle;
    private $anneedecreation;
    private $logo;

    public function __construct(){
            
    }
    public function initialize($idcooperative,$libelle,$annee,$logo){
    	$this->setIdcooperative($idcooperative);
  		$this->setLibelle($libelle);
        $this->setAnneedeCreation($annee);
        $this->setLogo($logo);
    }

    public function getIdcooperative() { return $this->idcooperative; }

    public function setIdcooperative($newid) { $this->idcooperatve = $newid; }

    public function getLibelle() { return $this->libelle; }

    public function setLibelle($libelle) { $this->libelle = $libelle; }

    public function getAnneedeCreation(){ return $this->anneedecreation; }

    public function setAnneedeCreation($annee){ $this->anneedecration = $annee; }

    public function getLogo(){ return $this->logo; }

    public function setLogo($newlogo) { $this->logo = $newlogo; }

}