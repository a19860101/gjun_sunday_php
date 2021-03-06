<?php
    class Post extends DB {
        public $page;
        public $pages;
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
        function pagination($per = 3){
            try {
                $sql = "SELECT * FROM posts";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute();
                $total = $stmt->rowCount();
                // $per = 3;
                $this->pages = ceil($total / $per);
                //ceil 無條件進位
                //floor 無條件捨去
                //round 四捨五入
        
                if(!isset($_GET["page"])){
                    $this->page = 1;//當前頁面
                }else{
                    $this->page = $_GET["page"];
                }
          
                $start = ($this->page - 1) * $per;
                $sql = "SELECT * FROM posts LIMIT $start,$per";
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
        function pager(){
            $page = $this->page;
            $next = $this->page + 1;
            $prev = $this->page - 1;
            $pages = $this->pages;

            $webpage = $_SERVER["PHP_SELF"];
            echo "<div>";
            if($page != 1){
                echo "<a href='{$webpage}?page=1'>最前頁</a>";
                echo "<a href='{$webpage}?page={$prev}'>上一頁</a>";
            }
            for($i=0;$i<$pages;$i++){
                $p = $i + 1;
                if($p == $page){
                    echo "<a href='{$webpage}?page={$p}' class='active'>{$p}</a> ";
                }else{
                    echo "<a href='{$webpage}?page={$p}'>{$p}</a> ";
                }
            }
            if($page != $pages){
                echo "<a href='{$webpage}?page={$next}'>下一頁</a>";
                echo "<a href='{$webpage}?page={$pages}'>最末頁</a>";
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
        function updatePost($title,$content,$c_id,$id){
            try {
                $sql = "UPDATE posts SET title=?,content=?,c_id=?,updated_at=? WHERE id = ?";
                $stmt = $this->connect()->prepare($sql);
                $stmt -> execute([$title,$content,$c_id,$this->currentD(),$id]);
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
        static function coverName($file){
            $filename = $file["name"];
            $filetype = $file["type"];
            $error = $file["error"];
            $filesize = round($file["size"] / 1024);
            $tmpname = $file["tmp_name"];
            if($error == 4){
                return 4;
            }
            $path = pathinfo($filename);
            $ext = $path["extension"];
            switch($ext){
                case "jpg":
                    $filename = md5(uniqid()).".jpg";
                    break;
                case "png":
                    $filename = md5(uniqid()).".png";
                    break;
                case "gif":
                    $filename = md5(uniqid()).".gif";
                    break;
            }
            $f["name"] = $filename;
            $f["ext"] = $ext;
            $f["tmp"] = $tmpname;
            $f["error"] = $error;
            // $f = compact("filename","ext","tmpname","error");
            return $f;
        }
        static function cover($filename,$ext,$tmpname,$error){
            
            if($ext == "jpg" || $ext== "png" || $ext == "gif"){
                if($error == 0 ){
                    if(move_uploaded_file($tmpname,"images/{$filename}")){
                        // echo "上傳成功";
                        return 0;
                    }else{
                        // echo "上傳失敗";
                        return 1;
                    }
                }else if($error == 1){
                    // echo "檔案大小超過限制";
                    return 2;
                }
        
            }else {
                // echo "請選擇正確的格式";
                return 3;
            }
        }
    }