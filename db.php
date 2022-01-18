<?php
class db
{
    private $host     = "localhost";
    private $user     = "root";
    private $password = "";
    private $dbname   = "crud";
    protected $conn;

    public function __construct()
    {
        try {
            $this->conn = new mysqli($this->host,$this->user,$this->password,$this->dbname);
        }
        catch (Exception $e)
        {
            echo "Qoşulmada problem oldu".$e->getMessage();
        }
    }
}