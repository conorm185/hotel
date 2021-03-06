<?php
/*
   Handles database access for the Artist table.

 */
class ArtistDB
{

    private $pdo = null;

    private static $baseSQL = "SELECT * FROM Invoices";
    private static $constraint = ' order by InvoiceID';

    public function __construct($connection) {
        $this->pdo = $connection;
    }

    public function findById($id)
    {
        $sql = self::$baseSQL .  ' WHERE InvoiceID=? ';
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
