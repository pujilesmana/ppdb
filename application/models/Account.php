<?php
	
	class Account extends CI_Model{

		var $nisn;
		var $username;
		var $password;
		var $tipe;

    	public function read($row="*",$cond=""){
      		$sql = "SELECT ".$row." FROM account ".$cond;
      		$query = $this->db->query($sql);
     	 	  $row = $query->row();
      		return $row; 
		}

		public function readLogin($nisn,$password){ //Method Query Untuk Login
      		$sql = "SELECT * FROM account WHERE nisn=? AND password =?";
      		$query = $this->db->query($sql,array($nisn,$password));
      		$row = $query->num_rows();
      
      		if($row > 0)
          {
				    return 1;
      		}
      		else
          {
         		return 0;
      		}
    	}

    	public function getUsername(){
       		return $this->username;   
    	}

    	public function getNisn(){
    		return $this->nisn;
    	}

    	public function fillAllData($nisn,$username,$tipe){
       		$this->nisn = $nisn;
       		$this->username = $username;
       		$this->tipe = $tipe;
    	}

    	public function ubah_password($new,$usr){
       		$sql = "UPDATE account SET password = ? WHERE username = ?";
       		$query = $this->db->query($sql,array($new,$usr));
       		return $query;
    	}
	}
?>