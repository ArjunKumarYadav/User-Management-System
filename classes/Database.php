<?php
namespace App\Database;

class Database {
    private static $connection = null;
    
    public static function getConnection() {
        if (self::$connection === null) {
            $host = 'localhost';
            $dbname = 'UL_database';
            $username = 'root';
            $password = '';
            
            try {
                self::$connection = new \PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                self::$connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e) {
                die("Connection failed: " . $e->getMessage());
            }
        }
        return self::$connection;
    }
}
?>