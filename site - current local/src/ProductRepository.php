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

    $rowAffex = $this->connection->exec($sql);
    return $rowAffex;
  }

  public function insertIntoProduct($description, $price)
  {
    $sql = 'insert into Product (description, price) values (:description, :amount)';
    $stmt = $this->connection->prepare($sql);

    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':amount', $price);

    //todo: Figure out proper comment
    $noErrors = $stmt->execute();

    if($noErrors)
    {
      return $this->connection->lastIdInserted();
    } else
    {
      return false;
    }
  }

  public function updateProduct($id, $description, $price)
  {
    $sql = "update Product set description = :description, price = :price where id = :id";

    $stmt = $this->connection->prepare($sql);

    //Starts to bind, preferably without ropes
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':price', $price);

    //Filler
    $noErrors = $stmt->execute();
    return $noErrors;
  }

  public function getOneFromProduct($id)
  {
    //$sql = 'select * from Product where $id = :id'
    $sql = 'select * from Product where id = :id';
    $stmt = $this->connection->prepare($sql);

    //Bound with wrists behind back
    $stmt->bindParam(':id', $id);

    //EXECUTE HIM
    $stmt->execute();

    //Fetch boy, go fetch
    $stmt->setFetchMode(\PDO::FETCH_CLASS, 'EFProject\\Product');

    if($product = $stmt->fetch())
    {
      return $product;
    } else
    {
      return null;
    }//end else

    return $product;
  }

  public function removeOneFromProduct($id)
  {
    $sql = 'delete from Product where id = :id';
    $stmt = $this->connection->prepare($sql);

    //How do I always manage to get tied up?
    $stmt->bindParam(':id', $id);

    //*sighs*.. Another one? What did he do?
    $noErrors = $stmt->execute();

    return $noErrors;
  }


}
