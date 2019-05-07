<?php
/*
   Handles database access for the Artist table.

 */
class RoomsDB
{

    private $pdo = null;

    private static $baseSQL = "SELECT * FROM Rooms";
    private static $constraint = ' order by RoomID LIMIT 20';

    public function __construct($connection) {
        $this->pdo = $connection;
    }

    public function findById($id)
    {
        $sql = self::$baseSQL .  ' WHERE roomID=? ';
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($id));
        return $statement->fetch();

    }
    
    /*
    public function findByHotelIdType($id,$type,$checkin,$checkout)
    {
        $sql = self::$baseSQL .  ' WHERE hotelID=? 
                                    AND typeID=?
                                    AND roomID NOT IN( SELECT roomID 
                                                    FROM reservations 
                                                    WHERE Rooms.roomID = reservations.roomID
                                                        AND startDate BETWEEN ? AND ? 
                                                        OR ? BETWEEN startDate AND endDate )' . self::$constraint;
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($id,$type,$checkin,$checkout,$checkin));
        
        return $statement;

    }
    */
    
    public function findByHotelIdType($id,$type,$checkin,$checkout)
    {
        $sql = self::$baseSQL .  ' INNER JOIN roomType ON roomType.typeID=Rooms.typeID  WHERE hotelID=? 
                                    AND Rooms.typeID=?
                                    AND roomID NOT IN( SELECT roomID 
                                                    FROM reservations 
                                                    WHERE startDate BETWEEN ? AND ? 
                                                        OR ? BETWEEN startDate AND endDate )' . self::$constraint;
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($id,$type,$checkin,$checkout,$checkin));
        
        return $statement;

    }
    /*
    SELECT * FROM Rooms WHERE hotelID=1 
                                    AND typeID=8
                                    AND NOT EXISTS( SELECT * 
                                                    FROM reservations 
                                                    WHERE Rooms.roomID = reservations.roomID
                                                        AND startDate BETWEEN ? AND ? 
                                                        OR ? BETWEEN startDate AND endDate )
    /*
    public function findByHotelIdType($id,$type)
    {
        $sql = self::$baseSQL .  ' WHERE hotelID=? 
                                    AND typeID=?' . self::$constraint;
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($id,$type));
        return $statement;

    }
    
    
    SELECT * 
    FROM `rooms` 
    WHERE hotelID=1
    AND typeID=1
    AND NOT EXISTS(SELECT *
                    FROM reservations
                    WHERE  t.startDate BETWEEN @randomDay AND @endDay OR
                            @randomDay BETWEEN t.startDate AND t.endDate);
    
    */
    
    public function getAll()
    {
        $sql = self::$baseSQL . self::$constraint;
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, null);
        return $statement;
    }

}

?>
