<?php
class Admin_Model extends CI_Model{

    public function __construct(){
         parent::__construct();
        
    }

     public function login($data){
        $condition="email='".$data['email']."' and motdepasse='".$data['motdepasse']."'";
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where($condition);
        $query=$this->db->get();
        if($query->num_rows()==1){
            return $query->result();
        }else{
             throw new Exception("Votre mot de passe ou votre email est incorrect.");
            
        }
       
    }

    public function signin($data){                   
            $this->db->insert('admin',$data);
    }

}
