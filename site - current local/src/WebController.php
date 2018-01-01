<?php

namespace EFProject;

class WebController
{
	const PATH_TO_TEMPLATES = __DIR__ . '/../views';

	private $mainController;

	public function __construct()
	{
		$twig = new Twig\Enviroment(new \Twig_Loader_Filesystem(self::PATH_TO_TEMPLATES));
		$this->mainController = new MainController($twig);
	}

	public function run()
	{

		$action = filter_input(INPUT_GET, 'action');
		if (empty($action))
		{
			$action = filter_input(INPUT_POST, 'action');
		}


		switch($action)
		{
			case 'about':
				$this->MainController->aboutAction;
				break;

			case 'place':
			  $this->MainController->placeAction;
				break;

			case 'home':
			default:
				$this->MainController->indexAction();
		}

	}
}
