<?php
//autoloader
require_once __DIR__ . '/../vendor/autoload.php';

namespace EFProject;

$action = filter_input(INPUT_GET, 'action',FILTER_SANITISE_STRING);

//create controller object
$mainController = new MainController();
switch($action)
{
	case 'about':
		$html = $mainController->aboutAction($twig);
		break;
		
	default:
		$html = $mainController->indexAction($twig);
}
print $html;

?>




