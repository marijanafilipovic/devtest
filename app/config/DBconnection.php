<?php
namespace app\classes;

use PDO;

class DBconnection
{
    private static $instance;
    private $conn;
    private $host = 'localhost';
    private $user = 'devtest';
    private $pass = 'devtest';
    private $name = 'devtest';
    private function __construct()
    {
        $this->conn = new PDO("mysql:host={$this->host};
    dbname={$this->name}", $this->user,$this->pass,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }
    public static function getInstance()
    {
        if(!self::$instance){
            self::$instance = new DBconnection();
            /*   $className = __CLASS__;
              self::$instance = new $className;*/
        }
        return self::$instance;
    }
    public function getConnection()
    {
        return $this->conn;
    }
    public function getUser($id){

    }
    public function registerUser()
    {

    }
}
