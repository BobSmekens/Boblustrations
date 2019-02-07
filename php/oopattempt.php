<?php

class Connection {
    private $servername;
    private $username;
    private $password;
    private $database;
    public $conn;

    function __construct($server, $user, $pass, $db) {
        $this->servername = $server;
        $this->username = $user;
        $this->password = $pass;
        $this->database = $db;
    }

    function init_conn() {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }
    }
}

?>