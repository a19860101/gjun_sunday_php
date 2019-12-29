<?php
    class DB {
        private $db_host = "localhost";
        private $db_user = "admin";
        private $db_pw = "admin";
        private $db_name = "sunday";
        private $db_charset = "utf8mb4";

        function currentD(){
            date_default_timezone_set("Asia/Taipei");
            $currentD = date("Y-m-d H:i:s");
            return $currentD;
        }
        function connect(){
            try {
                $dsn = "mysql:host={$this->db_host};dbname={$this->db_name};charset={$this->db_charset}";
                $pdo = new PDO($dsn,$this->db_user,$this->db_pw);
                $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
                return $pdo;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

    }

    // $test = new DB;
    // var_dump($test->connect());