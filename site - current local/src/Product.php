<?php
namespace EFProject;

class Product
{
	//variables go here
	private $id;
	private $description;
	private $price;

	//GETTERS and SETTERS go here
	public function getId()
	{
		return $this->id;
	}

	public function setID($id)
	{
		return $this->id = $id;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setDescription($description)
	{
		return $this->description = $description;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function setPrice($price)
	{
		return $this->price = $price;
	}

	//function for strings, $text is general name
	public function __toString()
	{
		//empty line
		$text = ' ';
		$text .= 'id = ' . $this->id;
		$text .= ' description = ' . $this->description;
		$text .= ' price = ' . $this->price;

		return $text;

	}

}
