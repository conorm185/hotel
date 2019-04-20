<?php
/*
   Handles database access for the Artist table.

 */
class RoomTypeDB
{

    private $pdo = null;

    private static $baseSQL = "SELECT * FROM roomtype";
    private static $constraint = ' order by typeID LIMIT 20';

    public function __construct($connection) {
        $this->pdo = $connection;
    }

    public function findById($id)
    {
        $sql = self::$baseSQL .  ' WHERE typeID=? ';
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($id));
        return $statement->fetch();

    }
    /*
    public function findByHotelId($id)
    {
        $sql = self::$baseSQL .  ' WHERE hotelID=? ' . self::$constraint;
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($id));
        return $statement;

    }
    */
    public function getAll()
    {
        $sql = self::$baseSQL . self::$constraint;
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, null);
        return $statement;
    }

}

?>