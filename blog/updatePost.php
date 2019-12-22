<?php
    include("function.php");
    $title = $_POST["title"];
    $content = $_POST["content"];
    $c_id = $_POST["c_id"];
    $id = $_POST["id"];
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
            $row = updatePost($title,$filename,$content,$c_id,$u_id);
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
                    updatePost($title,$filename,$content,$c_id,$id);
                    header("location:index.php");
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