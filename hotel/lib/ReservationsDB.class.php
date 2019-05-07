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

        public function findByCustomerId($id)
    {
        $sql = 'SELECT * FROM view_reservations WHERE CustomerID=? ORDER BY startDate DESC';
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($id));
        return $statement;

    }
    
    public function getAll()
    {
        $sql = self::$baseSQL . self::$constraint;
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, null);
        return $statement;
    }
    
    public function insertReservation($room_id,$customer_id,$start,$end)
    {
        //$diff=date_diff($start,$end);
        
        $datetime1 = date_create($start);
        $datetime2 = date_create($end);
        $interval = date_diff($datetime1, $datetime2);
        $length = $interval->format('%a');
        $sql = 'INSERT INTO reservations(roomID, customerID, startDate, endDate, length) VALUES (?,?,?,?,?)';
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($room_id,$customer_id,$start,$end,$length));
        return $statement;        
    } 
}

?>
