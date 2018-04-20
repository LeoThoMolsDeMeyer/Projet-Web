<?php 
class CalendarController{
	private $db;

	public function __construct($db){
		$this->db = $db;
	}

	public function run(){
		
		if (!isset($_SESSION['connected'])){
			header('Location: index.php?action=login');
			die;
		}
		//$data = $this->db->getEvent(1);
		require_once('Views/calendar.php');
	}
}

?>