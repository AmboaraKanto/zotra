<?php
class Chauffeur_Lib{
	private $idchauffeur;
    private $nom;
    private $prenom;
    private $cin;
    private $dateembauche;

    public function __construct(){
            
    }
    public function initialize($idchauffeur,$nom,$prenom,$cin,$dateembauche){
    	$this->setIdchauffeur($idchauffeur);
    	$this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setCin($cin);
        $this->setDateEmbauche($dateembauche); 
    }


    public function getIdchauffeur() { return $this->idchauffeur; }

    public function setIdchauffeur($newid) { $this->idchauffeur = $newid; }

    public function getNom() { return $this->nom; }

    public function setNom($newnom) { $this->nom = $newnom; }

    public function getPrenom() { return $this->prenom; }

    public function setPrenom($newprenom) {  $this->prenom = $newprenom; } 

    public function getCin() { return $this->cin; }

    public function setCin($newcin) { $this->cin = $newcin; }

    public function getDateEmbauche() { return $this->dateembauche; }

    public function setDateEmbauche($newdateembauche) { $this->dateembauche = $newdateembauche; }

}