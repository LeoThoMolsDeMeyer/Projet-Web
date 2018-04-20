<?php

session_start();

define('VIEWS_PATH', 'views/');

require_once('models/Db.class.php');

$action = !empty($_GET['action']) ? $_GET['action'] : 'default';

$db = Db::getInstance();

switch ($action) {
	case 'register':
		require_once('controllers/RegisterController.php');
		$controller = new RegisterController();
		break;
	case 'login':
		require_once('controllers/LoginController.php');
		$controller = new LoginController($db);
		break;
	case 'profile':
		require_once('controllers/ProfileController.php');
		$controller = new ProfileController($db);
		break;
	case 'profile2':
		require_once('controllers/Profile2Controller.php');
		$controller = new Profile2Controller($db);
		break;
	case 'calendar':
		require_once('controllers/CalendarController.php');
		$controller = new CalendarController($db);
		break;
	case 'logout':
		require_once('controllers/LogoutController.php');
		$controller = new LogoutController();
		break;
	default:
		require_once('controllers/HomeController.php');
		$controller = new HomeController();
		break;
}

require_once('Views/header.php');
if (isset($_SESSION['connected'])){
	require_once('Views/userNav.php');
}else{
	require_once('Views/guestNav.php');
}
$controller->run();
require_once('Views/footer.php');
?>