<?php

    class Utility{
        public static $DB_NAME = "task1", $DB_USER="root", $DB_USER_PASS = "", $SERVER_NAME = "localhost";

        public static function makeConnection($options = false){
            $dsn = "mysql:host=". self::$SERVER_NAME . ";DB_NAME=". self::$DB_NAME;
            if(!$options){
                $options = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ];
            }

            try{

                $pdo_conn = new PDO($dsn, self::$DB_USER, self::$dbpass, $options);
                return $pdo_conn;
            }
            catch(PDOException $ex){
                return $ex->getMessage();
            }

        }

         //checking if a user exists
         public static function userEmailExist($userEmail){
             $pdo = self::makeConnection();
             $stmt = $pdo->prepare("SELECT `userID` user where userEmail = ?");
             $stmt->execute([$userEmail]);
             if(count($stmt->fetchAll()) > 0){
                 $exist = true;
             }else{
                 $exist = false;
             }

             $stmt = null;
             $pdo = null;

             return $exist;
         }
    }


?> 