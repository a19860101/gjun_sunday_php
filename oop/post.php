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
                $row = $stmt->fetch();
                return $row;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        function storePost($title,$filename,$content,$c_id,$u_id){
            try{
                $sql = "INSERT INTO posts (title,img,content,u_id,c_id,created_at,updated_at)VALUES(?,?,?,?,?,?,?)";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute([$title,$filename,$content,$c_id,$u_id,$this->currentD(),$this->currentD()]);
                
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
        static function cover($file){
            // var_dump($file);
            $filename = $file["name"];
            $filetype = $file["type"];
            $error = $file["error"];
            $filesize = round($file["size"] / 1024);
            $tmpname = $file["tmp_name"];
            echo $filename."<br>";
            echo $filetype."<br>";
            echo $error."<br>";
            echo $filesize."<br>";
            echo $tmpname."<br>";
            // $path = pathinfo($filename);
            // $ext = $path["extension"];
            // switch($ext){
            //     case "jpg":
            //         $filename = md5(uniqid()).".jpg";
            //         break;
            //     case "png":
            //         $filename = md5(uniqid()).".png";
            //         break;
            //     case "gif":
            //         $filename = md5(uniqid()).".gif";
            //         break;
            // }
            // if($ext == "jpg" || $ext== "png" || $ext == "gif"){
            //     if($error == 0 ){
            //         if(move_uploaded_file($tmpname,"images/{$filename}")){
            //             echo "上傳成功";
            //         }else{
            //             echo "上傳失敗";
            //         }
            //     }else if($error == 1){
            //         echo "檔案大小超過限制";
            //     }
        
            // }else {
            //     echo "請選擇正確的格式";
            // }
        }
    }