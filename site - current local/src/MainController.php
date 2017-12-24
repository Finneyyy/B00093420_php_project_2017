<?php
namespace EFProject;

class MainController
{
  //declare global variable
  private $twig;
  
  public function __construct(\twig\Environment $twig)
  {
	$this->twig = $twig;
  }  
  
  //function for the home page
  public function indexAction()
  {
	$template = "home.html.twig";
	$argsArray = ['pageTitle' => 'Home'];
	$html = $this->twig->render($template, $argsArray);
	print $html;
  }
  
  //function for about
  public function aboutAction()
  {
	$argsArray = ['title' => 'About Page'];
	$template = 'about';
	
	$html = $this->twig->render($template, $argsArray);
	print $html;
  }
  
  
  
  
  
  
  
  //functions
}