<?php
class Cooperative_Model extends CI_MODEL{
    
    public function __construct(){
        parent::__construct();            
    }

    public function addcooperative(){
        $libelle = ;
        $anneedecreation = ;
        $logo = ;
        $data = array(
            'libelle'=>$libelle,
            'anneedecreation'=>$anneedecreation,
            'logo'=>$logo,
        );
        $this->db->insert('cooperative',$data);
    }

    public function deletecooperative($id){
        $this->db->where->('idcooperative',$id);
        $this->db->delete('cooperative');
    }
}
