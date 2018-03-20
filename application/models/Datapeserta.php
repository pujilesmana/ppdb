<?php
	
	class Datapeserta extends CI_Model{

		public function read($row="*",$cond="",$tabel=""){
      		$sql = "SELECT ".$row." FROM ".$tabel." ".$cond;
     		$query = $this->db->query($sql);
      		return $query; 
    	}

    	public function insert($row,$value){ //METHOD INSERT GENERAL
      		$sql = "INSERT INTO ".$row." VALUES(".$value.")";
     		$query = $this->db->query($sql);
      		return $query; 
   	 	}

   	 	public function update($table,$set){ //METHOD UPDATE GENERAL
      		$sql = "UPDATE ".$table." SET ".$set;
      		$query = $this->db->query($sql);
      		return $query; 
   	 	}
	}
		
?>