<?php
    include("function.php");
    check_login();
    $rows = showAllCates();
    if(isset($_POST["submit"])){
        $title = $_POST["title"];
        $content = $_POST["content"];
        $c_id = $_POST["c_id"];
        $u_id = $_SESSION["ID"];
        //圖片上傳
        $file = $_FILES["img"];
        $filename = $_FILES["img"]["name"];
        $filetype = $_FILES["img"]["type"];
        $error = $_FILES["img"]["error"];
        $filesize = round($_FILES["img"]["size"] / 1024);
        $tmpname = $_FILES["img"]["tmp_name"];
        if($error == 4){
            // echo "請選擇檔案";
            $filename = '';
            try {
                $row = storePost($title,$filename,$content,$c_id,$u_id);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
            header("location:index.php?upload=success");
            return; //終止程式
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
        if($ext == "jpg" || $ext== "png" || $ext == "gif"){
            if($error == 0 ){
                if(move_uploaded_file($tmpname,"images/{$filename}")){
                    try {
                        $row = storePost($title,$filename,$content,$c_id,$u_id);
                    }catch(PDOException $e){
                        echo $e->getMessage();
                    }
                    header("location:index.php?upload=success");
                }
            }else if($error == 1){
                echo "檔案大小超過限制";
            }
    
        }else {
            echo "請選擇正確的格式";
        }

        
    }
?>
<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 py-3">
            <h2>新增文章</h2>
        </div>
        <div class="col-md-8 py-4">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">文章標題</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="img">封面圖片</label>
                    <input type="file" name="img" id="img" class="form-control-file">
                </div>
                <div class="form-group">
                    <label for="content">文章內容</label>
                    <textarea name="content" id="content" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="c_id">分類</label>
                    <select name="c_id" id="c_id" class="form-control">

                    <?php foreach($rows as $row){ ?>
                        <option value="<?php echo $row["id"]; ?>"><?php echo $row["title"];?></option>
                    
                    <?php } ?>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary" value="新增" name="submit">
                <input type="button" class="btn btn-danger" value="取消" onclick="history.back()">
            </form>

        </div>
    </div>
</div>

<?php include("template/footer.php"); ?>
<script>
    CKEDITOR.replace('content');
</script>