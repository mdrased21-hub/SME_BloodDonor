<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBConnect
 *
 * @author Vaibhav
 */
class DBConnect {
    private $db = NULL;

    const DB_SERVER = "sql12.freesqldatabase.com";
    const DB_USER = "sql12386523";
    const DB_PASSWORD = "L5ImQtWCGa";
    const DB_NAME = "sql12386523";

    public function __construct() {
        $dsn = 'mysql:dbname=' . self::DB_NAME . ';host=' . self::DB_SERVER;
        try {
            $this->db = new PDO($dsn, self::DB_USER, self::DB_PASSWORD);
        } catch (PDOException $e) {
            throw new Exception('Connection failed: ' .
            $e->getMessage());
        }
        return $this->db;
    }
    
    public function getDonorsByBloodType($bloodType){
        $stmt = $this->db->prepare("SELECT * FROM donors WHERE b_type LIKE ?");
        $stmt->execute(["%".$bloodType."%"]);
        return $stmt->fetchAll();
    }
    public function registerUser($firstName,$lastName,$email,$dob,$gender,$b_type,$address,$city,$mobile){
        $stmt = $this->db->prepare("INSERT INTO users (first_name,last_name,email,dob,gender,b_type,address,city,mobile) VALUES (?,?,?,?,?,?,?,?,?)");
        $stmt->execute([$firstName,$lastName,$email,$dob,$gender,$b_type,$address,$city,$mobile]);
        return true;
    }
    public function getUsers(){
        $stmt = $this->db->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    
    
    
    
}
