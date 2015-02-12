<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Contact
 *
 * @author alexanderwine
 */
class Contact {

    
    //put your code here
    // database connection and table name
    private $conn;
    private $table_name = "Contact";
    // object properties
    public $id;
    public $typ_id;
    public $first_name;
    public $last_name;
    public $main_phone;
    public $sec_phone;
    public $email;
    public $street;
    public $city;
    public $state;
    public $zip;

    public function __construct($db) {
        $this->conn = $db;
        echo ' <br> ';
        echo ' Contact Construct success';
    }

    function create() {


        //write query
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    con_typ_id = ?, sch_first_name = ?, con_last_name = ?, con_main_phone = ?, con_sec_phone = ?, con_email = ?, con_street = ?, con_city = ?, con_state = ?, con_zip";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(1, $this->typ_id);
        $stmt->bindParam(2, $this->first_name);
        $stmt->bindParam(3, $this->last_name);
        $stmt->bindParam(4, $this->main_phone);
        $stmt->bindParam(5, $this->sec_phone);
        $stmt->bindParam(6, $this->email);
        $stmt->bindParam(7, $this->street);
        $stmt->bindParam(8, $this->city);
        $stmt->bindParam(9, $this->state);
        $stmt->bindParam(10, $this->zip);

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
