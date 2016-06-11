<?php 
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
defined('CONFIG_PATH') ? null : define('CONFIG_PATH', 'C:'.DS.'wamp'.DS.'www'.DS.'languages1'.DS.'config'.DS);
defined('MODEL_PATH') ? null : define('MODEL_PATH', 'C:'.DS.'wamp'.DS.'www'.DS.'languages1'.DS.'model'.DS);
defined('CONTROLLER_PATH') ? null : define('CONTROLLER_PATH', 'C:'.DS.'wamp'.DS.'www'.DS.'languages1'.DS.'controller'.DS);
defined('VIEW_PATH') ? null : define('VIEW_PATH', 'C:'.DS.'wamp'.DS.'www'.DS.'languages1'.DS.'views'.DS);
defined('CSS_PATH') ? null : define('CSS_PATH', 'http://localhost/languages1/public/css/');
defined('LOGO_PATH') ? null : define('LOGO_PATH', 'http://localhost/languages1/public/logo/');

   
    if (isset($_GET['controller']) && isset($_GET['action'])) {
  	    $controller = $_GET['controller'];
        $action  = $_GET['action'];
  	} else {
  		$controller = 'pages';
   		$action  = 'home';
  	}
	require_once("routes.php");
?>