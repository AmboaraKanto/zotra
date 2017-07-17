<?php
class Client_Lib{
	private $idclient;
    private $nom;
    private $prenom;
    private $cin;
    private $contact;
    private $email;
    private $motdepasse;

    public function __construct(){
            
    }
    public function initialize($idclient,$nom,$prenom,$cin,$contact,$email,$motdepasse){
    	$this->setId($idclient);
    	$this->setNom($nom);
    	$this->setPrenom($prenom);
    	$this->setCin($cin);
    	$this->setContact($contact);
    	$this->setEmail($email);
    	$this->setMotdePasse($motdepasse);
    }
    public function getId() { return $this->idclient; }

    public function setId($newid) { $this->idclient = $newid; }

    public function getNom() { return $this->nom; }

    public function setNom($newnom) { $this->nom = $newnom;}

    public function getPrenom() { return $this->prenom; }

    public function setPrenom($newprenom) {$this->prenom = $newprenom; }

    public function getCin() { return $this->cin; }

    public function setCin($newcin) { 
        if( strlen($newcin) == 12 )$this->cin = $newcin; 
        else throw new Exception("Votre CIN n'est pas valide");
    }

    public function getContact() { return $this->contact; }

    public function setContact($newcontact) {            
        if(strlen($newcontact) == 10) $this->contact = $newcontact;
        else throw new Exception("Votre contact n'est pas valide");
    }

    public function getEmail() { return $this->email; }

    public function setEmail($newemail) { $this->email = $newemail; }

    public function getMotdePasse() { return $this->motdepasse; }

    public function setMotdePasse($newMotdePasse) { $this->motdepasse = $newMotdePasse; }

    public function confirmerMdp($mdp){
        if(strcmp($this->getMotdePasse(),$mdp)==0){
            return true;
        }else{
            throw new Exception("Mot de passe invalide");
            
        }
    }
}
