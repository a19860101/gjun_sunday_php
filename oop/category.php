<?php
    class Category extends DB {
        function showAllCate(){
            try{
                $sql = "SELECT * FROM category";
                $stmt = $this->connect()->prepare($sql);
                $stmt -> execute();
                $rows = array();
                while($row = $stmt->fetch()){
                    $rows[] = $row;
                }
                return $rows;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }