<?php
/*
   Handles database access for the Artist table.

 */
class ArtistDB
{

    private $pdo = null;

    private static $baseSQL = "SELECT * FROM Customers";
    private static $constraint = ' order by LastName';

    public function __construct($connection) {
        $this->pdo = $connection;
    }

    public function findById($id)
    {
        $sql = self::$baseSQL .  ' WHERE CustomerID=? ';
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($id));
        return $statement->fetch();

    }

    public function getAll()
    {
        $sql = self::$baseSQL . self::$constraint;
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, null);
        return $statement;
    }

}

?>
