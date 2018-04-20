<?php 
class ProfileController{
	private $db;

	public function __construct($db){
		$this->db = $db;
	}

	public function run(){
		//the number of getProfile() is the id of the member active
		$data = $this->db->getProfile(1);
        var_dump ($data);
		require_once('Views/profile.php');
	}
}
?>