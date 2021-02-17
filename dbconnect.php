<?php

include_once 'util.php';

class DBConnection{
    var $pdo;

    //database connection happens here
    function __construct(){
        $dsn= "mysql:host=". Util::$SERVER_NAME . ";dbname=" . Util::$DB_NAME ."";
        $options = [ 
            PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC];
        try{
            //dsn contains the dialect(DBMS name, host and dbname)
            //PDO database handle is created by instantiating the PDO class
            $this->pdo= new PDO($dsn, Util::$DB_USER,Util::$DB_USER_PASS,$options);
        } catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    //returns the PDO connection handle
    public function connectToDB(){
        return $this->pdo;
    }
    public function closeDB(){
        $this->pdo = null;
    }
}
?>