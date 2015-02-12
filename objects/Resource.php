<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Resource
 *
 * @author alexanderwine
 */
class Resource {
    //put your code here
    
        // database connection and table name
    private $conn;
    private $table_name = "Resources";
    // object properties
    public $id;
    public $name;
    public $capacity;
    public $description;
    public $features;
    public $alt_id;
    public $typ_id;
    public $inactive;

    public function __construct($db) {
        $this->conn = $db;
        echo ' <br> ';
        echo ' Resource Construct success';
    }

    function create() {


        //write query
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    res_name = ?, res_capacity = ?, res_description = ?, res_features = ?, res_alt_id = ?, res_type_id = ?, res_inactive = ?";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(1, $this->name);
        $stmt->bindParam(2, $this->capacity);
        $stmt->bindParam(3, $this->description);
        $stmt->bindParam(4, $this->features);
        $stmt->bindParam(5, $this->alt_id);
        $stmt->bindParam(6, $this->typ_id);
        $stmt->bindParam(7, $this->inactive);
        

        if ($stmt->execute()) {
            return true;
            echo '<br>Execute success';
        } else {
            return false;
        }
    }
    function read() {
        //select all data
        $query = "SELECT
                    *
                FROM
                    " . $this->table_name;

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        echo '<br>Execute success';

        return $stmt;
    }
}
