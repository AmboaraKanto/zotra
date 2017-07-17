<?php
/**
* 
*/
class Util_Model extends CI_Model
{
	
	function __construct(){
		parent::__construct();
	}

	public function findAll($table){
		$query = $this->db->get($table);
		$data= $query->result();
		return $data;
	}

	public function findOrderBy($table,$col,$ordre){
		$this->db->from($table);
		$this->db->order_by($col, $ordre);
		$query = $this->db->get(); 
		return $query->result();
	}

	public function save($table,$donnee){		
		if ($this->db->insert($table, $donnee)) {
			return true;
		}
	}
	
	public function getLastInsert(){
		return $this->db->insert_id();
	}

	public function delete($nomId,$id,$nomTable){
		$temp="'".$nomId."'";
		 $this->db->where($nomId, $id);
        return $this->db->delete($nomTable);
	}

	public function update($nomId,$id,$nomTable){
		$temp="'".$nomId."'";
		$this->db->where($nomId, $id);
        return $this->db->update($nomTable);
	}


	

}
?>