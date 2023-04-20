<?php

class Database
{
    private $host = 'db';
    private $dbname = 'todoDB';
    private $user = 'root';
    private $pass = 'lionPass';
    private $conn;

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
