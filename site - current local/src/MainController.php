<?php
namespace EFProject;

class MainController
{
  private $twig;

  public function _construct($twig)
  {
	   $this->twig = $twig;
  }

  //function for the home page
  public function indexAction()
  {
	   $template = 'home.html.twig';
	   $args = [
     ];
	   $html = $this->twig->render($template, $args);
	   print $html;
  }

  //function for about
  public function aboutAction()
  {
	$args = ['title' => 'About Page'];
	$template = 'about';
	$html = $this->twig->render($args, $template);
	print $html;
  }







  //functions
}
