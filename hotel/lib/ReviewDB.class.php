<?php
/*
   Handles database access for the Artist table.

 */
class ReviewDB
{

    private $pdo = null;

    private static $baseSQL = "SELECT * FROM Review";
    private static $constraint = ' order by reviewID';

    public function __construct($connection) {
        $this->pdo = $connection;
    }

    public function findById($id)
    {
        $sql = self::$baseSQL .  ' WHERE ReviewID=? ';
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($id));
        return $statement->fetch();

    }
    public function findByHotelId($id)
    {
        $sql = self::$baseSQL .  ' WHERE hotelID=? ORDER BY date DESC';
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($id));
        return $statement;
    }
    
    public function getAll()
    {
        $sql = self::$baseSQL . self::$constraint;
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, null);
        return $statement;
    }
    
    public function insertReview($id,$customerID,$hotelID,$rating,$comment)
    {
        $sql = 'INSERT INTO review(reviewID, customerID, hotelID, rating, comment) VALUES (?,?,?,?,?)';
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($id,$customerID,$hotelID,$rating,$comment));
        return $statement;        
    } 
}

?>
