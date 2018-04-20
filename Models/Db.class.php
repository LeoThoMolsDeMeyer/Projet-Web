<?php
class Db{

	private static $instance = null;
	private $_db;

	private function __construct(){
		try{
			$this->_db = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', 'root');
			$this->_db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$this->_db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
		}catch (PDOException $e){
	        die('Erreur de connexion à la bd : ' . $e->getMessage());
		}
	}

	public static function getInstance(){
		if (is_null(self::$instance)) {
			self::$instance = new Db();
		}
		return self::$instance;
	}

	public function getProfile($id){
		$query = 'SELECT * FROM members WHERE user_id=:user_id';
		$ps = $this->_db->prepare($query);
		$ps->bindValue(':user_id',$id);
		$ps->execute();
		if($ps->rowcount()!=0){
			$row=$ps->fetch();
			//creer un new membre
			return $row;
		}
	}

	public function setProfile($id){
		$query = 'UPDATE members SET $setter WHERE user_id=:user_id';
		$ps = $this->_db->prepare($query);
		$ps->bindValue(':user_id',$id);
		$ps->execute();
		if($ps->rowcount()!=0){
			$row=$ps->fetch();
			//creer un new membre
			return $row;
		}
	}

	public function getEvent($id){
		$query = 'SELECT * FROM evenements WHERE id=:id';
		$ps = $this->_db->prepare($query);
		$ps->bindValue(':id',$id);
		$ps->execute();
		if($ps->rowcount()!=0){
			$row=$ps->fetch();
			//creer un new membre
			return $row;
		}
	}
}
?>