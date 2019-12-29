<?php
    class Post extends DB {
        function showAllPosts(){
            $sql = "SELECT posts.* ,users.name,users.email, category.title
                    AS c_title 
                    FROM posts 
                    LEFT JOIN category 
                    ON posts.c_id = category.id
                    LEFT JOIN users
                    ON posts.u_id = users.id 
                    ORDER BY id DESC";
            // $sql = "SELECT * FROM posts ORDER BY id ASC";
            // $stmt = $pdo->prepare($sql);
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $rows = array();
            while($row = $stmt->fetch()){
                $rows[] = $row;
            }
            return $rows;
        }
    }