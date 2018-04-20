<?php 
class Profile2Controller{
	private $db;

	public function __construct($db){
		$this->db = $db;
	}

	public function run(){

		if (!isset($_SESSION['connected'])){
			header('Location: index.php?action=login');
			die;
		}
		
		//the number of getProfile() is the id of the member active
		$data = $this->db->getProfile(1);
		//$set = $this->db->setProfile(1);
		require_once('Views/profile2.php');
	}
}
?>