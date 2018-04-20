<?php 
class CalendarController{
	private $db;

	public function __construct($db){
		$this->db = $db;
	}

	public function run(){
		
		//$data = $this->db->getEvent(1);
		require_once('Views/calendar.php');
	}
}

?>