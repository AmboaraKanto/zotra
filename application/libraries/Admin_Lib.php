<?php
class Admin_Lib{
	private $idadmin;
    private $nom;
    private $prenom;
    private $email;
    private $mdp;
    private $super;
    private $idcooperative;
    
    public function __construct(){
            
    }
    public function initialize($idadmin,$nom,$prenom,$mail,$mdp,$super,$idcooperative){
    	 $this->setIdadmin($idadmin);
         $this->setNom($nom);
         $this->setPrenom($prenom);
         $this->setEmail($mail);
         $this->setMotdePasse($mdp);
         $this->setSuper($super);
         $this->setIdcooperative($idcooperative);
    }

    public function getIdamin() { return $this->idadmin; }

    public function setIdadmin($newid) { $this->idadmin = $newid; }

    public function getNom() { return $this->nom; }

    public function setNom($newnom) { 
        if(strcmp($newnom, "")!=0){
             $this->nom = $newnom;
         }else{
            throw new Exception("Ce champs est requis");
            
         }
       
    }

    public function getPrenom() { return $this->prenom; }

    public function setPrenom($newprenom) { $this->prenom = $newprenom; }

    public function getEmail() { return $this->mail; }

    public function setEmail($newmail) { $this->mail = $newmail; }

    public function getMotdePasse() { return $this->mdp; }

    public function setMotdePasse($newmdp) { $this->mdp = $newmdp; }

    public function getSuper() { return $this->super; }

    public function setSuper($newsuper) { $this->super = $newsuper; }

    public function getIdcooperative(){
        return $this->idcooperative;
    }
    public function setIdcooperative($id){
        $this->idcooperative=$id;
    }

    public function isSuper(){
        // si super==0 la personne est super admin
        //sinon non
        if($this->getSuper()==0){
            return true;
        }else{
            throw new Exception("Vous n'avez pas accès à cette page");
            
        }
    }
    public function confirmerMdp($mdp){
        if(strcmp($this->getMotdePasse(),$mdp)==0){
            return true;
        }else{
            throw new Exception("Mot de passe invalide");
            
        }
    }
}