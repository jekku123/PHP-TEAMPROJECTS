<?php

class Database
{
    private $host;
    private $dbname;
    private $user;
    private $pass;
    private $conn;

    function __construct($host, $dbname, $user, $pass)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function connect()
    {
        $this->conn = null;

        try {
            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
            if ($this->conn->connect_error) {
                throw new Exception($this->conn->connect_error);
            }
        } catch (Exception $e) {
            die("Connection failed: " . $e->getMessage());
        }

        return $this->conn;
    }
}
