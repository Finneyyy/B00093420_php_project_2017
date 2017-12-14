<?php
namespace EFProject;

class ProductRepository
{
  private $connection;

  public function __construct()
  {
    $db = new Database();
    $this->connection = $db->getConnection();

    if(null == $this->connection)
    {
      die('There was an error in connecting to the database');
    }//close if

  }

  public function dropProductTable()
  {
    $sql = "drop table if exists Product";
    $this->connection->exec($sql);
  }

  public function createProductTable()
  {
    $sql = "create table if not exists Product(id int NOT NULL primary key pk_filler, description text, price int NOT NULL)";
    $this->connection->exec($sql);
  }

  public function getAllFromProduct()
  {
    $sql = 'select * from Product';

    $stmt = $this->connection->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(\PDO::FETCH_CLASS, 'EFProject\\Product');

    $product = $stmt->fetchAll();

    return $product;
  }

  public function deleteAllFromProduct()
  {
    $sql = 'delete from Product';

    
  }


}
