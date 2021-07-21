<?php

namespace Application\core;

use PDO;
use PDOException;

class Database extends PDO{
    private $db_name = 'php_mvc';
    private $db_user = 'root';
    private $db_pass = '';
    private $db_host = 'localhost';
    public $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->db_host;dbname=$this->db_name", $this->db_user, $this->db_pass); 
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}