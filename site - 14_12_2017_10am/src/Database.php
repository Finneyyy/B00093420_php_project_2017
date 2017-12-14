<?php
namespace EFProject;

class Database
{
	const DB_NAME = 'users';
	const DB_USER = 'staff';
	const DB_PASS = 'staff';
	const DB_HOST = 'localhost:8000';
	
	//private connection
	private $connection;
	
	//create & store MySQL db connection
	public function __construct()
	{
		try
		{
			$this->connection = $this->createMysqlConnection();
		} 
		catch(\Exception $e)
		{
			print $e;
		}
	}
	
	//create new MySQL db connection
	private function createMysqlConnection()
	{
		$dsn = 'mysql:dbname' . self::DB_NAME . ';host= ' . self::DB_HOST;
		return new \PDO($dsn, self::DB_USER, self::DB_PASS);
	}
	
	//@return mixed
	public function getConnection()
	{
		return $this->connection;
	}
	
}