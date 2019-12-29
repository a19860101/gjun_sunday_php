<?php
    class Post extends DB {
        function showAllPosts(){
            try{
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
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        function showPost($id){
            try{
                $sql = "SELECT * FROM posts WHERE id = ?";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute([$id]);
                $row = $stms->fetch();
                return $row;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        function storePost($title,$filename,$content,$c_id,$u_id){
            try{
                $sql = "INSERT INTO posts(title,img,content,c_id,u_id,created_at,updated_at)VALUES(?,?,?,?,?,?,?)";
                $currentD = $this->currentD();
                $stmt = $this->connect()->prepare($sql);
                $stmt = execute([$title,$filename,$content,$c_id,$u_id,$currentD,$current]);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        function deletePost($id,$img){
            try{
                unlink($img);
                $sql = "DELETE FROM posts WHERE id = ?";
                $stms = $this->connect()->prepare($sql);
                $stms->execute([$id]);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }