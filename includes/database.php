<?php

//Object oriented connection method
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Database {

    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "SchedulerProDB";
    private $username = "root";
    private $password = "root";
    public $conn;

    // get the database connection
    public function getConnection() {

        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            echo 'Database Success ';
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }

}
