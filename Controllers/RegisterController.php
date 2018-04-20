<?php
	class RegisterController{

		public function run(){

			if (!isset($_SESSION['connected'])){
				header('Location: index.php?action=login');
				die;
			}
			
			require_once('Views/register.php');

		}
	}
?>