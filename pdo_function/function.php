<?php
    function showAll(){
        try {
            include("pdo.php");
            // global $pdo;
            $sql = "SELECT * FROM students";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $rows = array();
            while($row = $stmt->fetch()){
                $rows[] = $row;
            }
            return $rows;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function showStudent($id){
        try {
            include("pdo.php");
            $id = $_GET["id"];
            $sql = "SELECT * FROM students WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt -> execute([$id]);
            $row = $stmt->fetch();
            return $row;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }