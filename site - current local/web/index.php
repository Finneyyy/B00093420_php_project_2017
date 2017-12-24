<?php
namespace EFProject;
use EFProject\MainController;

function _construct(\twig\Environment $twig)
{
	$this->twig = $twig;
}

//autoloader
require_once __DIR__ . '/../vendor/autoload.php';



//$action = filter_input(INPUT_GET, 'action',FILTER_SANITISE_STRING);

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
