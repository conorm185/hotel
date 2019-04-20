<?php

class HotelsDB
{

    private $pdo = null;

    private static $baseSQL = "SELECT * FROM Hotels";
    private static $constraint = ' order by HotelID';

    public function __construct($connection) {
        $this->pdo = $connection;
    }

    public function findById($id)
    {
        $sql = self::$baseSQL .  ' WHERE HotelID=? ';
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
