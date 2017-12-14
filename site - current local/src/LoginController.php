<?php

  namespace EFProject;

//for the loginController (this one), every page has to start with this
  private $twig;
  
  public function __construct(\twig\Environment $twig)
  {
	$this->twig = $twig;
  }  
  