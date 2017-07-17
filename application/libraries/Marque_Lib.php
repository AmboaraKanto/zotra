<?php
class Marque_Lib{
	private $idmarque;
    private $libelle;

    public function __construct(){
            
    }
    public function initialize($id="",$libelle=""){
    	$this->setIdmarque($id);
        $this->setLibelle($libelle);  
    }

    public function getIdmarque() { return $this->idmarque; }

    public function setIdmarque($idmarque) { $this->idmarque = $idmarque; }

    public function getLibelle() { return $this->libelle; }

    public function setLibelle ($newlibelle) { $this->libelle = $libelle; }

}