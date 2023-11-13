<?php
class Database {
    public $pdo;

    public function __construct($db = "telefoonwinkel", $user = "root", $pwd = "Hmida!12", $host = "localhost") {
        try {
            $this->pdo = new PDO("mysql:host=$host; dbname=$db", $user, $pwd);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected to database $db";
        } catch (PDOException $e) {
        
            file_put_contents("databaseErrors.log", $e->getMessage() . PHP_EOL, FILE_APPEND);
            echo "Error connecting to database. Check the log for details.";
        }
    }
}
