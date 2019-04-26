<?php
/*
   Handles database access for the Artist table. 

 */
class LogonDB 
{  
    
    private $pdo = null;
    
    private static $baseSQL = "SELECT * FROM customerlogon";
    private static $constraint = ' order by CustomerID';
    
    public function __construct($connection) {
        $this->pdo = $connection;
    }      

    public function findById($id)
    {
        $sql = self::$baseSQL .  ' WHERE CustomerID=? ';
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($id));
        return $statement->fetch();
        
    }
    
    public function findByUser($UserName)
    {
        $sql = 'SELECT Salt FROM customerlogon WHERE email=? ';
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($UserName));
        return $statement->fetch();      
    }
    
    public function getAll()
    {
        $sql = self::$baseSQL . self::$constraint;
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, null);
        return $statement;        
    }
    
    public function validateUser($UserName,$Pass)
    {
        $salt = self::findByUser($UserName);
        $password = md5($Pass.$salt['Salt']);
        $sql = self::$baseSQL .' WHERE email=? AND Pass=?'. self::$constraint;
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($UserName,$password));
        return $statement->fetch();        
    }   
    
    public function insertUser($UserName,$Pass)
    {
        $salt = generateRandomSalt();
        $sql = 'INSERT INTO customerlogon (email,Pass,Salt,State,DateJoined) VALUES(?,?,?,1,NOW())';
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($UserName,md5($Pass.$salt),$salt));
        return $statement;        
    } 
}

?>