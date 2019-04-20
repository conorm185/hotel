<?php
/*
   Handles database access for the Artist table.

 */
class ReservationsDB
{

    private $pdo = null;

    private static $baseSQL = "SELECT * FROM Reservations";
    private static $constraint = ' order by resID';

    public function __construct($connection) {
        $this->pdo = $connection;
    }

    public function findById($id)
    {
        $sql = self::$baseSQL .  ' WHERE resID=? ';
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
